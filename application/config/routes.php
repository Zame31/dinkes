<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['page/(:any)'] = 'page/view/$1';

$route['default_controller'] = 'beranda';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
