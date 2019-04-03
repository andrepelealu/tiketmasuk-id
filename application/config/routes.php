<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['profile'] = 'user/profile';
$route['dashboard'] = 'user/profile';
$route['addevent'] = 'user/addevent';
$route['register'] = 'auth/register';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['verify/(:any)/(any)'] = 'auth/verify_register/$1/$2';
$route['event/(:any)/(:any)'] = 'event/tampil/$1/$2';
$route['event/tampil/(:any)/(:any)'] = 'event/user/$1/$2';
$route['beli/(:any)'] = 'event/beli/$1';
$route['edit/(:any)'] = 'event/edit/$1';

 $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
