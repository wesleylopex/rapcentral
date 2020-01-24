<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = "home";
$route['gdi'] = "gdi/login/index";
$route['gdi/(:any)/galeria/(:num)/(:num)'] = "gdi/galeria/index/$1/$2";
$route['gdi/(:any)/galeria/incluir/'] = "gdi/galeria/incluir/";
$route['gdi/(:any)/galeria/editar/(:num)'] = "gdi/galeria/editar/$2";
$route['gdi/(:any)/galeria/excluir/(:num)'] = "gdi/galeria/excluir/$2";
$route['novidades'] = "blog/index";
$route['novidades/pagina'] = "blog/index/$1";
$route['novidades/pagina/(:num)'] = "blog/index/$1";
$route['novidades/post/(:any)'] = "blog/detalhe/$1";
$route['novidades/categoria/(:any)'] = "blog/categoria/$1";
$route['novidades/categoria/(:any)/pagina'] = "blog/categoria/$1";
$route['novidades/categoria/(:any)/pagina/(:num)'] = "blog/categoria/$1/$2";
$route['novidades/tag/(:any)'] = "blog/tag/$1";
$route['novidades/tag/(:any)/pagina'] = "blog/tag/$1";
$route['novidades/tag/(:any)/pagina/(:num)'] = "blog/tag/$1/$2";
$route['novidades/pesquisa'] = "blog/pesquisa";
$route['novidades/pesquisa/(:any)/pagina'] = "blog/pesquisa/$1";
$route['novidades/pesquisa/(:any)/pagina/(:num)'] = "blog/pesquisa/$1/$2";
$route['exame/(:any)'] = "exames/detalhe/$1";


// $route['vendas/produto/(:any)'] = "vendas/produto/$1";

$route['translate_uri_dashes'] = FALSE;
