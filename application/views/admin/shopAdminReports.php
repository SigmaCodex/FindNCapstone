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

	<!-- CONTENT -->
	<div class="container">
		<section id="content">

			<!-- MAIN -->
			<main>
				<div class="head-title mb-5 mt-5">
					<div class="left">
						<h1>Transaction Reports</h1>

					</div>
					
					<a href="#" class="btn-download">
						<i class='bx bx-printer'></i>
						<span class="text">Print Reports</span>
					</a>
				</div>

				<div class="row">

					<div class="col-lg-4 col-sm-12">
						<div class="title">
							<h6><b>Reports</b></h6>
						</div>
						<ul class="box-info">
							<li>
								<i class='bx bxs-calendar' ></i>
								<span class="text">
									<p style="margin:0; color: #F46B31; font-weight: 800;">Total Bookings</p>
									<h3 class="text-muted">59</h3>
								</span>
							</li>
							<li>
								<i class='bx bxs-wallet' ></i>
								<span class="text">
									<p style="margin:0; color: #F46B31; font-weight: 800;">Total Sales</p>
									<h3 class="text-muted">₱150</h3>
								</span>
							</li>
							<li>
								<i class='bx bxs-star'></i>
								<span class="text">
									<div class="d-flex justify-content-center align-items-center">
										<p style="margin:0; color: #F46B31; font-weight: 800;">Overall Ratings</p>
									</div>
									<h3 class="text-muted">4.5</h3>
									
								</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-8 col-sm-12">
						<div class="title">
							<h6><b>Monthly Sales</b> </h6>
						</div>
						<div class="line-graph d-flex flex-column align-items-center justify-content-center">
							<h6>Booking Monthly Sales</h6>
							<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
						</div>
					</div>
				</div>

				<div class="row mt-3">

					<div class="col-lg-6 col-sm-12">
						<div class="title">
							<h6><b>Bookings</b> </h6>
						</div>
						<div class="pie-chart d-flex flex-column align-items-center justify-content-center">
							<div class="select-month">
								<select name="month" id="month">
									<option clas="opt" value="Jan_May">January - May</option>
									<option clas="opt" value="June_Dec">June - December</option>
								  </select>
							</div>
							<h6>Successful - Failed Booking Ratio</h6>
							
							<div id="donutchart" style="border-bottom: 1px solid gray;"></div>
							<br>
							<div class="column-chart d-flex flex-column align-items-center justify-content-center">
								<h6 class="m-0">Monthly Booking Count</h6>	
							</div>
							<div id="columnchart_material" class="pt-3"></div>

						</div>
						
					</div>

					<div class="col-lg-6 col-sm-12">
						<div class="title">
							<h6><b>Booking History</b> </h6>
						</div>
						<div class="table-book">

							<div class="table-book-header d-flex align-items-center justify-content-center mb-3">
								<input type="text">
									<div class="select-month-table m-0">
										<select name="month" id="month">
											<option clas="opt" value="Jan_May">January - May</option>
											<option clas="opt" value="June_Dec">June - December</option>
										</select>
									</div>
							</div>

							<div class="mt-5"></div>

							<!-- Table card-->
							<div class="table-card mb-3 rounded">
								
								<div class="row">
									<div class="col-2">
										<div class="img-prof-card">
											<img src="assets/images/Image1.png" alt="">
										</div>
									</div>
									<div class="table-card-names col-7">
										<h6>John Daviedi Olokano</h6>
										<h5>has booked <u>2</u>  <b>VIP Computer(s)</b> </h5>
										<p class="text-muted">May 1, 2021</p>
									</div>
									<div class="table-card-price col-3 text-right">
										<h6>₱20</h6>
									</div>

										
								</div>

							</div>

							<!-- Table card-->
							<div class="table-card mb-3 rounded">
								
								<div class="row">
									<div class="col-2">
										<div class="img-prof-card">
											<img src="assets/images/Prof.png" alt="">
										</div>
									</div>
									<div class="table-card-names col-7">
										<h6>John Daviedi Olokano</h6>
										<h5>has booked <u>2</u>  <b>VIP Computer(s)</b> </h5>
										<p class="text-muted">May 1, 2021</p>
									</div>
									<div class="table-card-price col-3 text-right">
										<h6>₱20</h6>
									</div>

										
								</div>

							</div>

							<!-- Table card-->
							<div class="table-card mb-3 rounded">
								
								<div class="row">
									<div class="col-2">
										<div class="img-prof-card">
											<img src="assets/images/Prof1.png" alt="">
										</div>
									</div>
									<div class="table-card-names col-7">
										<h6>John Daviedi Olokano</h6>
										<h5>has booked <u>2</u>  <b>VIP Computer(s)</b> </h5>
										<p class="text-muted">May 1, 2021</p>
									</div>
									<div class="table-card-price col-3 text-right">
										<h6>₱20</h6>
									</div>

										
								</div>

							</div>


						</div>
					</div>
				</div>
				
			</main>
		</section>
	</div>
		


	<script>
		var xValues = ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov'];
		var yValues = [7,8,8,9,9,9,10,11,14,14,29];
		
		new Chart("myChart", {
		  type: "line",
		  data: {
			labels: xValues,
			datasets: [{
			  fill: false,
			  lineTension: 0,
			  backgroundColor: "rgba(0,0,255,1.0)",
			  borderColor: "rgba(0,0,255,0.1)",
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
			['Sales', 'Bookings per Day'],
			['Successful ',     50],
			['Failed ',    12]
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
				['Month', 'Successful', 'Failed'],
				['Jan.', 10, 4],
				['Feb.', 11, 4],
				['Mar.', 6, 11],
				['Apr.', 10, 5],
				['May', 10, 5]
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
</body>
</html>

