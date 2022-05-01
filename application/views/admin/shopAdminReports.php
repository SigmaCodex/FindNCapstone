<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/shopAdminReports.css">

	<!-- BOOTSTRAP CDN  -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<title>Shop Admin Reports</title>
</head>
<body>

<?php 
  date_default_timezone_set("Asia/Manila");
$current_month = date("M");
$current_year  = date("Y");
  // line graph logic
  $monthSales = array(array("Jan",0), array("Feb",0), array("Mar",0), array("Apr",0), array("May",0), array("Jun",0), array("July",0), array("Aug",0), array("Sep",0), array("Oct",0), array("Nov",0), array("Dec",0));
  //line Graph
  foreach($sales as $data){
     
     $datamonth = date("M", strtotime($data->date_issued));//check the month
    //  echo date("Y", strtotime($data->date_issued));
     //echo date("Y");//current year;
    //filter the corresponding month
    for($x=0; $x<12; $x++){
      if($datamonth == $monthSales[$x][0]) {
        $monthSales[$x][1]= $monthSales[$x][1] + $data->service_fee;
      }
    } 

  }
  //------------------------------------
  //Count Of paid Bookings
  $CountOfPaidBookings = array(array("Jan",0), array("Feb",0), array("Mar",0), array("Apr",0), array("May",0), array("Jun",0), array("July",0), array("Aug",0), array("Sep",0), array("Oct",0), array("Nov",0), array("Dec",0));
  foreach($paidBookings as $booking){

	$data2month = date("M", strtotime($booking->date_issued));//check the month
		for($x=0; $x<12; $x++){
		if($data2month ==  $CountOfPaidBookings[$x][0]) {
			$CountOfPaidBookings[$x][1]=  $CountOfPaidBookings[$x][1] + 1;
		}
    } 

  }
  //-----------------
  //List Of Bookings
  $CountOfBookings = array(array("Jan",0,0), array("Feb",0,0), array("Mar",0,0), array("Apr",0,0), array("May",0,0), array("Jun",0,0), array("July",0,0), array("Aug",0,0), array("Sep",0,0), array("Oct",0,0), array("Nov",0,0), array("Dec",0,0));
  foreach($listofbookings as $listBooking){

	$data3month = date("M", strtotime($listBooking->date_issued));
	// echo $data3month;
		for($c=0; $c<12; $c++){
			if($data3month ==  $CountOfBookings[$c][0]) {
				// echo $listBooking->transaction_status;
				if($listBooking->transaction_status == "success"){
					$CountOfBookings[$c][1] =  $CountOfBookings[$c][1] + 1;
					
				}
				if($listBooking->transaction_status == "Overdue" || $listBooking->transaction_status == "declined"){
					$CountOfBookings[$c][2]=  $CountOfBookings[$c][2] + 1;
				}
			}
		} 
  }



?>

	<!-- CONTENT -->
	<div class="container">
		<section id="content">

			<!-- MAIN -->
			<main>
				<div class="head-title mb-5 mt-5">
					<div class="left">
						<h1>Transaction Reports</h1>

					</div>
					
					<a href="#" class="btn-download" id="print_report">
						<i class='bx bx-printer'></i>
						<span class="text">Print Reports</span>
					</a>
				</div>


				<div class="row">
					<div class="col-lg-4 col-sm-12">
						<div class="title d-flex align-items-center justify-content-between mb-3">
							<h6><b>Reports</b></h6>
							<!-- <h3><?php echo date("M", strtotime("1/01/2022"));?> <?php echo date("Y");?> </h3> -->
                            <div class="select-month-profit">
								<select name="month" id="reportSales_select_date">
									<option hidden selected disabled><?php echo date("M");?></option>
									<option clas="opt" value="0">Jan</option>
									<option clas="opt" value="1">Feb</option>
									<option clas="opt" value="2">Mar</option>
									<option clas="opt" value="3">Apr</option>
									<option clas="opt" value="4">May</option>
									<option clas="opt" value="5">June</option>
									<option clas="opt" value="6">July</option>
									<option clas="opt" value="7">Aug</option>
									<option clas="opt" value="8">Sept</option>
									<option clas="opt" value="9">Oct</option>
									<option clas="opt" value="10">Nov</option>
									<option clas="opt" value="1">Dec</option>
								  </select>
							</div>
						</div>
						<ul class="box-info" id="Monthlyreports">
							<li>
								<i class='bx bxs-calendar' ></i>
								<span class="text">
									<?php 
										$totalBookings = 0;
										for($i=0;$i<12;$i++){
											if($CountOfPaidBookings[$i][0] == $current_month){
												$totalBookings = $CountOfPaidBookings[$i][1];
											}
										}
										
									?>
									<p style="margin:0; color: #F46B31; font-weight: 800;">Total Bookings</p>
									<h3 class="text-muted" id="total_bookings"><?php echo $totalBookings;?></h3>
									<p class="view-details text muted" style=" font-size: 8px; margin:0; color:#FD7238">(Total Paid/Succesful Bookings)</p>
								</span>
							</li>
							<li>
								<i class='bx bxs-wallet' ></i>
								<span class="text">
									<p style="margin:0; color: #F46B31; font-weight: 800;">Total Sales</p>
									<?php 
										$current_totalSale = 0;
										for($i=0;$i<12;$i++){
											if($monthSales[$i][0] == $current_month){
												$current_totalSale = $monthSales[$i][1];
											}
										}
										$current_profit = $current_totalSale * 0.3;
									?>
									<h3 class="text-muted" id="total_sales">₱<?php echo $current_totalSale;?></h3>
								</span>
							</li>
							<li>
                                <i class='bx bx-money'></i>
								<span class="text">
									<div class="d-flex justify-content-center align-items-center">
										<p style="margin:0; color: #F46B31; font-weight: 800;">Total Profit</p>
									</div>
									<h3 class="text-muted" id="total_profit">₱<?php echo round($current_profit);?> </h3>
                                    <p class="view-details text muted" style=" font-size: 8px; margin:0; color:#FD7238">( 30% Profit Share )</p>
									
								</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-8 col-sm-12">
						<div class="title mb-4">
							<h6><b>Monthly Sales</b> </h6>
						</div>
						<div class="line-graph d-flex flex-column align-items-center justify-content-center">
							<h6>Booking Monthly Sales</h6>
							<p class="view-details text muted" style=" font-size: 8px; margin:0; color:#FD7238">(Year: <?php echo $current_year;?>)</p>
							<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
						</div>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-lg-6 col-sm-12" id="bookingsReport">
						<div class="title">
							<h6><b>Bookings</b> </h6>
						</div>
						<div class="pie-chart d-flex flex-column align-items-center justify-content-center">

							<h6>Successful - Failed Booking Ratio</h6>
							<p class="view-details text muted" style=" font-size: 15px; margin:0; color:#FD7238">(<?php echo $current_year;?>)</p>
							
							<div id="donutchart" style="border-bottom: 1px solid gray;"></div>
							<br>
							<div class="column-chart d-flex flex-column align-items-center justify-content-center">
								<!-- <div class="select-month">
									<select name="month" id="month">
										<option hidden selected disabled><?php echo date("M");?></option>
										<option clas="opt" value="0">Jan</option>
										<option clas="opt" value="1">Feb</option>
										<option clas="opt" value="2">Mar</option>
										<option clas="opt" value="3">Apr</option>
										<option clas="opt" value="4">May</option>
										<option clas="opt" value="5">June</option>
										<option clas="opt" value="6">July</option>
										<option clas="opt" value="7">Aug</option>
										<option clas="opt" value="8">Sept</option>
										<option clas="opt" value="9">Oct</option>
										<option clas="opt" value="10">Nov</option>
										<option clas="opt" value="1">Dec</option>
									</select>
								</div> -->
								<h6 class="m-1">Monthly Booking Count</h6>
								<p class="view-details text muted" style=" font-size: 10px; margin:0; color:#FD7238">(<?php echo $current_month;?>)</p>
							</div>
							<div id="columnchart_material" class="pt-3"></div>
							
						</div>
						
					</div>

					
					<div class="col-lg-6 col-sm-12">
						<div class="title">
							<h6><b>Booking History</b> </h6>
						</div>
						<div class="table-book">

							<div class="table-book-header d-flex flex-column align-items-center justify-content-center mb-3">
							<h6>Booking For Month Of: <?php echo $current_month?></h6>
							<p class="view-details text muted" style=" font-size: 10px; margin:0; color:#FD7238">(Successful Bookings)</p>

								<!-- <input type="text"> -->
									<!-- <div class="select-month-table m-0">
										<select name="month" id="month">
											<option clas="opt" value="Jan_May">January - May</option>
											<option clas="opt" value="June_Dec">June - December</option>
										</select>
									</div> -->
							</div>

							<div class="mt-5"></div>

							<?php foreach($listofbookings as $list_Booking){
								$lB_current_date = date("M", strtotime($list_Booking->date_issued));
								if($current_month == $lB_current_date && $list_Booking->transaction_status == "success"){
							?>				
							<!-- Table card-->
							<div class="table-card mb-3 rounded">
								
								<div class="row">
									<div class="col-2">
										<div class="img-prof-card">
											<img src="assets/upload/finder/<?php echo $list_Booking->profile_pic?>" onerror="this.src='assets/images/default.png';" alt="">
										</div>
									</div>
									<div class="table-card-names col-7">
										<h6><?php echo $list_Booking->firstname?> <?php echo $list_Booking->lastname?></h6>
										<h5>has booked <u><?php echo $list_Booking->num_ticket?></u>  <b><?php echo $list_Booking->name?> Computer(s)</b> </h5>
										<p class="text-muted"><?php echo date("M j, Y", strtotime($list_Booking->date_issued));?></p>
									</div>
									<div class="table-card-price col-3 text-right">
										<h6>₱<?php echo $list_Booking->service_fee?></h6>
									</div>

										
								</div>
							</div>
							<!-- end Table card-->
							<?php }}?>	

						</div>
					</div>
				</div>
				
			</main>
		</section>
	</div>
	<script>
		var xValues = ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec'];
		var yValues = [<?php echo $monthSales[0][1]?>,<?php echo $monthSales[1][1]?>,<?php echo $monthSales[2][1]?>,<?php echo $monthSales[3][1]?>,<?php echo $monthSales[4][1]?>,<?php echo $monthSales[5][1]?>,<?php echo $monthSales[6][1]?>,<?php echo $monthSales[7][1]?>,<?php echo $monthSales[8][1]?>,<?php echo $monthSales[9][1]?>,<?php echo $monthSales[10][1]?>,<?php echo $monthSales[11][1]?>];
		
		new Chart("myChart", {
		  type: "line",
		  data: {
			labels: xValues,
			datasets: [{
			  fill: false,
			  lineTension: 0,
			  backgroundColor: "#f46b31",
			  borderColor: "#f46b3163" ,
			  data: yValues
			}]
		  },
		  options: {
			legend: {display: false}
		  }
		});
		</script>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {

			var data = google.visualization.arrayToDataTable([
				['Task', 'Count Of All Bookings'],
				['Successful Booking',     <?php foreach($countSuccessBooking as $data2){ echo $data2->count_success;}?>],
				['Failed Booking',    <?php foreach($countFailBooking as $data3){ echo $data3->count_fail;}?>]
				
			  ]);

			var options = {
			pieHole: 0.4,
			backgroundColor: '#f9f9f9',
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
		}
		</script>



		<script type="text/javascript">
			google.charts.load('current', {'packages':['bar']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {
			var data = google.visualization.arrayToDataTable([
				<?php
					$count_success = 0;
					$count_fail = 0;
					for($i=0;$i<12;$i++){
						if($CountOfBookings[$i][0] == $current_month){
							$count_success =   $CountOfBookings[$i][1];
							$count_fail =   $CountOfBookings[$i][2];
						}
					}
							
				?>
				['Month', 'Successful', 'Failed'],
				['<?php echo $current_month;?>', <?php echo $count_success;?>, <?php echo $count_fail;?>]
				// ['Feb.', 11, 4],
				// ['Mar.', 6, 11],
				// ['Apr.', 10, 5],
				// ['May', 10, 5],
				// ['May', 10, 5],
				// ['May', 10, 5],
				// ['May', 10, 5],
				// ['May', 10, 5],
				// ['May', 10, 5],
			]);

			var options = {
				// title: 'title',
				// width: 310,
				// height: 260,
				backgroundColor: '#f9f9f9',
				// is3D: true
			};

			var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

			chart.draw(data, google.charts.Bar.convertOptions(options));
			}
		</script>

		<script>
		$(document).on("change", "#reportSales_select_date", function(){
				var date_selected = $(this).val();
		
				var varSales = [<?php echo $monthSales[0][1]?>,<?php echo $monthSales[1][1]?>,<?php echo $monthSales[2][1]?>,<?php echo $monthSales[3][1]?>,<?php echo $monthSales[4][1]?>,<?php echo $monthSales[5][1]?>,<?php echo $monthSales[6][1]?>,<?php echo $monthSales[7][1]?>,<?php echo $monthSales[8][1]?>,<?php echo $monthSales[9][1]?>,<?php echo $monthSales[10][1]?>,<?php echo $monthSales[11][1]?>];
				var CountBookings = [<?php echo $CountOfPaidBookings[0][1]?>,<?php echo $CountOfPaidBookings[1][1]?>,<?php echo $CountOfPaidBookings[2][1]?>,<?php echo $CountOfPaidBookings[3][1]?>,<?php echo $CountOfPaidBookings[4][1]?>,<?php echo $CountOfPaidBookings[5][1]?>,<?php echo $CountOfPaidBookings[6][1]?>,<?php echo $CountOfPaidBookings[7][1]?>,<?php echo $CountOfPaidBookings[8][1]?>,<?php echo $CountOfPaidBookings[9][1]?>,,<?php echo $CountOfPaidBookings[10][1]?>,<?php echo $CountOfPaidBookings[11][1]?> ];
				$("#total_sales").text("₱"+varSales[date_selected]);
				//profit
				var profit = varSales[date_selected] * 0.3;
				$("#total_profit").text("₱"+Math.round(profit));
				// alert(varName[date_selected]);
				$("#total_bookings").text(CountBookings[date_selected]);
		});
		</script>


<script>


$('#print_report').click(function () {
	
            var divContents = document.getElementById("bookingsReport").innerHTML;
			var report2 = document.getElementById("Monthlyreports").innerHTML;
			var chart = document.getElementById("myChart").innerHTML;
			var dataUrl = document.getElementById('myChart').toDataURL(); 
   			var chart_report = '<center><img src="' + dataUrl + '"></center>';
            var prnt = window.open('', '', 'height=1000, width=1000');
     
			//  prnt.document.write(report2);
			prnt.document.write(divContents,report2,chart_report);
            prnt.document.close();
            prnt.print();



 


});  

</script>		
</body>
</html>

