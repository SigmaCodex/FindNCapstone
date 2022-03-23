<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//admin
$route['shopadmin-dashboard'] = 'main_controller/admin_dashboard';
$route['shopadmin-scanqr']    = 'main_controller/admin_scanqr';
$route['shopadmin-bookings']  = 'main_controller/admin_bookings';
$route['shopadmin-computerdetails'] = 'main_controller/shopadmin_computerdetails';
$route['shopadmin-computertype'] = 'main_controller/shopadmin_addComputerType';
$route['shopadmin-computertypelist'] = 'main_controller/shopadmin_computertypeList';
$route['shopadmin-updatecomputertype'] = 'main_controller/shopadmin_updatecompType';
$route['shopadmin-shopimages/(:num)'] = 'main_controller/shopimages/$1';

$route['register'] = 'main_controller/viewRegister';
$route['loginpage'] = 'main_controller/viewLogin';


$route['findnRegister'] = 'main_controller/viewFindnRegister';
$route['findnlogin'] = 'main_controller/viewFindNLogin';
$route['viewShop']     = 'main_controller/viewViewShop';

//finders
$route['finder-Compbookingrequest/(:num)'] = 'main_controller/finder_BookingRequest/$1';

$route['accountSettings'] = 'main_controller/viewAccountSettings';
$route['computerbform'] = 'main_controller/viewcompbookForm';
$route['viewMap']       = 'main_controller/viewMap';
$route['findershomepage'] = 'main_controller/viewFinders_HomePage';
$route['view-ticket']     = 'main_controller/view_ticket';
$route['generate-QR']     = 'main_controller/generateQrCode';

//superadmin 
$route['add-admin'] = 'main_controller/addAdmin';
$route['add-computershop'] = 'main_controller/addComputershop';
$route['listofcomputershop'] = 'main_controller/listofcomputershop';
$route['admin-list/(:num)'] = 'main_controller/adminlist/$1';
$route['getadmin-list/(:num)'] = 'logicalcontroller/getListOfAdmins/$1';
$route['getshopdetails/(:num)'] = 'logicalcontroller/getShopDetails/$1';
$route['updateshopdetails/(:num)'] = 'logicalcontroller/updateShopDetails/$1';
$route['deleteCompShop/(:num)'] = 'logicalcontroller/deleteComputerShop/$1';


//Logics
    //SuperAdmin
    $route['registeradmin'] = 'logicalcontroller/registerAdmin';
    $route['addshop'] = 'logicalcontroller/addComputerShop';
    $route['admindetails'] = 'logicalcontroller/getAdminDetails';
    
    //sample
    $route['sample/(:num)'] = 'logicalcontroller/sample/$1';
    //finders
    $route['registerfinder'] = 'logicalcontroller/registerFinder';
    $route['generatePrimarykey'] = 'logicalcontroller/generatePrimarykey';
    $route['get-computershops'] = 'logicalcontroller/getListOfComputerShops';
    $route['updateFinderAccount/(:num)'] = 'logicalcontroller/updateFinderAccount/$1';
    $route['select-computershops/(:any)/(:num)'] = 'logicalcontroller/selectComputerShop/$1/$2';
    //admin
    $route['updateComputerDetails/(:num)'] = 'logicalcontroller/updateComputerDetails/$1';
    $route['addcomtype/(:num)'] = 'logicalcontroller/addComputerType/$1';
    $route['deleteComputerType/(:num)'] = 'logicalcontroller/deleteComputerType/$1';
    $route['updateCompType/(:num)'] = 'logicalcontroller/updateComputerType/$1';
    $route['uploadshopimages/(:num)'] = 'logicalcontroller/uploadshopimages/$1';
    //api 
    $route['goto-gcash']          = 'logicalcontroller/GotoGcash';
    $route['paymentexercise']     = 'main_controller/payment_exercise';

$route['user-login']               = 'logicalcontroller/login_user';
$route['user-logout']              = 'logicalcontroller/logout_user';
$route['index'] = 'main_controller/index';
$route['default_controller'] = 'main_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
