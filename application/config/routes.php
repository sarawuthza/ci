<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['admin'] = 'admin/admin';
$route['admin/(:any)'] = 'admin/admin/$1';
$route['admin/(:any)/(:num)'] = 'admin/admin/$1/$2';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
