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
					<h2 class="heading-section">Computer shop admin list</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" data-target="#exampleModalCenter" data-toggle="modal">Add Admin</button>
				</div>
			</div>
      		<br>
			<div class="row">
      			<div class="col-md-3 cold-xs-1">
        			<h3 class="h5 mb-4 text-center"></h3>
        			<div class="card" style="width: 18rem;">
          				<div class="card-body">
            				<h5 class="card-title">TNC Pro Cebu</h5>
            				<p class="card-text"  id="CompShopPK">1</p>
          				</div>
          				<ul class="list-group list-group-flush">
            				<li class="list-group-item">Owner: <p>Ignatius Deodatus</p></li>
              				<li class="list-group-item">Adress: <p>Santiangko</p></li>
						</ul>
          				<div class="card-body">
            				<a href="#" class="card-link">Edit Details</a>
          				</div>
        			</div>
      			</div>
				<div class="col-md-9 col-xs-1">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table">
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
		      	<h3 class="text-center mb-3">Add admin</h3>
		      	<form id="addadminform" class="" name="addadminform">
		      		<div class="form-group mb-2">
		      			<label for="name">Username</label>
		      			<input name="username" id="username" type="text" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Last Name</label>
		      			<input name="last" id="last" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">First Name</label>
		      			<input name="first" id="first" type="text" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Email</label>
		      			<input name="email" id="email" type="email" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Phone number</label>
		      			<input name="pnum" id="pnum" type="text" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Birthdate</label>
		      			<input name="date" id="date" type="date" class="form-control">
		      		</div>
				<div class="form-group mb-2">
                <label for="vacstatus">Vacination Status</label>
	              <select name="vacstatus" class="form-control mb-2 form-select-lg mb-3 form-select" aria-label="Default select example">
                  <option value="">Pick...</option>
				  <option value="1st Dose">1st Dose</option>
                  <option value="2nd Dose">2nd Dose</option>
                  </select>
              	</div>	  
				<div class="form-group mb-2">
                <label for="gender">Gender</label>
	              <select name="gender" class="form-control mb-2 form-select-lg mb-3 form-select" aria-label="Default select example">
				  <option value="">Choose. . .</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
              	</div>
				<div class="form-group mb-2">
              <div class="form-group mb-2">
                <label for="status">Status</label>
	              <select name="status" class="form-control mb-2 form-select-lg mb-3 form-select" aria-label="Default select example">
				  <option value="">Select. . .</option>
                  <option value="Inactive">Inactive</option>
                  <option value="Active">Active</option>
                </select>
              </div>
			  <div class="form-group mb-2">
		      		<label for="name">Password</label>
		      		<input name="pass" id="pass" type="password" class="form-control">
		      	</div>
				  <div class="form-group mb-2">
		      		<label for="name">Repeat Password</label>
		      		<input name="conpass" id="conpass" type="password" class="form-control">
		      	</div>
              <div class="modal-footer">
                <div class="form-group mb-2">
	            	  <button  class="close-btn form-control btn btn-primary rounded px-3">Cancel</button>
	              </div>
                <div class="form-group mb-2">
	            	  <!-- <button input="" id="addadminbtn" class="form-control btn btn-primary rounded submit px-3">Add</button> -->
					  <input value="Add" class="form-control btn btn-primary rounded submit px-3" id="addadminbtn" readonly="readonly">
	              </div>
              </div>
	            
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

