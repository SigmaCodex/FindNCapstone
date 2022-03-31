<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//admin
$route['shopadmin-dashboard'] = 'main_controller/admin_dashboard';
$route['shopadmin-scanqr']    = 'main_controller/admin_scanqr';
$route['shopadmin-bookings']  = 'main_controller/admin_bookings';
$route['shopadmin-computerdetails/(:num)'] = 'main_controller/shopadmin_computerdetails/$1';
$route['shopadmin-computertype'] = 'main_controller/shopadmin_addComputerType';
$route['shopadmin-computertypelist/(:num)'] = 'main_controller/shopadmin_computertypeList/$1';
$route['shopadmin-comptypeinfo/(:num)'] = 'main_controller/shopadmin_comptypeInfo/$1';
$route['shopadmin-viewPosts/(:num)'] = 'main_controller/shopadmin_viewPost/$1';


$route['shopadmin-updatecomputertype'] = 'main_controller/shopadmin_updatecompType';
$route['shopadmin-shopimages/(:num)'] = 'main_controller/shopimages/$1';


$route['register'] = 'main_controller/viewRegister';
$route['loginpage'] = 'main_controller/viewLogin';


//finders
$route['findnRegister'] = 'main_controller/viewFindnRegister';
$route['findnlogin'] = 'main_controller/viewFindNLogin';
$route['viewShop/(:num)']     = 'main_controller/viewViewShop/$1';
$route['findershomepage'] = 'main_controller/viewFinders_HomePage';
$route['accountSettings'] = 'main_controller/viewAccountSettings';

$route['finder-ComputerBookingfinder/(:num)']   = 'main_controller/viewRequestBook/$1';
$route['finder-Compbookingrequest/(:num)'] = 'main_controller/finder_BookingRequest/$1';
$route['computerbform'] = 'main_controller/viewcompbookForm';
$route['viewMap']       = 'main_controller/viewMap';
$route['view-ticket']     = 'main_controller/view_ticket';
$route['generate-QR']     = 'main_controller/generateQrCode';

//superadmin 
$route['add-admin'] = 'main_controller/addAdmin';
$route['add-computershop'] = 'main_controller/addComputershop';
$route['listofcomputershop'] = 'main_controller/listofcomputershop';
$route['comptypefee/(:num)'] = 'main_controller/shopadmin_comptypeInfo/$1';
$route['admin-list/(:num)'] = 'main_controller/adminlist/$1';
$route['comptypefee/(:num)'] = 'main_controller/shopadmin_comptypeInfo/$1';

//Logics
    //SuperAdmin
    $route['registeradmin'] = 'logicalcontroller/registerAdmin';
    $route['addshop'] = 'logicalcontroller/addComputerShop';
    $route['admindetails'] = 'logicalcontroller/getAdminDetails';
    $route['getadmin-list/(:num)'] = 'logicalcontroller/getListOfAdmins/$1';
    $route['getadmin-details/(:num)'] = 'logicalcontroller/getAdminDetails/$1';
    $route['updateadmindetails/(:num)'] = 'logicalcontroller/updateAdminDetails/$1';
    $route['deleteadmin/(:num)'] = 'logicalcontroller/deleteAdmin/$1';
    $route['comptypefee/(:num)'] = 'logicalcontroller/getComputerTypeServiceFee/$1';
    $route['updateFee/(:num)'] = 'logicalcontroller/updateServiceFee/$1';

    $route['checkpassword'] = 'logicalcontroller/getSuperAdminPassword';
    $route['updatepassword/(:any)'] = 'logicalcontroller/updateSuperAdminPassword/$1';


    $route['getshopdetails/(:num)'] = 'logicalcontroller/getShopDetails/$1';
    $route['updateshopdetails/(:num)'] = 'logicalcontroller/updateShopDetails/$1';
    $route['deleteCompShop/(:num)'] = 'logicalcontroller/deleteComputerShop/$1';


    
    //finders
    $route['submit-CompBooking-Request'] = 'logicalcontroller/FindersCompBookingRequest';      
    $route['registerfinder'] = 'logicalcontroller/registerFinder';
    $route['generatePrimarykey'] = 'logicalcontroller/generatePrimarykey';
    $route['get-computershops'] = 'logicalcontroller/getListOfComputerShops';
    $route['updateFinderAccount/(:num)'] = 'logicalcontroller/updateFinderAccount/$1';
    $route['disableFinderAccountStatus'] ='logicalcontroller/disableFinderAccountStatus';
    $route['select-computershops/(:any)/(:num)'] = 'logicalcontroller/selectComputerShop/$1/$2';
    $route['view-FinderBookingTransaction/(:num)'] = 'logicalcontroller/view_finderBookingTransaction/$1';

    $route['addRate/(:num)/(:num)'] = 'logicalcontroller/addRate/$1/$2';
    $route['updateRate/(:num)/(:num)/(:num)'] = 'logicalcontroller/updateRate/$1/$2/$3';

    //notification 
    $route['computerNotif'] = 'logicalcontroller/createComputerNotif';
    $route['finderNotif'] = 'logicalcontroller/createFinderNotif';

    //admin
    $route['updateComputerDetails/(:num)'] = 'logicalcontroller/updateComputerDetails/$1';
    $route['addcomtype/(:num)'] = 'logicalcontroller/addComputerType/$1';
    $route['deleteComputerType/(:num)'] = 'logicalcontroller/deleteComputerType/$1';
    $route['updateCompType/(:num)'] = 'logicalcontroller/updateComputerType/$1';
    $route['updateCompTypeStat/(:num)'] = 'logicalcontroller/updateComputerTypeStatus/$1';
    $route['getCompTypeInfo/(:num)'] = 'logicalcontroller/getComputerTypeInfo/$1';
    $route['uploadshopimages/(:num)'] = 'logicalcontroller/uploadshopimages/$1';
    $route['getpostComments/(:num)'] = 'logicalcontroller/getallPostComments/$1';
    $route['addComment/(:num)'] = 'logicalcontroller/addComments/$1';
    $route['getComment/(:num)'] = 'logicalcontroller/selectforUpdateComment/$1';
    $route['updateComment/(:num)'] = 'logicalcontroller/updateComments/$1';
    $route['deleteComment/(:num)'] = 'logicalcontroller/deleteComments/$1';


    //api 
    $route['goto-gcash']                  = 'logicalcontroller/GotoGcash';
    $route['select-paymentmethod']        = 'main_controller/payment_exercise';
    $route['sendVerificationCodeToEmail'] = 'logicalcontroller/sendVCodeToEmail';
    $route['checkVerificationCode']       = 'logicalcontroller/checkVerificationCode';

    
$route['shopAdmin-login']          = 'logicalcontroller/shopAdmin_login';
$route['user-login']               = 'logicalcontroller/login_user';
$route['user-logout']              = 'logicalcontroller/logout_user';
$route['index'] = 'main_controller/index';
$route['default_controller'] = 'main_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
