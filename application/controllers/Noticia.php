<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noticia extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "noticia";
  }

  public function index() {
    $this->load->view("noticia", $this->data);
  }
}
