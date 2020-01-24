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

  public function uploadDropzoneImage()
  {

    if (!empty($_FILES['file']['name'])) {

      $path = $_FILES['file']['name'];
      $ext = pathinfo($path, PATHINFO_EXTENSION);
      $imageName = "jocc-".$this->nomes["link"].date('dmYHis').".$ext";

      session_start();
      if (!isset($_SESSION["dropzoneImages"]))
        $_SESSION["dropzoneImages"] = [];
      else
        array_push($_SESSION["dropzoneImages"], $imageName);

      // Set preference
      $config['upload_path'] = 'assets/uploads/';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size'] = '1024'; // max_size in kb
      $config['file_name'] = $imageName;

      //Load upload library
      $this->load->library('upload', $config);

      // File upload
      if (!file_exists($_FILES["file"]) && $this->upload->do_upload('file')) {
        // Get data about the file
        $uploadData = $this->upload->data();
      }
    }
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
      } else if ($campo["type"] == "gallery") {

        $dropzoneModel = $campo["model"];
        $dropzoneForeignKey = $campo["foreignKey"];
      } else if (!isset($campo["disabled"]) || (isset($campo["disabled"]) && $campo["disabled"] == false))
        $dados[$key] = $this->input->post($key);
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
        $id_registro = $this->model->create($dados);

      session_start();
      $dropzoneImages = $_SESSION["dropzoneImages"];

      if ($dropzoneImages) {
        $this->load->model($dropzoneModel);
        foreach ($dropzoneImages as $key => $imageName) {
          $this->{$dropzoneModel}->create([
            "imagem" => $imageName,
            $dropzoneForeignKey => $dados["id"] ? $dados["id"] : $id_registro
          ]);
        }
      }

      $_SESSION["dropzoneImages"] = [];

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
        if ($campo["type"] == "select" && array_key_exists("fromDataBase", $campo) && $campo["fromDataBase"]) {
          $this->load->model($campo["options"]["model"]);
          $model = $this->{$campo["options"]["model"]};

          $row = $model->getByPrimary($registro->{$campoKey});

          if ($row)
            $registros[$key]->option = $row->{$campo["options"]["texto"]};
          else
            $registros[$key]->option = null;
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

    // $this->load->model('metatags_model');
    $this->load->model('configuracaoModel');
    // $this->load->model('banner_pagina_model');
    // $this->load->model('textos_model');
    // $this->load->model("info_contato_model");
    // $this->load->model("call_to_action_model");
    // $this->load->model("servico_model");
    // $this->load->model("instagram_model");
    // $this->load->model("anuncios_model");
    // $this->load->model("banners_anuncios_model");

    $this->is_publicado();
    $this->data['configuracao'] = $this->configuracaoModel->get_by_primary(1);
    // $this->data['banners_paginas'] = $this->banner_pagina_model->get_all();

    // $this->data['info_contato'] = $this->info_contato_model->get_all()[0];
    // $this->data['call_to_action'] = $this->call_to_action_model->get_all()[0];
    // // $this->data['servicos'] = $this->servico_model->get_all(6);
    // $this->data['informacoes'] = $this->info_contato_model->get_by_primary(1);
    // $this->data['instagram'] = $this->instagram_model->get_by_primary(1);
    // $this->data['numero_nascimentos'] = $this->contador_model->get_all()[0]->nascimentos;

    $this->load->vars($this->data);
  }

  public function getAnunciosWithBanners($anuncios = null, $pagina = null)
  {
    if ($anuncios == null)
      $anuncios = $this->anuncios_model->get_all_where(null, null, ["pagina" => $pagina]);

    foreach ($anuncios as $anuncio) {
      $anuncio->banners = $this->banners_anuncios_model->get_all_where(null, null, ["id_anuncio" => $anuncio->id]);
    }

    return $anuncios;
  }

  function is_publicado()
  {
    if ($this->configuracaoModel->site_publicado() == 0) {
      redirect('espera', 'refresh');
    }
  }

  public function loadBanner()
  {
    foreach ($this->data['banners_paginas'] as $key => $value) {
      if ($value->pagina == $this->data['page']) {
        $this->data['banner_page'] = $value;
      }
    }
  }
}
