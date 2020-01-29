<?php

class GodController extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model($this->model);

    $this->model = $this->{$this->model};

    $this->data["permissoes"] = $this->permissoes;
    $this->data["nomes"] = $this->nomes;

    $this->camposNaoModificados = $this->campos;
    $this->configuraCampos();
    $this->data["campos"] = $this->campos;

    $this->load->model("imageModel");
  }

  public function index()
  {
    $this->data["registros"] = $this->model->getAll();
    $this->data["registros"] = $this->configuraOptionTabela($this->data["registros"], $this->camposNaoModificados);
    $this->load->view("painel/godController/index", $this->data);
  }

  public function cadastrar()
  {
    if ($this->permissoes["cadastrar"])
      $this->load->view("painel/godController/form", $this->data);
    else
      redirect("painel/" . $this->nomes["link"]);
  }

  public function editar($id = null)
  {
    $registro = $this->model->getByPrimary($id);
    if ($this->permissoes["editar"] && $registro) {
      $this->data["registro"] = $registro;
      $this->load->view("painel/godController/form", $this->data);
    } else
      redirect("painel/" . $this->nomes["link"]);
  }

  public function excluir()
  {

    $ids = $this->input->post("id");
    foreach ($ids as $id) {
      $registro = $this->model->getByPrimary($id);
      if ($this->permissoes["excluir"] && $registro) {
        $this->model->delete($id);
      }
    }
  }

  public function slugify($text = null)
  {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
  
    // trim
    $text = trim($text, '-');
  
    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
  
    // lowercase
    $text = strtolower($text);
  
    if (empty($text)) {
      return 'n-a';
    }
  
    return $text;
  }

  public function salvar()
  {
    $this->setRulesValidation($this->data["campos"]);

    foreach ($this->campos as $key => $campo) {
      if ($campo["type"] == "date")
        $dados[$key] = implode("-", array_reverse(explode("/", $this->input->post($key))));

      else if ($campo["type"] == "image") {
        $dados[$key] = $_FILES[$key];

        if ($dados[$key]['name']) {
          $imagem = $this->imageModel->uploadImage('images/', $this->nomes["link"], FALSE, $key, null);
          $dados[$key] = $imagem['upload_data']['file_name'];
        } else
          unset($dados[$key]);
      } else if ($campo["type"] == "password") {
        $senha = $this->input->post($key);

        if ($senha)
          $dados[$key] = encode_crip($senha);
      } else if (!isset($campo["disabled"]) || (isset($campo["disabled"]) && $campo["disabled"] == false))
        $dados[$key] = $this->input->post($key);

      if(isset($campo["slug"]) && $campo["slug"] == true)
        $dados["slug"] = $this->slugify($this->input->post($key));
    }

    if ($this->form_validation->run() == FALSE) {
      $result = [
        "success" => false,
        "message" => "Não foi possível salvar o registro.",
        "icon" => "la la-close",
      ];
    } else {
      if (isset($dados["id"]) && $dados["id"])
        $this->model->update($dados);
      else
        $this->model->create($dados);

      $result = [
        "success" => true,
        "message" => "Registro salvo.",
        "icon" => "la la-check",
      ];
    }

    echo json_encode($result);
  }

  protected function setRulesValidation($campos)
  {
    foreach ($campos as $key => $value) {
      $this->form_validation->set_rules($key, $value['nome'], isset($value['rules']) ? $value['rules'] : "");
    }
  }

  public function getOptionsFromDataBase($campo)
  {
    $this->load->model($campo["options"]["model"]);
    $model = $this->{$campo["options"]["model"]};

    $registros = $model->getAll();
    $options = [];

    foreach ($registros as $key => $registro) {
      $options[$registro->{$campo["options"]["value"]}] = $registro->{$campo["options"]["texto"]};
    }

    return $options;
  }

  public function configuraCampos()
  {
    foreach ($this->campos as $key => $campo) {
      if ($campo["type"] == "select" && array_key_exists("fromDataBase", $campo) && $campo["fromDataBase"] == true)
        $this->campos[$key]["options"] = $this->getOptionsFromDataBase($campo);
    }
  }

  public function configuraOptionTabela($registros, $campos)
  {

    foreach ($registros as $key => $registro) {
      foreach ($campos as $campoKey => $campo) {
        if ($campo["type"] == "select" && isset($campo["fromDataBase"]) && $campo["fromDataBase"]) {
          $this->load->model($campo["options"]["model"]);
          $model = $this->{$campo["options"]["model"]};

          $row = $model->getByPrimary($registro->{$campoKey});
          if ($row)
            $registros[$key]->{$campoKey} = $row->{$campo["options"]["texto"]};
          else
            $registros[$key]->{$campoKey} = null;
        }
      }
    }

    return $registros;
  }
}

class MY_Controller extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('parser');
    $this->is_logged_in();
  }

  function is_logged_in()
  {
    $is_logged_in = $this->session->userdata('is_logged_in');
    if (!isset($is_logged_in) || $is_logged_in != true)
      redirect('painel/login', 'refresh');
  }

  public function encodeURL($str_url)
  {
    $str_url = strtolower($str_url);
    $str_url = htmlentities($str_url, ENT_COMPAT, 'UTF-8');

    $str_url = preg_replace('/&([a-zA-Z0-9])(uml|acute|grave|circ|tilde|cedil);/', '$1', $str_url);
    $str_url = html_entity_decode($str_url);

    return url_title($str_url);
  }
}

class MY_Site_Controller extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();


    $this->load->model('configuracoesModel');
    $this->load->model('bannersModel');
    $this->load->model('categoriasNoticiasModel');
    $this->load->model('noticiasModel');

    $this->data['configuracoes'] = $this->configuracoesModel->getByPrimary(1);
    $this->data['categorias'] = $this->categoriasNoticiasModel->getAll();
    $this->data["ultimasNoticias"] = $this->getConfiguredNoticias(3);

    $this->load->vars($this->data);
  }


  // HELPING METHODS
  public function getConfiguredNoticias ($limit = null) {
    
    return $this->setNoticias($this->noticiasModel->getAll($limit));
  }

  public function setNoticia($noticia) {
    $noticia->categoria = $this->categoriasNoticiasModel->getByPrimary($noticia->id_categoria);
    $noticia->autor = $this->usuariosModel->getByPrimary($noticia->id_usuario);
    $noticia->dia = date("d", strtotime($noticia->data));
    $noticia->mes = $this->setMes(date("m", strtotime($noticia->data)));
    $noticia->ano = date("Y", strtotime($noticia->data));

    return $noticia;
  }

  public function setNoticias($noticias = []) {

    $this->load->model("usuariosModel");

    foreach ($noticias as $key => $noticia) {
      $this->setNoticia($noticia);
    }

    return $noticias;
  }

  public function setMes($mes) {
    $meses = ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"];
    return $meses[intval($mes - 1)];
  }

  function loadBanner() {
    $banners = $this->bannersModel->getAll();

    foreach($banners as $banner) {
      if($banner->pagina == $this->data["page"])
        return $banner;
    }

    return null;
  }
}
