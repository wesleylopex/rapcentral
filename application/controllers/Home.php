<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "home";
  }

  public function index() {
    $this->load->view("index", $this->data);
  }
}
