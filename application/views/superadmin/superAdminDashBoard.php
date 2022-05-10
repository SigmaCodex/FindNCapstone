<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Modal CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>

	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/superAdminDashBoard.css">

	<title>Super Admin Reports</title>
</head>
<body>
	<!-- start of header -->
	<div class="header">
        <div class="row">
            <div class="col-6 m-0">
                <div class="logo-findn">
                    <div class="d-flex align-items-center justify-content-start p-3">
                        <img src="assets/images/Logo.svg" alt="">
                    </div>
                </div>

                <div class="report-title">
                    <h2>Dashboard</h2>
                </div>
                

                <div class="options">
                    <div class="d-flex">
						<a href="superAdminDashBoard" style="text-decoration:none; color:black;">
							<div class="analytics-tab" >
								<h5>Earnings Report</h5>
							</div>
						</a>
						<a href="listofcomputershop">
							<div class="reports-tab" style="text-decoration:none; color:black;">
								<h5>Partnered Computer Cafes</h5>
							</div>
						</a>

                        
                        
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="row">

                    <div class="col-9">
                        <div class="animation-logo">
                            
                        </div>

                    </div>

                    <div class="col-3 p-4">
                        <div class="log d-flex align-items-start justify-content-end">
                            <a href="user-logout"class="btn btn-secondary"> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</div>
	<!-- //end of header -->

	<?php 

 date_default_timezone_set("Asia/Manila");
 $current_month = date("M");
 $current_year  = date("Y");


	$month = array(array("Jan",0), array("Feb",0), array("Mar",0), array("Apr",0), array("May",0), array("Jun",0), array("July",0), array("Aug",0), array("Sep",0), array("Oct",0), array("Nov",0), array("Dec",0));
	$shop_array = array();
	foreach($shoplist as $listshops){
		// $shop_array = array($listshops->shop_name,"sample");
		 array_push($shop_array,array($listshops->shop_name,$month));
	}
	//  print_r($shop_array);
	

	//  echo $shop_array[1][0];//name of shop 
	//   echo $shop_array[1][1][2][0]; // to access the 2nd array month

	 foreach($AllTransaction as $data){
     
		$datamonth = date("M", strtotime($data->date_issued));//check the month
		
	   //  echo date("Y", strtotime($data->date_issued));
		//echo date("Y");//current year;
	   //filter the corresponding month
	//    for($x=0; $x<12; $x++){
	// 	 if($datamonth == $monthSales[$x][0]) {
	// 	   $monthSales[$x][1]= $monthSales[$x][1] + $data->service_fee;
	// 	 }
	//    } 

		for($shop = 0 ;$shop<count($shop_array);$shop++){
			if($shop_array[$shop][0] == $data->shop_name){
				for($month=0; $month<12; $month++){
					if($datamonth == $shop_array[$shop][1][$month][0]) {
						$shop_array[$shop][1][$month][1] = $shop_array[$shop][1][$month][1] + $data->service_fee;
					}
				} 
			}
		}

		

	 }
	//  echo json_encode($shop_array);

//  echo ;

	?>
		<div class="content-data" >
			<div class="content-details  p-4" id="analytics">
				<div class="row">
					<table>
						<tr>
							<th></th>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="content-details active row p-4" id="reports">
				
					<div class="col-4 pt-5">
		
						<div class="card-holder-total">
							<div class="d-flex align-items-center justify-content-between">
								<h5 class="text-center p-3 m-0">Select Month :</h5>
	
								<div class="select m-3 ">
									<div class="month-drop">
										<select class="form-control form-control-sm" id="select_date">
											<option hidden selected disabled><?php echo date("M");?></option>
											<option clas="opt" value="0">January</option>
											<option clas="opt" value="1">February</option>
											<option clas="opt" value="2">March</option>
											<option clas="opt" value="3">April</option>
											<option clas="opt" value="4">May</option>
											<option clas="opt" value="5">June</option>
											<option clas="opt" value="6">July</option>
											<option clas="opt" value="7">August</option>
											<option clas="opt" value="8">September</option>
											<option clas="opt" value="9">October</option>
											<option clas="opt" value="10">November</option>
											<option clas="opt" value="11">December</option>
										</select>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-between">
								<h5 class="text-center p-3 m-0">Select Shop :</h5>
	
								<div class="select m-3 ">
									<select class="form-control form-control-sm" id="select_shop">
										<?php 
										$count_index = 0;
										foreach($shoplist as $shops){
										?>
										<option value="<?php echo $count_index?>"><?php echo $shops->shop_name?></option>
										<?php $count_index++;  }?>
									</select>
								</div>
							</div>
	
							<div class="findn-shares m-3">
								<div class="row">
									<div class="col-3 d-flex align-items-center">
										<img src="assets/images/Official_Logo.png" alt="">
									</div>
									<div class="col-9">
										<div class="d-flex align-items-center justify-content-start">
											<p class="m-0">FindN Total Shares </p>
											<p class="m-0" style="font-size: 10px; padding-left: 5px; color: green; font-weight: 500;">(70%)</p>
										</div>
										<?php 
											$totalBookings = 0;
											$profit = 0 ;
											for($i=0;$i<12;$i++){
												if($shop_array[0][1][$i][0] == $current_month){
													$totalBookings = $shop_array[0][1][$i][1];
													$profit  =  $totalBookings * 0.3;
												}
											}
										?>
										<h5  class="m-0" id="total_bookings">₱<?php echo $totalBookings;?></h5>
									</div>
								</div>
							</div>
	
							<div class="findn-shares m-3">
								<div class="row">
									<div class="col-3 d-flex align-items-center">
										<i class='bx bxs-store' style='color:#f3eded'  ></i>
									</div>
									<div class="col-9">
										<div class="d-flex align-items-center justify-content-start">
											<p class="m-0">Cafe Total Shares </p>
											<p class="m-0" style="font-size: 10px; padding-left: 5px; color: green; font-weight: 500;">(30%)</p>
										</div>
										<h5  class="m-0" id="total_profit">₱<?php echo $profit ;?></h5>
									</div>
								</div>
							</div>
	
						</div>
	
						
					</div>
				
					<div class="col-8">
						<div class="print-reports d-flex align-items-center justify-content-end">
							<a href="pdf" class="btn btn-warning">Print Reports</a>
						</div>
						<div class="space pt-2"></div>
						<div class="shop-lists">
							<div class="d-flex align-items-center justify-content-end">
								<div class="month-drop pb-2">
									<select class="form-control form-control-sm">
										<option>January</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
									</select>
								</div>
							</div>
							<div class="shop-lists-header">
								<div class="row">
									<div class="col-4 d-flex align-items-start">
										<h6>Shop Name</h6>
									</div>
									<div class="col-4">
										<h6 class="text-center">GCash Transactions</h6>
										<div class="row">
											<div class="col-6">
												<p>70% Share</p>
											</div>
											<div class="col-6">
												<p>30% Share</p>
											</div>
										</div>
									</div>
									<div class="col-4">
										<h6 style="font-size:14px ;">Over-the-counter Transactions</h6>
										<div class="row">
											<div class="col-6">
												<p>70% Share</p>
											</div>
											<div class="col-6">
												<p>30% Share</p>
											</div>
										</div>
									</div>
		
								</div>
							</div>

							<div class="p-2"></div>

							<!-- Table DATA -->
							<div class="shop-lists-data">
								<div class="row">
									<div class="col-4">
										<div class="d-flex align-items-center">
											<img src="assets/images/Image1.png" alt="">
											<h6 class="m-0 pl-2">TNC CYBERCAFE</h6>
										</div>
									</div>
									<div class="col-4">
										<div class="row">
											<div class="col-6">
												<div class="percent text-center">
													<p>₱300</p>
												</div>
											</div>
											<div class="col-6 ">
												<div class="percent text-center">
													<p>₱300</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="row">
											<div class="col-6">
												<div class="percent text-center">
													<p>₱300</p>
												</div>
											</div>
											<div class="col-6 ">
												<div class="percent text-center">
													<p>₱300</p>
												</div>
											</div>
										</div>
									</div>
		
								</div>
							</div>

							<div class="shop-lists-data">
								<div class="row">
									<div class="col-4">
										<div class="d-flex align-items-center">
											<img src="assets/images/Image2.png" alt="">
											<h6 class="m-0 pl-2">GameCity</h6>
										</div>
									</div>
									<div class="col-4">
										<div class="row">
											<div class="col-6">
												<div class="percent text-center">
													<p>₱300</p>
												</div>
											</div>
											<div class="col-6 ">
												<div class="percent text-center">
													<p>₱300</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="row">
											<div class="col-6">
												<div class="percent text-center">
													<p>₱300</p>
												</div>
											</div>
											<div class="col-6 ">
												<div class="percent text-center">
													<p>₱300</p>
												</div>
											</div>
										</div>
									</div>
		
								</div>
							</div>
						</div>
					</div>
			</div>
			
		</div>

	
	<script src="assets/js/superAdminDashBoard.js"></script>
	<script>
		$(document).on("change", "#select_date", function(){
				var date_selected = $(this).val();
				var shop_selected = $('#select_shop').val();
				// alert(shop_selected);
				
				shops = [];

				for(i = 0 ; i < <?php echo count($shop_array); ?>;i++){
					alert("asdsa");
				}
				// var data = [<?echo $shop_array[$shop][1][0][1]?>];

				$("#total_bookings").text("₱"+data[date_selected]);
		});

	</script>
</body>
</html>