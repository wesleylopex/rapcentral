<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Configuracoes extends GodController
{

	protected $model = "ConfiguracoesModel";
	protected $nomes = [
		"singular" => "Banner",
		"plural" => "Configuracoes",
		"link" => "configuracoes",
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

		"nome" => [
			"nome" => "Nome",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-6",
		],
		"facebook" => [
			"nome" => "Facebook",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-6",
		],
		"twitter" => [
			"nome" => "Twitter",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-6",
		],
		"instagram" => [
			"nome" => "Instagram",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-6",
		],
		"favicon" => [
			"nome" => "Favicon",
			"type" => "image",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-4",
		],
		"logo" => [
			"nome" => "Logo",
			"type" => "image",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-4",
		],
		"texto_sobre" => [
			"nome" => "Sobre nós",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
		],
		"texto_newsletter" => [
			"nome" => "Texto Newsletter",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
		],
	];

	function __construct()
	{
		parent::__construct();
	}
}
