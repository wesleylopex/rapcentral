<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Empresa extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "empresa";
  }

  public function index() {
    $this->load->view("empresa", $this->data);
  }
}
