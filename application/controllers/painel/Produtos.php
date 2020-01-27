<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends GodController
{

	protected $model = "ProdutosModel";
	protected $nomes = [
		"singular" => "Produto",
		"plural" => "Produtos",
		"link" => "produtos",
	];
	protected $permissoes = [
		"cadastrar" => true,
		"editar" => true,
		"excluir" => true,
	];

	protected $campos = [
		"id" => [
			"nome" => "Id",
			"type" => "hidden",
			"visivelTabela" => false,
			"rules" => "trim",
		],

		"nome" => [
			"nome" => "Nome",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim|required",
			"col" => "col-md-6",
			"label" => "(<a href='https://google.com' target='_blank'>Google</a>)"
		],

		"id_categoria" => [
			"nome" => "Categoria",
			"type" => "select",
			"disabled" => false,
			"rules" => "trim|required",
			"fromDataBase" => true,
			"options" => [
				"value" => "id",
				"texto" => "nome",
				"model" => "categoriasProdutosModel",
			],
			"visivelTabela" => true,
			"col" => "col-md-6"
		],

		"imagem" => [
			"nome" => "Imagem",
			"type" => "image",
			// "rules" => "",
			"col" => "col-md-4",
			"label" => "(1920 x 1080)"
		],

	];

	function __construct()
	{
		parent::__construct();
	}
}
