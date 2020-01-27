<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends GodController
{

	protected $model = "UsuariosModel";
	protected $nomes = [
		"singular" => "Usuário",
		"plural" => "Usuários",
		"link" => "usuarios",
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

		"telefone" => [
			"nome" => "Telefone",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim|required",
			"disabled" => false,
			"col" => "col-md-6",
			"class" => "phone",
		],

		"usuario" => [
			"nome" => "Usuário",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim|required",
			"col" => "col-md-6"
		],

		"senha" => [
			"nome" => "Senha",
			"type" => "password",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-6"
		],

		"imagem" => [
			"nome" => "Imagem",
			"type" => "image",
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
