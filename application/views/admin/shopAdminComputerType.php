<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    

	<!-- Modal CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/shopAdminComputerType.css">

	<title>FindN Dashboard</title>
</head>
<body>

	<!-- CONTENT -->
	<div class="container mt-5 p-1">
		<section id="content">

			<!-- MAIN -->
			<main>
				<div class="head-title">
					<div class="left">
						<h1>Computer Type</h1>

					</div>
					<a href="#" class="btn-download">
						<i class='fa fa-plus-circle'></i>
						<span class="text" data-toggle="modal" data-target="#edit-description">Add Computer Type</span>
					</a>
				</div>


				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Services</h3>
						</div>
						<table>
							<thead>
								<tr>
									<th>Service No.</th>
									<th>Access Type</th>
									<th>Total Units</th>
									<th>Price Rate</th>
									<th>Activation Status</th>
									<th>Action</th>
	
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="status pending">1</span></td>
									<td>Regular</td>
									<td>25</td>
									<td>₱15</td>
									<td>
										<div class="switch-toggle">
											<label class="switch"><input id="offline-regular"  type="checkbox"><span class="slider round"></span>
											</label>
											<p class="offline-regular"></p> 
										</div>
									</td>
									<td class="profile">
										<p class="view badge badge-success" data-toggle="modal" data-target="#view-description">View</p>
										<p class="remove badge badge-danger">Remove</p>
									</td>
									
								</tr>
								<tr>
									<td><span class="status pending">2</span></td>
									<td>VIP</td>
									<td>10</td>
									<td>₱25</td>
									<td>
										<div class="switch-toggle">
											<label class="switch"><input id="offline-vip"  type="checkbox"><span class="slider round"></span>
											</label>
											<p class="offline-vip"></p> 
										</div>
									</td>
									<td class="profile">
										<p class="view badge badge-success"	 data-toggle="modal" data-target="#view-description">View</p>
										<p class="remove badge badge-danger">Remove</p>
									</td>
									
								</tr>
								<tr>
									<td><span class="status pending">3</span></td>
									<td>SUPER VIP</td>
									<td>5</td>
									<td>₱30</td>
									<td>
										<div class="switch-toggle">
											<label class="switch"><input id="offline-super"  type="checkbox"><span class="slider round"></span>
											</label>
											<p class="offline-super"></p> 
										</div>
									</td>
									<td class="profile">
										<p class="view badge badge-success" data-toggle="modal" data-target="#view-description">View</p>
										<p class="remove badge badge-danger">Remove</p>
									</td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</main>
			<!-- MAIN -->

			<!-- Modal View -->
			<div class="modal fade" id="view-description">
				<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
					<div class="modal-content">

					<div class="modal-body">
						<div class="modal-holder ">

							<div class="d-flex align-items-center justify-content-end">
								<a href="#" class="btn-download" data-toggle="modal" data-target="#edit-description">
									<i class='fa fa-plus-circle'></i>
									<span class="text">Edit Details</span>
								</a>
							</div>
									<div class="modal-user-info">
										<div class="row ">
											<div class="col-6">
												<p class="modal-caption-details-left">Access Type:</p> 
												<p class="modal-caption-details-left">Service Number:</p> 
												<p class="modal-caption-details-left">Number of Units:</p> 
												<p class="modal-caption-details-left">Price Rate:</p>
												<p class="modal-caption-details-left">Status:</p>
											</div>
				
											<div class="col-6 text-right">
												<p class="modal-caption-details-right">VIP</p> 
												<p class="modal-caption-details-right">4</p> 
												<p class="modal-caption-details-right">20</p> 
												<p class="modal-caption-details-right">P25</p> 
												<!-- <p class="modal-caption-details-right badge badge-danger" style="color: white;">Deactivated</p>  -->
												<p class="modal-caption-details-right badge badge-success"  style="color: white;">Activated</p> 
											</div>
										</div>

										<div class="modal-spec">
											<h5>Specifications</h5>
										</div>
										<hr>

										<div class="row ">
											<div class="col-4">
												<p class="modal-caption-details-left-long">CPU:</p> 
												<p class="modal-caption-details-left-long">Accessories:</p> 
											</div>
				
											<div class="col-8 text-right">
												<p class="modal-caption-details-right-long">Intel Core i5-8400 @2.80ghZ(6 CPUs), `2.8Ghz</p> 
												<p class="modal-caption-details-right-long">Predator PC and Predator Accessories</p> 
											</div>
										</div>

										<div class="close-but d-flex align-items-center justify-content-end">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
										
									</div>
								
							
		
						
						</div>
					</div>
		
					</div>
				</div>
			</div>


			<!-- Modal Edit -->
			<div class="modal fade" id="edit-description">
				<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
					<div class="modal-content">

					<div class="modal-body">
						<div class="modal-holder ">
							
							<div class="modal-input-title text-left">
								<h4>ADD COMPUTER TYPE</h4>
							</div>
							
							<div class="modal-img-holder d-flex flex-column align-items-center justify-content-center">
								<p class="modal-img-holder-caption text-muted">*Upload image for service type reference. Allowed extensions: (png, jpg jpeg)</p>
								<img class="modal-image"src="assets/images/TNC-1.jpg" style="border-radius: 10px;">
							</div>
							
									<div class="modal-user-info">
										<div class="input-group mb-3">
											<div class="custom-file">
											  <input type="file" class="custom-file-input" id="inputGroupFile03">
											  <label class="custom-file-label" for="inputGroupFile03">Service Profile</label>
											</div>
										</div>
										<div class="row ">
											<div class="col-6">
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Access Type:</p> 
													<input type="text" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="ex. 'Regular'">
												</div>
												
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Number of Units:</p> 
													<input type="number" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
												</div>
												
											</div>
											<div class="col-6 text-left">

												<div class="modal-input">
													<p class="modal-caption-details-left-input">Service Number:</p> 
												<input type="text" value="2" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
												</div>
												
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Price Rate:</p>
													<div class="input-group input-group-sm mb-3">
														<div class="input-group-prepend">
														  <span class="input-group-text" id="inputGroup-sizing-sm" style="font-size: 9px;">PHP</span>
														</div>
														<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
													</div>	
												</div>
												

											</div>
										</div>

										<div class="modal-spec">
											<h5>Specifications</h5>
										</div>
										<hr>

										<div class="row ">
											<div class="col-12">
												<div class="modal-input">
													<p class="modal-caption-details-left-input">CPU:</p> 
													<input type="text" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> 
												</div>
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Accessories:</p> 
													<input type="text" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> 
												</div>
												
											</div>
			
										</div>

										<div class="close-but d-flex align-items-center justify-content-between">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											<button type="button" class="save-modal btn btn-success" data-dismiss="modal">Save</button>
										</div>
										
									</div>

						</div>
					</div>
		
					</div>
				</div>
			</div>


		</section>
	</div>
		
	
	

	<script src="assets/js/shopAdminComputerType.js"></script>
</body>
</html>