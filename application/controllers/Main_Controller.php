<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

	public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Manila");
		$this->load->model('MainModel');
    }

	 //show pages
	public function index()
	{
        $this->load->view('index');
    }
	public function viewLogin()
	{
        $this->load->view('login');
    }
	public function viewFindNLogin()
	{
        $this->load->view('findnlogin');
    }
	//finders
	public function finder_BookingRequest($shopid){
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');
		if(!$session){
			redirect(findnlogin);
		}else{

		$this->load->view('finders/navbar-query',$session);
		$this->load->model('MainModel');
		$val['username']      = $this->session->userdata('username');
		$val['shop_id']       = $shopid;
		$val['shopdetails']		  = $this->MainModel->selectComputerShop($shopid);
		$val['computer_type'] = $this->MainModel->getListOfShop_ComputerTypes($shopid);
		$this->load->view('ComputerbookingRequest',$val);

		}
	}

	public function viewAccountSettings()
	{
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');
		if(!$session){
			redirect(findnlogin);
		}else{
			$this->load->model('MainModel');
			$user_id  = $this->session->userdata('user_id');
			$val['status']	 = $this->session->userdata('status');
			$val['user_name'] =  $session['user_name'];
			$val['findersPersonalDetails']	 = $this->MainModel->selectFinderDetails($user_id);
			$this->load->view('finders/navbar',$session);
			$this->load->view('accountSettings',$val);
		}
	}
	public function viewShop($shopid)
	{
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');
		if(!$session['user_name']){
			redirect(findnlogin);
		}else{
			$this->load->model('MainModel');
			$val['shopdetails']	 = $this->MainModel->getShopDetails($shopid);
			$val['shop_images']	 = $this->MainModel->viewShopimages($shopid);
			$val['computertype_details']	 = $this->MainModel->getListOfComputerTypes($shopid);
		
			$this->load->view('finders/navbar-query',$session);
			$this->load->view('viewShop',$val);
		}
	}
	public function viewRequestBook($shopid)
	{

		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');
		if(!$session['user_name']){
			redirect(findnlogin);
		}else{
			$this->load->model('MainModel');
			$user_id = $this->session->userdata('user_id');
			$val['shop_id']					 = $shopid;
			$val['findersPersonalDetails']	 = $this->MainModel->selectFinderDetails($user_id);
			$val['computertype_details']	 = $this->MainModel->getListOfComputerTypes($shopid);
			$val['shopdetails']	 			 = $this->MainModel->getShopDetails($shopid);
			$this->load->view('finders/navbar-query',$session);
			$this->load->view('requestBook',$val);
		}

	}
	public function printingBookingRequest($shopid){

		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');
		if(!$session['user_name']){
			redirect(findnlogin);
		}else{
			$this->load->model('MainModel');
			$user_id = $this->session->userdata('user_id');
			$val['shop_id']					 = $shopid;
			$val['findersPersonalDetails']	 = $this->MainModel->selectFinderDetails($user_id);
			$val['computertype_details']	 = $this->MainModel->getListOfComputerTypes($shopid);
			$val['shopdetails']	 			 = $this->MainModel->getShopDetails($shopid);
			$this->load->view('finders/navbar-query',$session);
			$this->load->view('printingBookingRequest',$val);
		}
	}

	public function viewRegister()
	{
        $this->load->view('registerP');
    }
	public function viewFindnRegister()
	{
        $this->load->view('findnRegister');
    }
	public function viewRate($shop_id){
		$this->load->model('MainModel');
		$val['rate_score']	 = $this->MainModel->viewRate($shop_id);
        $this->load->view('addrate',$val);
    }

	public function viewMap(){

		$session['user_name'] = $this->session->userdata('username');
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		if(!$session['user_name']){
			redirect(findnlogin);
		}else{
			$this->load->model('MainModel');
			$val['listofshops']	 = $this->MainModel->getListOfComputerShops();
			$this->load->view('finders/navbar',$session);
			$this->load->view('viewmap',$val);
		// $string = "123,46,78,000";
		// $str_arr = explode (",", $string); 
		// print_r($str_arr[0]);
		}
		
	}
	public function viewFinders_HomePage()
	{
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');

		if(!$session['user_name']){
			redirect(findnlogin);
		}else{

			$this->load->view('finders/navbar',$session);
			$this->load->view('findersHomePage');
		}
	}

	public function viewFindersViewShop($shop_id)
	{
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');
		$finder_id = $this->session->userdata('user_id');
		
		if(!$session['user_name']){
			redirect(findnlogin);
		}else{
			// shop details
			$this->load->model('MainModel');			
			$result['shopdetails']	 = $this->MainModel->getShopDetails($shop_id);
			$result['typedetails']	 = $this->MainModel->getListOfComputerTypes($shop_id);
			$result['shop_images']	 = $this->MainModel->viewShopimages($shop_id);
			// post and comments
			$result['postDetails'] = $this->MainModel->getAllPosts($shop_id);
			$result['commentDetails'] = $this->MainModel->getAllComments();
			$result['finder_id'] = $finder_id; 
			// finder details for appending comments 
			$result['finder_details'] = $this->MainModel->selectFinderDetails($finder_id);
			//shop Ratings
			$result['count_ratings'] = $this->MainModel->ShopAdminRatings($shop_id);
			$result['rating_heading']	= $this->MainModel->ShopRecentRatings($shop_id);
			
			$this->load->view('finders/navbar-query',$session);
			$this->load->view('findersViewShop',$result);
		}
	}
	public function viewFindersHome()
	{
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');

		if(!$session['user_name']){
			redirect(findnlogin);
		}else{

			$result['listofshops'] = $this->MainModel->getAllComputershop();
	
			$this->load->view('finders/navbar',$session);
			$this->load->view('findersHome',$result);


		}
	}
	public function view_ticket($transaction_id){
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');
		if(!$session['user_name']){
			redirect(findnlogin);
		}else{
			$result['transaction_details'] = $this->MainModel->select_finderdetailsBookingTransaction($transaction_id);
			$this->load->view('finders/navbar-query',$session);
			$this->load->view('viewticket',$result);
		}
	}
	public function generateQrCode($transaction_id){

		$this->load->model('MainModel');
        $result = $this->MainModel->select_finderdetailsBookingTransaction($transaction_id);
        foreach($result as $key => $value){
				$data = $value->transaction_id.",".$value->firstname." ".$value->lastname;
		}
	

		$this->load->library('bb_qrcode');

		// $data = "John KEn DUblinGwapo,
		// 		2ndDose, 
		// 		Arrival Time:4:30 pm";

		$qr_image = 'qrCode-'.date('m-d-y-h-i-s').'.png';
		$params['data'] = $data;
		$params['level'] = 'M';
		$params['size'] = 6;
		$params['savename'] = FCPATH.'assets/QrCodes/'.$qr_image;
		$this->bb_qrcode->generate($params);

		$details['qr_image'] = $qr_image;
		$this->load->view('generateQRcode',$details);
	}
	
	//added types of booking form (printing/computer)
	public function viewcompbookForm(){
		$this->load->view('computerbform');
	}

	public function viewfinderBookingList(){
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		$session['user_name'] = $this->session->userdata('username');
		$user_id = $this->session->userdata('user_id');
		if(!$session['user_name']){
			redirect(findnlogin);
		}else{
			$this->load->model('MainModel');
			$val['listofbookings']	 = $this->MainModel->view_finderBookingTransaction($user_id);
			$this->load->view('finders/navbar',$session);
			$this->load->view('finderBookingList',$val);
		}
	}

	public function viewfindersTransactionDetail($transaction_id){
		$this->load->model('MainModel');
		$result['transaction_details'] = $this->MainModel->select_finderBookingTransaction($transaction_id);
		$result['payment_details'] = $this->MainModel->select_GcashpaymentDetails($transaction_id);
		$this->load->view('findersTransactionDetail',$result);
	}
	public function viewfindersGCashPayment($transaction_id){
		$this->load->model('MainModel');
		$result['transaction_details'] = $this->MainModel->select_finderdetailsBookingTransaction($transaction_id);
		// echo json_encode($result);
		$this->load->view('findersGCashPayment',$result);
	}
	public function viewFindersNotification()
	{

		$session['user_name'] = $this->session->userdata('username');
		$session['profile_pic'] = $this->session->userdata('profile_pic');
		if(!$session['user_name']){
			redirect(findnlogin);
		}else{
			$user_id = $this->session->userdata('user_id');
			//viewFinderNotification
			$this->load->model('MainModel');
			$result['Notification'] = $this->MainModel->viewFinderNotification($user_id);
			$this->load->view('finders/navbar',$session);
			$this->load->view('findersNotification',$result);
		}

	}

	//super admin

	public function viewSuperAdminDashBoard()
	{
        $this->load->view('superadmin/superAdminDashBoard');
    }
	//REPORTS ------------------------------------------------
	public function viewReports()
	{
        $this->load->model('MainModel');
		$val['totalSalesAndBooks'] = $this->MainModel->getTotalSalesAndBooks();
		$val['totalGcashBooks'] = $this->MainModel->getTotalGCashBooks();
		$val['totalOTCBooks'] = $this->MainModel->getTotalOTCBooks();
		$val['MonthlyPT'] = $this->MainModel->getMonthlyPaymentTypeBooks();
		$val['monthly'] = $this->MainModel->getMonthlyData();
		$val['listofshops'] = $this->MainModel->getListOfComputerShops();

		$val['salesShop'] = $this->MainModel->getMonthlySalesSpecifcShop();
		$this->load->view('superadmin/reports',$val);
    }
	public function showpdf(){
		$this->load->library('pdf');
		$val['totalSalesAndBooks'] = $this->MainModel->getTotalSalesAndBooks();
		$val['totalGcashBooks'] = $this->MainModel->getTotalGCashBooks();
		$val['totalOTCBooks'] = $this->MainModel->getTotalOTCBooks();
		$val['MonthlyPT'] = $this->MainModel->getMonthlyPaymentTypeBooks();
		$val['monthly'] = $this->MainModel->getMonthlyData();
		$val['listofshops'] = $this->MainModel->getListOfComputerShops();

		$val['salesShop'] = $this->MainModel->getMonthlySalesSpecifcShop();
		$this->load->view('makepdf',$val);
	}

	public function listofcomputershop(){
		$session = $this->session->userdata('username');
		if(!$session){
			redirect(findnlogin);
		}else{
			$this->load->model('MainModel');
			$val['details'] = $this->MainModel->getListOfComputerShops();
			$this->load->view('superadmin/listofcomputershop',$val);
		}
	}
	public function adminList($id){
		$session = $this->session->userdata('username');
		if(!$session){
			redirect(findnlogin);
		}else{	
			$this->load->model('MainModel');
			$val['compDetails'] = $this->MainModel->selectComputerShop($id);
			$val['adminList'] = $this->MainModel->getListOfAdmins($id);
			$val['compTypeList'] = $this->MainModel->getComputerTypeServiceFee($id);
			$this->load->view('superadmin/adminlist',$val);
		}
	}

	//Shop Admin Pages
	public function viewShopAdminBookings(){
		
		$shop_id = $this->session->userdata('admin_shop_id');
		if(!$shop_id){
			redirect(adminlogin);
		}else{
			$this->load->model('MainModel');
			// $val['bookingrequest'] = $this->MainModel->getallPendingRequest($shop_id);
			$val['acceptedrequest'] = $this->MainModel->getallAcceptedRequest($shop_id);
			$val['alltransac'] = $this->MainModel->viewallShopAdminBookingRequests($shop_id);
			$result['shop_details'] = $this->MainModel->getShopDetails($shop_id);
			$result['admin_name'] =  $this->session->userdata('admin_name');
			$result['profile_pic'] =  $this->session->userdata('profile_pic');
			// $result['notif_details'] = $this->MainModel->shopNotificationDetails($shop_id);
			$this->load->view('admin/template/adminHeader',$result);
			$this->load->view('admin/shopAdminBookings',$val);
		}
		// echo json_encode($val);
	}
	public function viewShopAdminScanQR(){
		$shop_id = $this->session->userdata('admin_shop_id');
		if(!$shop_id){
			redirect(adminlogin);
		}else{
			$result['admin_name'] =  $this->session->userdata('admin_name');
			$result['shop_details'] = $this->MainModel->getShopDetails($shop_id);
			$result['profile_pic'] =  $this->session->userdata('profile_pic');
			$this->load->view('admin/template/adminHeader',$result);
			$this->load->view('admin/shopAdminScanQR');
		}
	}
	public function viewShopAdminDashboard(){
		$shop_id = $this->session->userdata('admin_shop_id');
		if(!$shop_id){
			redirect(adminlogin);
		}else{
			$this->load->model('MainModel');
			//top finders
			$result['topfinders'] = $this->MainModel->selectTopFinders($shop_id);
			//total booking
			$result['totalBookings'] = $this->MainModel->ShopAdminTotalBookings($shop_id);
			//total sales
			$result['sales'] = $this->MainModel->ShopAdminSales($shop_id);
			//shop Ratings
			$result['ratings'] = $this->MainModel->ShopAdminRatings($shop_id);
			//shop details For Map
			$result['shop_details'] = $this->MainModel->getShopDetails($shop_id);
			$result['admin_name'] =  $this->session->userdata('admin_name');
			$result['profile_pic'] =  $this->session->userdata('profile_pic');
			$this->load->view('admin/template/adminHeader',$result);
			$this->load->view('admin/shopAdminDashboard',$result);
		}
   }
  public function viewShopAdminComputerType(){
		$shop_id = $this->session->userdata('admin_shop_id');
		if(!$shop_id){
			redirect(adminlogin);
		}else{
			$result['admin_name'] =  $this->session->userdata('admin_name');
			$result['shop_details'] = $this->MainModel->getShopDetails($shop_id);
			$result['profile_pic'] =  $this->session->userdata('profile_pic');
			$this->load->view('admin/template/adminHeader',$result);
      		$val['typelist'] = $this->MainModel->getListOfComputerTypes($shop_id);
			$this->load->view('admin/shopAdminComputerType',$val);
		}
	}
	public function viewAdminHeader(){
		$this->load->view('admin/template/adminHeader');
	}

	public function admin_dashboard(){
		$session = $this->session->userdata('username');
		$session2 = $this->session->userdata('admin_shop_id');
		
		if(!$session && !$session2){
			redirect(findnlogin);
		}else{
			$val['shop_id']   = $this->session->userdata('admin_shop_id'); 
			$val['shop_name'] = $this->session->userdata('admin_shop_name'); 
			$this->load->view('admin/template/header',$val);
			$this->load->view('admin/dashboard',$val);
			$this->load->view('admin/template/footer');
		}
	}
	public function admin_scanqr(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/scanqr');
		$this->load->view('admin/template/footer');
		$this->load->view('admin/template/qrscannerfooter');
	}
	public function admin_bookings(){
		$this->load->view('admin/template/adminHeader');
		$this->load->view('admin/Bookings');
		$this->load->view('admin/template/footer');
	}

	public function viewShopAdminEditProfile(){
		

		$shop_id = $this->session->userdata('admin_shop_id');
		if(!$shop_id){
			redirect(adminlogin);
		}else{
			$result['profile_pic'] =  $this->session->userdata('profile_pic');
			$result['admin_name'] =  $this->session->userdata('admin_name');
			$result['shop_details'] = $this->MainModel->getShopDetails($shop_id);
			$result2['shop_details'] = 	$result['shop_details'];
			$result2['computer_details'] = $this->MainModel->getListOfShop_ComputerTypes($shop_id);
			$result2['shopimages']      = $this->MainModel->listshopimages($shop_id);
			

			$this->load->view('admin/template/adminHeader',$result);
			$this->load->view('admin/shopAdminEditProfile',$result2);
		}
	}


	public function viewShopAdminAccountSettings(){
		$shop_id = $this->session->userdata('admin_shop_id');
		if(!$shop_id){
			redirect(adminlogin);
		}else{
			$result['profile_pic'] =  $this->session->userdata('profile_pic');
			$result['admin_name'] =  $this->session->userdata('admin_name');
			$result['shop_details'] = $this->MainModel->getShopDetails($shop_id);
			$admin_id = $this->session->userdata('user_id');
			$result2['adminDetails'] = $this->MainModel->selectShopAdminInfo($admin_id);

			$this->load->view('admin/template/adminHeader',$result);
			$this->load->view('admin/shopAdminAccountSettings',$result2);
		}
		
	}
	// POSTS AND COMMENTS
	public function viewShopAdminFeed(){
		$shop_id = $this->session->userdata('admin_shop_id');
		if(!$shop_id){
			redirect(adminlogin);
		}else{
			$result['profile_pic'] =  $this->session->userdata('profile_pic');
			$result['admin_name'] =  $this->session->userdata('admin_name');
			$result['shop_details'] = $this->MainModel->getShopDetails($shop_id);
			$admin_id = $this->session->userdata('user_id');

			//shop Ratings
			$result2['count_ratings'] = $this->MainModel->ShopAdminRatings($shop_id);
			$result2['rating_heading']	= $this->MainModel->ShopRecentRatings($shop_id);
			//post and comments
			$result2['shop_details'] = $this->MainModel->getShopDetails($shop_id);
			$result2['postDetails'] = $this->MainModel->getAllPosts($shop_id);
			$result2['commentDetails'] = $this->MainModel->getAllComments();
			$result2['admin_id'] = $admin_id; 
			// echo json_encode($result2['rating_heading']);
			$this->load->view('admin/template/adminHeader',$result);
			$this->load->view('admin/shopAdminFeed',$result2);
		}
	}

	public function shopAdminReports(){
		$shop_id = $this->session->userdata('admin_shop_id');

		$result['profile_pic'] =  $this->session->userdata('profile_pic');
		$result['admin_name'] =  $this->session->userdata('admin_name');
		$result['shop_details'] = $this->MainModel->getShopDetails($shop_id);

		 $data['sales']	= $this->MainModel->shopReportsSalesForGraph($shop_id);
		 $data['countSuccessBooking']  = $this->MainModel->shopReportsBookingStatusCountSuccess($shop_id);
		 $data['countFailBooking']  = $this->MainModel->shopReportsBookingStatusCountFail($shop_id);
		 $data['paidBookings']		= $this->MainModel->shopReportPaidBookings($shop_id);
		 $data['listofbookings']   = $this->MainModel->shopReportsBookings($shop_id);

		//  echo json_encode($data['listofbookings']);
		$this->load->view('admin/template/adminHeader',$result);
		$this->load->view('admin/shopAdminReports',$data);
	}	

	public function shopadmin_computerdetails($shopid){
		$this->load->model('MainModel');
		$val['shop_details'] = $this->MainModel->getshopDetails($shopid);
		$this->load->view('admin/template/header');
		$this->load->view('admin/computershopdetails',$val);
		//$this->load->view('admin/template/footer');
	}
	public function shopadmin_computertypeList($shopid){
		$this->load->model('MainModel');
		$val['shopid'] = $shopid;
		$val['details'] = $this->MainModel->getListOfComputerTypes($shopid);
		$this->load->view('admin/computertypelist',$val);
	}
	public function shopadmin_comptypeInfo($ctypeid){
		$this->load->model('MainModel');
		$val['details'] = $this->MainModel->selectforUpdateComputerTypeInfo($ctypeid);
		$this->load->view('admin/viewComputertype',$val);
	}
	public function shopadmin_addComputerType(){
		$this->load->view('admin/computertype');
	}
	public function payment_exercise(){
		 $this->load->view('payment');
	}
	public function shopimages($shop_id){
		$this->load->model('MainModel');
		$val['id'] = $shop_id;
		$val['details'] = $this->MainModel->listshopimages($shop_id);
		$this->load->view('admin/shopimages',$val);
	}
	public function shopadmin_postEvents($shopid){
		$this->load->model('MainModel');
		$val['shopid'] = $shopid;
		$val['postDetails'] = $this->MainModel->listofPosts($shopid);
		$this->load->view('admin/postEvents',$val);
	}
	public function shopadmin_viewPost($post_id){
		$this->load->model('MainModel');
		$val['user_id'] = $this->session->userdata('user_id');
		$val['id'] = $post_id;
		$val['postDetails'] = $this->MainModel->viewPosts($post_id);
		$val['userDetails'] = $this->MainModel->getallPostComments($post_id);
		$this->load->view('admin/viewPost',$val);
	}
}
    