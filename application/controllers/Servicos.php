<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Servicos extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "servicos";
  }

  public function index() {
    $this->load->view("servicos", $this->data);
  }
}
