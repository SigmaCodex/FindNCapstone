<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/shopAdminDashboard.css">

	<title>FindN Dashboard</title>  
</head>
<body>

	<!-- CONTENT -->
	<div class="container">
		<section id="content">

			<!-- MAIN -->
			<main>
				<div class="head-title">
					<div class="left">
						<h1>Dashboard</h1>

					</div>
					<!-- <a href="#" class="btn-download">
						<i class='bx bxs-cloud-download' ></i>
						<span class="text">Download PDF</span>
					</a> -->
				</div>

				<ul class="box-info">
					<li>
						<i class='bx bxs-calendar' ></i>
						<span class="text">
							<h3>59</h3>
							<p style="margin:0">Total Bookings</p>
							<p class="view-details text muted text-right" style="font-size: 8px; margin:0">Click to view more...</p>
						</span>
					</li>
					<li>
						<i class='bx bxs-wallet' ></i>
						<span class="text">
							<h3>₱150</h3>
							<p style="margin:0">Total Sales</p>
							<p class="view-details text muted text-right" style="font-size: 8px; margin:0">Click to view more...</p>
						</span>
					</li>
					<li>
						<i class='bx bxs-dollar-circle' ></i>
						<span class="text">
							<h3>₱45</h3>
							<div class="d-flex justify-content-center align-items-center">
								<p style="margin:0">Total Profit</p>
								<p class="view-details text muted" style="padding-left: 10px; font-size: 8px; margin:0; color:#FD7238">( 30% Profit Share )</p>
							</div>
							
							<p class="view-details text muted text-right" style="font-size: 8px; margin:0">Click to view more...</p>
						</span>
					</li>
				</ul>


				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Top Finders</h3>
							<i class='bx bx-search' ></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Ranking</th>
									<th>Finders Name</th>
									<th>Total Bookings</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="status process">1</span></td>
									<td class="profile">
										<img class="table-profile" src="img/people.png">
										<p>John Dave</p>
									</td>
									<td>30</td>
									
								</tr>
								<tr>
									<td><span class="status pending">2</span></td>
									<td  class="profile">
										<img src="img/people.png">
										<p>John Dave</p>
									</td>
									<td>23</td>
									
								</tr>
								<tr>
									<td><span class="status completed">3</span></td>
									<td  class="profile">
										<img src="img/people.png">
										<p>John Dave</p>
									</td>
									<td>12</td>
									
								</tr>
							</tbody>
						</table>
					</div>
					<div class="rating">
						<div class="rating-details">
							<h5 class="rating-title">TNC RATINGS</h5>
							<p class="over-rating">4.5/5.0 (15 Reviews)</p>
						</div>
						<div class="star-rating d-flex align-items-center justify-content-start">
							
							<i class='bx bxs-star' ></i>
							<i class='bx bxs-star' ></i>
							<i class='bx bxs-star' ></i>
							<i class='bx bxs-star' ></i>
							<i class='bx bxs-star-half' ></i>
						</div>
						<div class="view-rating d-flex justify-content-end align-items-center">
							<p class="view-rating-text">View Ratings</p>
							<i class='bx bxs-chevrons-right'></i>
						</div>
						
					</div>
				</div>


				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Shop Map Location</h3>
						</div>
						<div class="map-location d-flex align-items-center justify-content-center">
							<p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1962.7754870953547!2d123.89757386099087!3d10.297716817573397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99909fa641ea7%3A0x28868e53470c0c75!2sTNC%20CEBU%20HQ!5e0!3m2!1sen!2sph!4v1649999691702!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
						</div>
						</div>
			
				</div>
			</main>
			<!-- MAIN -->
		</section>
	</div>
		
	<!-- CONTENT -->
	

	<!-- <script src="shopAdminDashboard.js"></script> -->
</body>
</html>