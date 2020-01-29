<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lancamentos extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "lancamentos";
    $this->data["banner"] = $this->loadBanner();
  }

  public function index() {
    $this->load->view("lancamentos", $this->data);
  }

  public function lancamento() {
    $this->load->view("lancamento");
  }
}
