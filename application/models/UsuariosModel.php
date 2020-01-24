<?php
class UsuariosModel extends MY_Model
{

	protected $table = 'usuarios';
	protected $primary = 'id';
	protected $field_order = 'id';
	protected $type_order = 'desc';

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('utils');
	}

	function validate()
	{
		$usuario = anti_injection($this->input->post('usuario'));
		$senha = anti_injection($this->input->post('senha'));

		$this->db->where('usuario', $usuario);
		$this->db->where('senha', encode_crip($senha));

		$query = $this->db->get($this->table);

		if ($query->num_rows() == 1)
			return $query->row();

		return false;
	}

	function setDateLogin($id)
	{
		$query = "update " . $this->table . " set ultimo_login = now() where id = " . $id;
		$query = $this->db->query($query);
		return true;
	}

	function getProfile()
	{
		$this->db->where('usuario', $this->session->userdata('username'));
		$query = $this->db->get($this->table);

		if ($query->num_rows() == 1) {
			$data = $query->row();
		}
		return $data;
	}

	function getForSite()
	{
		$query = $this->db->order_by($this->table . "." . $this->field_order, $this->type_order);
		$query = $query->where('data_inicio_vigencia <=', date('Y-m-d'));
		$query = $query->group_start();
		$query = $query->where('data_fim_vigencia', 'NULL');
		$query = $query->or_where('data_fim_vigencia =', "00-00-00");
		$query = $query->or_where('data_fim_vigencia >=', date('Y-m-d'));
		$query = $query->group_end();
		$query = $query->get($this->table);

		return $query->result();
	}
}
