<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//admin
$route['adminlogin'] = 'main_controller/viewLogin';
$route['shopadmin-dashboard'] = 'main_controller/admin_dashboard';
$route['shopadmin-scanqr']    = 'main_controller/admin_scanqr';
$route['shopadmin-bookings']  = 'main_controller/admin_bookings';

$route['shopadmin-adminPosts/(:num)'] = 'main_controller/shopadmin_postEvents/$1';
$route['shopadmin-computerdetails'] = 'main_controller/shopadmin_computerdetails';

$route['shopadmin-computerdetails/(:num)'] = 'main_controller/shopadmin_computerdetails/$1';

$route['shopadmin-computertype'] = 'main_controller/shopadmin_addComputerType';
$route['shopadmin-computertypelist/(:num)'] = 'main_controller/shopadmin_computertypeList/$1';
$route['shopadmin-comptypeinfo/(:num)'] = 'main_controller/shopadmin_comptypeInfo/$1';
$route['shopadmin-viewPosts/(:num)'] = 'main_controller/shopadmin_viewPost/$1';


$route['shopadmin-updatecomputertype'] = 'main_controller/shopadmin_updatecompType';
$route['shopadmin-shopimages/(:num)'] = 'main_controller/shopimages/$1';


$route['register'] = 'main_controller/viewRegister';


//NEW ShopAdmin PAGES
$route['adminHeader'] = 'main_controller/viewAdminHeader';
$route['shopAdminBookings'] = 'main_controller/viewShopAdminBookings';
$route['shopAdminScanQR'] = 'main_controller/viewShopAdminScanQR';
$route['shopAdminDashboard'] = 'main_controller/viewShopAdminDashboard';
$route['shopAdminComputerType'] = 'main_controller/viewShopAdminComputerType';
$route['shopAdminAccountSettings'] = 'main_controller/viewShopAdminAccountSettings';
$route['shopAdminEditProfile'] = 'main_controller/viewShopAdminEditProfile';


//finders
$route['findnRegister'] = 'main_controller/viewFindnRegister';
$route['findnlogin'] = 'main_controller/viewFindNLogin';
$route['viewShop/(:num)']     = 'main_controller/viewShop/$1';
$route['findershomepage'] = 'main_controller/viewFinders_HomePage';
$route['accountSettings'] = 'main_controller/viewAccountSettings';
$route['finderBookingList'] = 'main_controller/viewfinderBookingList';
$route['findersNotification'] = 'main_controller/viewFindersNotification';
$route['findersTransactionDetail/(:num)'] = 'main_controller/viewfindersTransactionDetail/$1';
$route['findersGCashPayment/(:num)'] = 'main_controller/viewfindersGCashPayment/$1';



$route['finder-ComputerBookingRequest/(:num)']   = 'main_controller/viewRequestBook/$1';
$route['finder-Compbookingrequest/(:num)'] = 'main_controller/finder_BookingRequest/$1';
$route['computerbform'] = 'main_controller/viewcompbookForm';
$route['viewMap']       = 'main_controller/viewMap';

$route['viewAddRate/(:num)']     = 'main_controller/viewRate/$1';
$route['view-ticket/(:num)']     = 'main_controller/view_ticket/$1';
$route['generate-QR/(:num)']     = 'main_controller/generateQrCode/$1';

//superadmin 
$route['add-admin'] = 'main_controller/addAdmin';
$route['add-computershop'] = 'main_controller/addComputershop';
$route['listofcomputershop'] = 'main_controller/listofcomputershop';
$route['comptypefee/(:num)'] = 'main_controller/shopadmin_comptypeInfo/$1';
$route['admin-list/(:num)'] = 'main_controller/adminlist/$1';
$route['comptypefee/(:num)'] = 'main_controller/shopadmin_comptypeInfo/$1';

//REPORTS HERE
$route['reports'] = 'main_controller/viewReports';


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

    //REPORTS
    $route['total-salesNbooks'] = 'logicalcontroller/getTotalSalesAndBooks';
    $route['total-GCashBooks'] = 'logicalcontroller/getTotalGCashBooks';
    $route['total-OTCBooks'] = 'logicalcontroller/getTotalOTCBooks';
    $route['monthly-PTB'] = 'logicalcontroller/getMonthlyPaymentTypeBooks';
    $route['monthlyData'] = 'logicalcontroller/getMonthlyData';
    $route['shopNames'] = 'logicalcontroller/getListOfComputerShopName';
    $route['shopSales'] = 'logicalcontroller/getMonthlySalesSpecifcShop';
    $route['monthBooks'] = 'logicalcontroller/getMonthlyBooksSpecifcShop';
    $route['pdf'] = 'main_controller/showpdf';

    //PASSWORDS
    $route['checkpassword'] = 'logicalcontroller/getSuperAdminPassword';
    $route['updatepassword/(:any)'] = 'logicalcontroller/updateSuperAdminPassword/$1';


    $route['getshopdetails/(:num)'] = 'logicalcontroller/getShopDetails/$1';
    $route['updateshopdetails/(:num)'] = 'logicalcontroller/updateShopDetails/$1';
    $route['deleteCompShop/(:num)'] = 'logicalcontroller/deleteComputerShop/$1';


    
    //finders
    $route['submit-CompBooking-Request'] = 'logicalcontroller/FindersCompBookingRequest';      
    $route['registerfinder'] = 'logicalcontroller/registerFinder';
    $route['checkuser/(:any)'] = 'logicalcontroller/checkUsername/$1';
    $route['generatePrimarykey'] = 'logicalcontroller/generatePrimarykey';
    $route['get-computershops'] = 'logicalcontroller/getListOfComputerShops';
    $route['updateFinderAccount/(:num)'] = 'logicalcontroller/updateFinderAccount/$1';
    $route['disableFinderAccountStatus'] ='logicalcontroller/disableFinderAccountStatus';
    $route['select-computershops/(:any)/(:num)'] = 'logicalcontroller/selectComputerShop/$1/$2';
    $route['view-FinderBookingTransaction/(:num)'] = 'logicalcontroller/view_finderBookingTransaction/$1';
    $route['select-QrScannerFinderBookingTransaction/(:num)'] = 'logicalcontroller/qr_scanner_select_finderBookingTransaction/$1';
    $route['change-password']                        = 'logicalcontroller/change_password';
   
    $route['addRate/(:num)'] = 'logicalcontroller/addRate/$1';
    $route['updateRate/(:num)'] = 'logicalcontroller/updateRate/$1';
    $route['viewRate/(:num)'] = 'logicalcontroller/viewRate/$1';

    $route['updatePaymentType-overthecounter/(:num)']       = 'logicalcontroller/updatePaymentType_overthecounter/$1';
    $route['uploadGcashPaymentDetails/(:num)']              = 'logicalcontroller/uploadGcashPaymentDetails/$1';

    $route['updatePaymentStatus/(:num)/(:any)']                    = 'logicalcontroller/updatePaymentStatus/$1/$2';
    $route['updateTranscationStatus/(:num)/(:any)']                    = 'logicalcontroller/updateTranscationStatus/$1/$2';
    $route['updateArrivalStatus/(:num)/(:any)']                    = 'logicalcontroller/updateArrivalStatus/$1/$2';
    //notification 
    $route['deleteNotification/(:num)'] = 'logicalcontroller/deleteFinderNotification/$1';
    $route['updateNotificationStatus/(:num)'] = 'logicalcontroller/updateNotificationStatus/$1';
    $route['Countfindernotification'] = 'logicalcontroller/Countfindernotification';
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
    $route['removeshopimage/(:num)'] = 'logicalcontroller/removeshopimage/$1';
    $route['getpostComments/(:num)'] = 'logicalcontroller/getallPostComments/$1';
    $route['updateshopPosts/(:num)']  = 'logicalcontroller/updateshopPosts/$1';
    $route['addComment/(:num)'] = 'logicalcontroller/addComments/$1';
    $route['getComment/(:num)'] = 'logicalcontroller/selectforUpdateComment/$1';
    $route['updateComment/(:num)'] = 'logicalcontroller/updateComments/$1';
    $route['deleteComment/(:num)'] = 'logicalcontroller/deleteComments/$1';
    $route['adminshowallbookrequest/(:num)'] = 'logicalcontroller/viewallShopAdminBookingRequests/$1';
    // $route['showpendinglist/(:num)'] = 'logicalcontroller/getallPendingRequest/$1';
    $route['showpendinglist'] = 'logicalcontroller/getallPendingRequest';
    $route['showacceptedlist/(:num)'] = 'logicalcontroller/getallAcceptedRequest/$1';
    $route['showcancelledlist/(:num)'] = 'logicalcontroller/getallCancelledRequest/$1';
    $route['viewTransaction/(:num)'] = 'logicalcontroller/viewTransaction/$1';
    $route['accept-updateBookStatus/(:num)/(:num)'] = 'logicalcontroller/updateAcceptBookingTransacStatus/$1/$2';
    $route['decline-updateBookStatus/(:num)/(:num)'] = 'logicalcontroller/updateDeclineBookingTransacStatus/$1/$2';
    $route['countPendingBook'] = 'logicalcontroller/CountBookingRequest';
    $route['addshopPost/(:num)'] = 'logicalcontroller/addshopPosts/$1';
    $route['deletePost/(:num)'] = 'logicalcontroller/deleteshopPosts/$1';
    $route['updateshopPost/(:num)'] = 'logicalcontroller/updateshopPosts/$1';
    $route['updateShopStatus/(:any)'] = 'logicalcontroller/updateShopStatus/$1';
    $route['updateAdminAccount']      = 'logicalcontroller/updateAdminAccount';
    //api 
    $route['goto-gcash']                  = 'logicalcontroller/GotoGcash';
    $route['select-paymentmethod']        = 'main_controller/payment_exercise';
    $route['sendVerificationCodeToEmail'] = 'logicalcontroller/sendVCodeToEmail';
    $route['checkVerificationCode']       = 'logicalcontroller/checkVerificationCode';
    $route['select_GcashpaymentDetails/(:num)']  = 'logicalcontroller/select_GcashpaymentDetails/$1'; 

    
$route['shopAdmin-login']          = 'logicalcontroller/shopAdmin_login';
$route['user-login']               = 'logicalcontroller/login_user';
$route['user-logout']              = 'logicalcontroller/logout_user';
$route['Adminlogout_user']         = 'logicalcontroller/Adminlogout_user';
$route['index'] = 'main_controller/index';
$route['default_controller'] = 'main_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
