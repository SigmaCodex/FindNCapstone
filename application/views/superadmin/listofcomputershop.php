<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
 	<link rel="stylesheet" href="assets/css/ionicons.min.css">

	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="assets/admin/vendor/jquery/jquery.min.js"></script>
  	<script src="assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  	<script src="assets/js/adminlist.js"></script>
  	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<link rel="stylesheet" href="assets/css/register.css">

	</head>
	<body>
	<section class="ftco-section">
		<nav>
        <ul class="menu">
            <li class="logo"><a href="#">FindN</a></li>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">About</a></li>
            <li class="item"><a href="#">Services</a></li>
            </li>
            <li class="item button secondary"><a href="#">Log out</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    	</nav>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-left mb-6">
					<h2 class="heading-section">Computer Shop list</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" data-target="#exampleModalCenter" data-toggle="modal">Add Computer shop</button>
				</div>
			</div>
      		<br>
			<div class="row">
				<div class="col-md-12 col-xs-1">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table" style="margin:0;" !important>
						  <thead class="thead-primary">
						    <tr>
						      <th>&nbsp;</th>
						      <th>No.</th>
						      <th>Name</th>
						      <th>Status</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										<input type="checkbox">
									  	<span span class="checkmark"></span>
									</label>
						    	</td>
						    	<td>
						    		<!-- <div class="img" style="background-image: url(images/product-1.png);"></div> -->
						    	</td>
						    	<td>
						      		<div class="email">
						      			<span>Sneakers Shoes 2020 For Men </span>
						      		</div>
						      	</td>
						      	<td>Inactive</td>
						      	<td>
						      		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            			<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          			</button>
				        		</td>
						    	</tr>
						    	<tr class="alert" role="alert">
						    		<td>
						    			<label class="checkbox-wrap checkbox-primary">
											<input type="checkbox">
										  	<span pan class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<!-- <div class="img" style="background-image: url(images/product-2.png);"></div> -->
						    	</td>
						      	<td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      	</div>
						      	</td>
						      	<td>Inactive</td>
						      	<td>
						      		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            			<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          			</button>
				        		</td>
						    	</tr>
							    <tr class="alert" role="alert">
							    	<td>
							    		<label class="checkbox-wrap checkbox-primary">
											  <input type="checkbox">
											  <span class="checkmark"></span>
										</label>
							    	</td>
							    	<td>
						    		<!-- <div class="img" style="background-image: url(images/product-3.png);"></div> -->
						    		</td>
						      		<td>
						      			<div class="email">
						      				<span>Sneakers Shoes 2020 For Men </span>
						      			</div>
						      		</td>
						      		<td>Inactive</td>
						      		<td>
						      			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            				<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          				</button>
				        			</td>
						    		</tr>

						    		<tr class="alert" role="alert">
						    			<td>
						    				<label class="checkbox-wrap checkbox-primary">
										  		<input type="checkbox">
										  		<span class="checkmark"></span>
											</label>
						    			</td>
						    			<td>
						    				<!-- <div class="img" style="background-image: url(images/product-4.png);"></div> -->
						    			</td>
						      			<td>
						      				<div class="email">
						      				<span>Sneakers Shoes 2020 For Men </span>
						      			</div>
						      </td>
						      <td>Inactive</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td class="border-bottom-0">
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td class="border-bottom-0">
						    		<!-- <div class="img" style="background-image: url(images/product-1.png);"></div> -->
						    	</td>
						      <td class="border-bottom-0">
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      	</div>
						      </td>
						      <td class="border-bottom-0">Inactive</td>
						      <td class="border-bottom-0">
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- <form id="addadminform" class="form" name="addadminform"> -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <!-- <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div> -->
		      <div class="modal-body p-4 py-5 p-md-5">
		      	<h3 class="text-center mb-3">Add Computer Shop</h3>
		      	<form id="addadminform" class="" name="addadminform">
	            <!-- <div class="form-group d-md-flex">
								<div class="w-100 text-center">
									<a href="#" class="forgot">I'm already a member</a>
								</div>
	            </div> -->
	          </form>
		      </div>
		    </div>
		  </div>
		</div>
	</body>
</html>

