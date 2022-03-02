<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//admin
$route['admin-dashboard'] = 'main_controller/admin_dashboard';

$route['register'] = 'main_controller/viewRegister';
$route['loginpage'] = 'main_controller/viewLogin';

$route['userprof_Settings'] = 'main_controller/viewUser_Settings';


//superadmin 
$route['add-admin'] = 'main_controller/addAdmin';
$route['add-computershop'] = 'main_controller/addComputershop';


$route['index'] = 'main_controller/index';
$route['default_controller'] = 'main_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
