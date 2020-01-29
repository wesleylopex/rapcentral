<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "noticias";
    $this->data["banner"] = $this->loadBanner();

    $this->load->model("noticiasModel");
    $this->load->model("categoriasNoticiasModel");

  }

  public function index() {
    $this->data["noticias"] = $this->getConfiguredNoticias();

    $this->load->view("noticias", $this->data);
  }

  public function categoria($slug = null) {

    $categoria = $this->categoriasNoticiasModel->getRowWhere(["slug" => $slug]);

    if ($categoria) {

      if($slug == "internacional" || $slug == "nacional") {
        $this->data["page"] = $slug;
        $this->data["banner"] = $this->loadBanner();
      }

      $this->data["noticias"] = $this->setNoticias($this->noticiasModel->getAllWhere(["id_categoria"=>$categoria->id]));
      $this->load->view("noticias", $this->data);
    } else
      redirect("noticias");
  }

  public function noticia($slug) {
    // $noticia = $this->noticiasModel->getRowWhere(["slug"=>$slug]);
    // $this->data["noticia"] = $this->setNoticia($noticia);
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
}
