<?php
class ProdutosModel extends MY_Model
{

	protected $table = 'produtos';
	protected $primary = 'id';
	protected $field_order = 'id';
	protected $type_order = 'desc';
}
