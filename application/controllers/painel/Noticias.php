<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends GodController
{

	protected $model = "NoticiasModel";
	protected $nomes = [
		"singular" => "Notícia",
		"plural" => "Notícias",
		"link" => "noticias",
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

		"titulo" => [
			"nome" => "Título",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim|required",
			"col" => "col-md-12",
			"slug" => true,
			"required" => "required",
		],

		"id_categoria" => [
			"nome" => "Categoria",
			"type" => "select",
			"rules" => "trim|required",
			"fromDataBase" => true,
			"options" => [
				"value" => "id",
				"texto" => "nome",
				"model" => "categoriasNoticiasModel",
			],
			"visivelTabela" => true,
			"col" => "col-md-4"
		],

		"id_usuario" => [
			"nome" => "Autor",
			"type" => "select",
			"rules" => "trim|required",
			"fromDataBase" => true,
			"options" => [
				"value" => "id",
				"texto" => "nome",
				"model" => "usuariosModel",
			],
			"visivelTabela" => true,
			"col" => "col-md-4"
		],

		"data" => [
			"nome" => "Data",
			"type" => "date",
			// "rules" => "",
			"visivelTabela" => true,
			"col" => "col-md-4",
		],

		"imagem" => [
			"nome" => "Imagem",
			"type" => "image",
			// "rules" => "",
			"col" => "col-md-4",
			"label" => "(1920 x 1080)"
		],

		"texto" => [
			"nome" => "Texto",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim|required",
			"required" => true,
			"disabled" => false,
			"col" => "col-md-12"
		],
	];

	function __construct()
	{
		parent::__construct();
	}
}
