<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "noticias";
  }

  public function index() {
    $this->load->view("noticias", $this->data);
  }
  public function categoria() {
    $this->load->view("noticias", $this->data);
  }
}
