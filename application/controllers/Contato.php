<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "contato";
  }

  public function index() {
    $this->load->view("contato", $this->data);
  }
}
