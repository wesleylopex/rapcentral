<?php

class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->helper('utils');
    $this->load->library('form_validation');
    // $this->load->model('configuracao_model');

    $this->form_validation->set_rules('usuario', 'Usuário', 'trim|required');
    $this->form_validation->set_rules('senha', 'Senha', 'trim|required');
    $this->data = null;
  }

  function index()
  {
    $this->load->view('painel/login/form', $this->data);
  }

  function logar()
  {

    if ($this->form_validation->run() == FALSE) {
      redirect("painel/login");
    } else {
      $this->load->model('usuariosModel');
      $query = $this->usuariosModel->validate();

      if ($query != false) {
        $this->data = [
          'id' => $query->id,
          'nome' => $query->nome,
          'usuario' => $query->usuario,
          'telefone' => $query->telefone,
          'imagem' => $query->imagem,
          'is_logged_in' => true
        ];

        $this->session->set_userdata($this->data);

        redirect('painel/home');
      } else
        redirect("painel/login");
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect("painel/login");
  }
}
