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

$route["default_controller"]    = "admin/Dashboard";

$route["merchants"]           = "admin/Merchants";
$route["merchants/(:num)"]    = "admin/Merchants/index";

// $route["church-leaders"]           = "admin/Church_leaders";
// $route["church-leaders/(:num)"]    = "admin/Church_leaders/index";

// $route["church-leaders/new"]            = "admin/Church_leaders/new";
// $route["church-leaders/update/(:any)"]  = "admin/Church_leaders/update/$1";

$route["branches"]           = "admin/Branches";
$route["branches/(:num)"]    = "admin/Branches/index";

$route["branches/new"]            = "admin/Branches/new";
$route["branches/update/(:any)"]  = "admin/Branches/update/$1";

$route["branch-transactions"]           = "admin/Branch_transactions";
$route["branch-transactions/(:num)"]    = "admin/Branch_transactions/index/$1";

$route["client-transactions"]           = "admin/Client_transactions";
$route["client-transactions/(:num)"]    = "admin/Client_transactions/index/$1";

$route["merchant-transactions"]           = "admin/Merchant_transactions";
$route["merchant-transactions/(:num)"]    = "admin/Merchant_transactions/index/$1";

$route["login"]     = "public/login";
$route["logout"]    = "public/logout";

$route['404_override'] = 'public/Error_404';
$route['translate_uri_dashes'] = FALSE;

























