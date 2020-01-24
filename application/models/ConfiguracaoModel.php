<?php
class ConfiguracaoModel extends MY_Model{

	protected $table = '_gdi_configuracao';
	protected $primary = 'id';
	protected $field_order = 'id';
	protected $type_order = 'asc';

	function site_publicado()
	{
		$this->db->where('status','P');
		return $this->db->count_all_results($this->table);
	}	
}
?>