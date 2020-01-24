<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "produtos";
  }

  public function index() {
    $this->load->view("produtos", $this->data);
  }
}
