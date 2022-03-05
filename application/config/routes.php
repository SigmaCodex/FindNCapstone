<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//admin
$route['shopadmin-dashboard'] = 'main_controller/admin_dashboard';
$route['shopadmin-scanqr']    = 'main_controller/admin_scanqr';


$route['register'] = 'main_controller/viewRegister';
$route['loginpage'] = 'main_controller/viewLogin';

$route['userprof_Settings'] = 'main_controller/viewUser_Settings';


//superadmin 
$route['add-admin'] = 'main_controller/addAdmin';
$route['add-computershop'] = 'main_controller/addComputershop';
$route['listofcomputershop'] = 'main_controller/listofcomputershop';

//Logics
    //SuperAdmin
    
    $route['addshop'] = 'logicalcontroller/addComputerShop';

$route['index'] = 'main_controller/index';
$route['default_controller'] = 'main_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
