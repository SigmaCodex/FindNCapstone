<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//superadmin 
$route['admin-dashboard'] = 'main_controller/admin_dashboard';


$route['loginpage'] = 'main_controller/viewLogin';
$route['index'] = 'main_controller/index';
$route['default_controller'] = 'main_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
