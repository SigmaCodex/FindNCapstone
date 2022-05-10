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
                        <div class="analytics-tab" data-target-tab="#reports">
                            <h5>Earnings Report</h5>
                        </div>
                        <div class="reports-tab" data-target-tab="#analytics">
                            <h5>Partnered Computer Cafes</h5>
                        </div>
                        
                        
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
                            <button class="btn btn-secondary"> Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</div>

		<div class="content-data" >
			

			<div class="content-details active p-4" id="analytics">
				<div class="row">
					<table>
						<tr>
							<th></th>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="content-details row p-4" id="reports">
				
					<div class="col-4 pt-5">
		
						<div class="card-holder-total">
							<div class="d-flex align-items-center justify-content-between">
								<h5 class="text-center p-3 m-0">Select Month :</h5>
	
								<div class="select m-3 ">
									<div class="month-drop">
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
							</div>
							<div class="d-flex align-items-center justify-content-between">
								<h5 class="text-center p-3 m-0">Select Shop :</h5>
	
								<div class="select m-3 ">
									<select class="form-control form-control-sm">
										<option>TNC</option>
										<option>GameCity</option>
	
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
										<h5  class="m-0">₱300</h5>
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
										<h5  class="m-0">₱300</h5>
									</div>
								</div>
							</div>
	
						</div>
	
						
					</div>
				
					<div class="col-8">
						<div class="print-reports d-flex align-items-center justify-content-end">
							<button class="btn btn-warning">Print Reports</button>
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
</body>
</html>