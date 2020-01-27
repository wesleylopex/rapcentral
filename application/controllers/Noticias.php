<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "noticias";
    

    $this->load->model("noticiasModel");
    $this->load->model("categoriasNoticiasModel");

    $this->data["ultimasNoticias"] = $this->getConfiguredNoticias(3);
    $this->data["categorias"] = $this->getCategorias();
  }

  public function index() {
    $this->data["noticias"] = $this->getConfiguredNoticias();

    $this->load->view("noticias", $this->data);
  }

  public function categoria($slug = null) {

    $categoria = $this->categoriasNoticiasModel->getRowWhere(["slug" => $slug]);

    if ($categoria) {
      $this->data["noticias"] = $this->setNoticias($this->noticiasModel->getAllWhere(["id_categoria"=>$categoria->id]));
      $this->load->view("noticias", $this->data);
    } else
      redirect("noticias");
  }

  public function noticia($slug) {
    $noticia = $this->noticiasModel->getRowWhere(["slug"=>$slug]);
    $this->data["noticia"] = $this->setNoticia($noticia);
    $this->load->view("noticia", $this->data);
  }

  public function pesquisar() {
    $pesquisa = $this->input->post("pesquisa");
    $palavras = explode(" ", $pesquisa);

    $noticias = $this->getConfiguredNoticias();
    $this->data["noticias"] = [];

    foreach ($noticias as $key => $noticia) {
      foreach($palavras as $palavra) {
        if (stripos($noticia->titulo, $palavra) !== false) {
          array_push($this->data["noticias"], $noticia);
          break;
        }
      }
    }

    $this->load->view("noticias", $this->data);
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

  public function getCategorias ($limit = null) {
    return $this->categoriasNoticiasModel->getAll($limit);
  }
}
