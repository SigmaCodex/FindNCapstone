<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//admin
$route['shopadmin-dashboard'] = 'main_controller/admin_dashboard';
$route['shopadmin-scanqr']    = 'main_controller/admin_scanqr';
$route['shopadmin-bookings']  = 'main_controller/admin_bookings';

$route['register'] = 'main_controller/viewRegister';
$route['loginpage'] = 'main_controller/viewLogin';

//finders
$route['userprof_Settings'] = 'main_controller/viewUser_Settings';
$route['computerbform'] = 'main_controller/viewcompbookForm';
$route['paymentexercise']   = 'main_controller/payment_exercise';

//superadmin 
$route['add-admin'] = 'main_controller/addAdmin';
$route['add-computershop'] = 'main_controller/addComputershop';
$route['listofcomputershop'] = 'main_controller/listofcomputershop';

//Logics
    //SuperAdmin
    
    $route['addshop'] = 'logicalcontroller/addComputerShop';
    //sample
    $route['sample/(:num)'] = 'logicalcontroller/sample/$1';
    //finders
    $route['get-computershops'] = 'logicalcontroller/getListOfComputerShops';
    $route['select-computershops/(:any)/(:num)'] = 'logicalcontroller/selectComputerShop/$1/$2';

$route['index'] = 'main_controller/index';
$route['default_controller'] = 'main_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
