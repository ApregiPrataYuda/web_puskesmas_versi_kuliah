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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['Stock/in'] = 'Stock/stock_in_data';
$route['Stock/in/add'] = 'Stock/stock_in_add';
$route['Stock/in/delete/(:num)/(:num)'] = 'Stock/stock_in_delete';
$route['Stock/in/xportExcel'] = 'Stock/xportExcel';


$route['Stock/out'] = 'Stock/stock_out_data';
$route['Stock/out/add'] = 'Stock/stock_out_add';
$route['Stock/out/delete/(:num)/(:num)'] = 'Stock/stock_out_delete';
$route['Stock/out/exportexcel'] = 'Stock/exportexcel';


$route['Transaksi/data'] = 'Transaksi/transaksi_data';
$route['Transaksi/add'] = 'Transaksi/transaksi_add';
$route['Stock/delete/(:num)/(:num)'] = 'Transaksi/transaksi_delete';
