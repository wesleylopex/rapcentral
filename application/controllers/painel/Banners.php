<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Banners extends GodController
{

	protected $model = "BannersModel";
	protected $nomes = [
		"singular" => "Banner",
		"plural" => "Banners",
		"link" => "banners",
	];
	protected $permissoes = [
		"cadastrar" => false,
		"editar" => true,
		"excluir" => false,
	];

	protected $campos = [
		"id" => [
			"nome" => "Id",
			"type" => "hidden",
			"visivelTabela" => false,
			"rules" => "trim",
		],

		"pagina" => [
			"nome" => "Página",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-4",
			"disabled" => true
		],
		"titulo" => [
			"nome" => "Título",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-4",
		],
		"subtitulo" => [
			"nome" => "Subtítulo",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-4",
		],

		"imagem" => [
			"nome" => "Imagem",
			"type" => "image",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"label" => "(1920 x 1080)"
		],
	];

	function __construct()
	{
		parent::__construct();
	}
}
