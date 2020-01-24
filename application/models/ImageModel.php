<?php

class ImageModel extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->_load_settings();
  }

  function _load_settings()
  {
    $this->db->where('id', 1);
    $this->db->limit(1);
    $query = $this->db->get('configuracoes_imagens');

    if ($query->num_rows()) {
      $row = $query->row();

      define("IMAGEM_W", $row->w);
      define("IMAGEM_H", $row->h);
      define("IMAGEM_MID_W", $row->mid_w);
      define("IMAGEM_MID_H", $row->mid_h);
      define("IMAGEM_THUMB_W", $row->thumb_w);
      define("IMAGEM_THUMB_H", $row->thumb_h);

      $max_upload = min(ini_get('post_max_size'), ini_get('upload_max_filesize'));
      $max_upload = str_replace('M', '', $max_upload);
      $max_upload = $max_upload * 1024;

      define("GALERIA_MAX_UPLOAD", $max_upload);
    }
  }

  function images_reorder($galeria_id, $registro_id)
  {
    $images = $this->input->post('imagens');
    $total_images = count($this->input->post('imagens'));

    for ($image = 0; $image < $total_images; $image++) {

      $data = array(
        'id' => $images[$image],
        'ordem' => $ordem = $image
      );

      $this->db->where('id', $data['id']);
      $this->db->update('galeria_images', $data);
    }

    return;
  }


  function remove_image($app_name, $name)
  {
    if (is_file('./assets/uploads/' . $app_name . $name)) {
      @unlink('./assets/uploads/' . $app_name . $name);
    }

    if (is_file('./assets/uploads/' . $app_name . 'mid_' . $name)) {
      @unlink('./assets/uploads/' . $app_name . 'mid_' . $name);
    }

    if (is_file('./assets/uploads/' . $app_name . 'thumb_' . $name)) {
      @unlink('./assets/uploads/' . $app_name . 'thumb_' . $name);
    }
  }

  function upload_video($app_name, $nome_arquivo = NULL, $config = NULL)
  {
    if (empty($config)) {
      $config['upload_path'] = './assets/uploads/' . $app_name;
      $config['allowed_types'] = 'mp4';
      $config['max_size'] = GALERIA_MAX_UPLOAD;
      if ($nome_arquivo == NULL) {
        $nome_arquivo = $app_name . replace("/", "");
      }
      $config['file_name'] = 'hbsc-' . $nome_arquivo . '-' . date('d-m-Y');
    }
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('file_video')) {
      echo $this->upload->display_errors();
      exit();
    } else {
      $file = array('upload_data' => $this->upload->data());
      chmod($file['upload_data']['full_path'], 0777);
      return $file;
    }
  }

  function upload_file($app_name, $nome_arquivo = NULL, $config = NULL)
  {
    // echo "<script>alert('$app_name')</script>";
    if (empty($config)) {
      $config['upload_path'] = './assets/uploads/' . $app_name;
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = GALERIA_MAX_UPLOAD;
      if ($nome_arquivo == NULL) {
        $nome_arquivo = $app_name . replace("/", "");
      }
      $config['file_name'] = 'hbsc-' . $nome_arquivo . '-' . date('d-m-Y');
    }
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('file_pdf')) {
      echo $this->upload->display_errors();
      exit();
    } else {
      $file = array('upload_data' => $this->upload->data());
      chmod($file['upload_data']['full_path'], 0777);
      return $file;
    }
  }

  function remove_file($app_name, $name)
  {
    if (is_file('./assets/uploads/' . $app_name . $name)) {
      @unlink('./assets/uploads/' . $app_name . $name);
    }
  }

  function uploadImage($app_name, $image_name = NULL, $resize_image = TRUE, $campo = NULL, $config = NULL)
  {
    if (empty($config)) {

      $config['upload_path'] = './assets/uploads/' . $app_name;
      $config['allowed_types'] = 'gif|jpeg|jpg|png';
      $config['encrypt_name'] = FALSE;
      $config['remove_spaces'] = TRUE;
      $config['max_size'] = GALERIA_MAX_UPLOAD;
      $config['max_width']  = '2500';
      $config['max_height']  = '2080';
      $config['image_library'] = 'gd';
      if ($image_name == NULL) {
        $image_name = $app_name . replace("/", "");
      }
      $config['file_name'] = 'jocc-' . $image_name;
    }

    if ($campo == NULL)
      $campo = 'imagem';

    $this->load->library('upload', $config);
    if (!$this->upload->do_upload($campo)) {
      echo $this->upload->display_errors();
      exit();
    } else {
      $file = array('upload_data' => $this->upload->data());
      chmod($file['upload_data']['full_path'], 0777);
      if ($resize_image == TRUE)
        $this->_resize_image($file['upload_data']['full_path'], $file['upload_data']['file_name']);
      return $file;
    }
  }

  function upload_pdf($app_name, $config = NULL)
  {
    if (empty($config)) {
      $config['upload_path'] = './assets/uploads/' . $app_name;
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = GALERIA_MAX_UPLOAD;
    }
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('file_pdf')) {
      echo $this->upload->display_errors();
      exit();
    } else {
      $file = array('upload_data' => $this->upload->data());
      chmod($file['upload_data']['full_path'], 0777);
      return $file;
    }
  }

  function _resize_image($path, $file_name)
  {
    $images = array();
    $dim = getimagesize($path);
    $this->load->library('image_lib');
    $file_info = pathinfo($path);
    $this->_create_mid($path, $file_name);
    $this->_create_thumb($path, $file_name);
  }


  function _create_mid($path, $file_name)
  {
    $this->load->library('image_lib');

    $config['image_library'] = 'gd2';
    $config['source_image'] = $path;
    $config['create_thumb'] = TRUE;
    $config['new_image'] = 'mid_' . $file_name;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = IMAGEM_MID_W;
    $config['height'] = IMAGEM_MID_H;
    $config['thumb_marker'] = '';

    $this->image_lib->initialize($config);

    if (!$this->image_lib->resize()) {
      echo $this->image_lib->display_errors();
      exit;
    }

    $this->image_lib->clear();
  }

  function _create_thumb($path, $file_name)
  {

    $this->load->library('image_lib');

    $config['image_library'] = 'gd2';
    $config['source_image'] = $path;
    $config['create_thumb'] = TRUE;
    $config['new_image'] = 'thumb_' . $file_name;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = IMAGEM_THUMB_W;
    $config['height'] = IMAGEM_THUMB_H;
    $config['thumb_marker'] = '';

    $this->image_lib->initialize($config);

    if (!$this->image_lib->resize()) {
      echo $this->image_lib->display_errors();
      exit;
    }


    $this->image_lib->clear();
  }
}
/* End of file dashboard_model.php */
/* Location: ./quicksnaps_app/models/dashboard_model.php */
