<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["nomes"]["link"] = "home";
  }

  public function index()
  {
    $this->load->view("painel/home/index", $this->data);
  }
}
