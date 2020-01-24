<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "produto";
  }

  public function index() {
    $this->load->view("produto", $this->data);
  }
}
