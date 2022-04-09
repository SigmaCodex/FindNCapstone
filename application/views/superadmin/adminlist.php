<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/register.css">
	<link rel="stylesheet" href="../assets/js/adminlist.js">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
 	<link rel="stylesheet" href="../assets/css/ionicons.min.css">

	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../assets/admin/vendor/jquery/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
  	<script src="../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

	
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />


	<style>
		#map {
        height: 100%;
		}
		#map { position:absolute;left: 550px; top:350px; bottom:0px;height:450px ;width:580px; }
        .geocoder {
            position:absolute;left: 550px; top:290px;
        }
	</style>

	</head>
	<body>
	<section class="ftco-section">
		<nav>
        <ul class="menu">
			<li class="logo"><a href="<?php echo base_url();?>listofcomputershop">Back</a></li>
            <li class="logo"><a href=""></a>FindN Super Admin</li>
			<li class="item button secondary"><a href="" class="changepassmodal" data-target="#changePassword" data-toggle="modal">Change password</a></li>
			<li class="item button secondary"><a href="<?php echo base_url();?>user-logout">Log out</a></li>

            <li class="toggle"><span class="bars"></span></li>
        </ul>
    	</nav>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-left mb-6">
				<?php foreach ($compDetails as $s) {?>  
					<h2 class="heading-section">Reports</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" data-target="#exampleModalCenter" data-toggle="modal">Reports</button>
				</div>
			</div>
      		<br>
			

			<div class="row">
      			<div class="col-md-3 cold-xs-1">
        			<h3 class="h5 mb-4 text-center"></h3>
        			<div class="card" style="width: 18rem;">
          				<div class="card-body">
						  
            				<h5 class="card-title"><?php echo $s->shop_name;?></h5>
            				<p class="card-text" id="CompShopPK"><?php echo $s->shop_id;?></p>
          				</div>
          				<ul class="list-group list-group-flush">
            				<li class="list-group-item">ContactNumber: <p><?php echo $s->contact_number;?></p></li>
							<li class="list-group-item">Email Address: <p><?php echo $s->email_address;?></p></li>
              				<li class="list-group-item">Address: <p><?php echo $s->address;?></p></li>
						</ul>
          				<div class="card-body">
						  <div class="form-group mb-2">
						  <button type="button" data-target="#updateComputerModal" data-toggle="modal" class="editbtn btn mb-2 mb-md-0 btn-primary btn-block">Edit Details</button>
	              		  </div>
          				</div>
        			</div>
					<?php } ?>
      			</div>
				<div class="col-md-9 col-xs-1">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
					<div class="row justify-content-center" style="padding: 0 0 0 60px;">
				<div class="col-md-9 text-left mb-6" >
					<h2 class="heading-section">Computer shop admins</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" data-target="#exampleModalCenter" data-toggle="modal">Add Admin</button>
				</div>
			</div>
					<!-- <div class="col-md-6 text-right mb-4">
						<h2 style="padding: 0 0 0 50px; text-align:center;">Computer shop admin list</h2> 
        				<button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" data-target="#exampleModalCenter" data-toggle="modal">Add Admin</button>
					</div> -->
					
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>No.</th>
						      <th>Name</th>
						      <th>Email</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php foreach($adminList as $aD){ ?>
							<tr class="alert" role="alert">
							<td><?php echo $aD->user_id ?></td>
							<td>
								  <div class="email">
									  <?php echo $aD->firstname?> <?php echo $aD->lastname?>
						      		</div>
						      	</td>
						      	<td><?php echo $aD->email ?></td>
						      	<td>
								  <div style="display:flex;justify-content:space-around;align-items:center;">
										<button type="button" data-target="#updateAdminModal" data-toggle="modal" class="view-admin" data="<?php echo $aD->user_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa fa-eye"></i></span>
										</button>
										<button type="button"  class="remove-admin" data="<?php echo $aD->user_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
										<span aria-hidden="true"><i class="fa fa-close"></i></span>
										</button>
								   </div>
				        		</td>
						    </tr>
						<?php } ?>  
						  </tbody>
						</table> 
						<br>
						<h3 style="padding: 0 0 0 60px;">Computer types list</h3>
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>No.</th>
						      <th>Name</th>
						      <th>Service Fee</th>
							  <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php foreach($compTypeList as $CT){ ?>
							<tr class="alert" role="alert">
							<td><?php echo $CT->Ctype_id ?></td>
								<td>
								  <div class="email">
									  <?php echo $CT->name?>
						      		</div>
						      	</td>
						      	<td><?php echo $CT->service_fee ?></td>
								<td>
									<button type="button" data-target="#updateFee" data-toggle="modal" class="view-fee" data="<?php echo $CT->Ctype_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none; color:orange;">
										<!-- <span aria-hidden="true"><i class="fa fa-eye"></i></span> -->
										Change service fee
									</button>
								</td>
						    </tr>
						<?php } ?>  
						  </tbody>
						</table> 
					</div>
				</div>
							
			</div>
		</div>
	</section>

<div id="changePassword" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h3 class="text-center mb-3">Change Password</h3>
      </div>
      	<div class="modal-body">
	  		<form id="changepassform" class="" name="changepassform">
			  		<input id="currentpass" hidden>	
					<div class="form-group mb-2">
		      			<label for="servicefee">Current Password</label>
		      			<input name="curpas" id="curpas" type="text" class="form-control">
		      		</div>	
					  <div class="form-group mb-2">
		      			<label for="servicefee">New Password</label>
		      			<input name="newpas" id="newpas" type="text" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="servicefee">Repeat New Password</label>
		      			<input name="repnewpas" id="repnewpas" type="text" class="form-control">
		      		</div>
			</form>
      	</div>
		  	<div class="modal-footer">
                	<div class="form-group mb-2">
					 	<button type="button" id="close-passbtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3"  readonly="readonly">
		        		</button>
	              	</div>
                	<div class="form-group mb-2">
					  <input value="Change" class="form-control btn btn-primary rounded submit px-3" id="changepassbtn" readonly="readonly">
	              	</div>
            </div>
    </div>
  </div>
</div>

<div id="updateFeeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h3 class="text-center mb-3">Computer Type service fee</h3>
      </div>
      	<div class="modal-body">
	  		<form id="updatefeeform" class="" name="updatefeeform">
			  		<input id="CompTypeID" hidden>	
					<div class="form-group mb-2">
		      			<label for="servicefee">Service Fee</label>
		      			<input name="serviceFee" id="serviceFee" type="text" class="form-control">
		      		</div>	
			</form>
      	</div>
		  	<div class="modal-footer">
                	<div class="form-group mb-2">
					 	<button type="button" id="close-feebtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3"  readonly="readonly">
		        		</button>
	              	</div>
                	<div class="form-group mb-2">
					  <input value="Update" class="form-control btn btn-primary rounded submit px-3" id="updatefeebtn" readonly="readonly">
	              	</div>
            </div>
    </div>
  </div>
</div>
<div id="updateComputerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h3 class="text-center mb-3">Update Computer Shop</h3>
      </div>
      <div class="modal-body">
	  	<form id="updatecompform" class="" name="updatecompform">
					<div class="form-group mb-2">
		      			<label for="name">ComputerShop Name</label>
		      			<input name="compname" id="shopName" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Contact Number</label>
		      			<input  name="number" id="c_number" type="text" class="form-control">
		      		</div> 
					<div class="form-group mb-2">
		      			<label for="name">Email Address</label>
		      			<input name="emailadd" id="emailadd" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Address</label>
		      			<input name="address" id="AddressIN" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Latitude</label>
		      			<input  type="text" id="lat" name="lat" value="<?php echo "hellow";?>"  placeholder="Your lat.." class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Longtitude</label>
		      			<input type="text" id="lng" name="lng" placeholder="Your lng.." value="sample" class="form-control">
		      		</div>
					<div>		
		      </div>
			    <div class="geocoder"><div id="geocoder" ></div></div>
				<div id="map"></div>
				<div class="modal-footer">
                	<div class="form-group mb-2">
					 	<button type="button" id="close-adminbtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3"  readonly="readonly">
		        		</button>
	              	</div>
                	<div class="form-group mb-2">
					  <input value="Update" class="form-control btn btn-primary rounded submit px-3" id="updatecomputershopbtn" readonly="readonly">
	              	</div>
              	</div>
			  </form>
      </div>
    </div>
  </div>
</div>
<div id="updateAdminModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h3 class="text-center mb-3">Update Admin Details</h3>
      </div>
      <div class="modal-body">
	  	<form id="updateadminform" class="" name="updateadminform">
		 			 <input id="useridid" hidden>	
					<div class="form-group mb-2">
		      			<label for="name">First Name</label>
		      			<input name="updfirst" id="updfirst" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Last Name</label>
		      			<input  name="updlast" id="updlast" type="text" class="form-control">
		      		</div> 
					  <div class="form-group mb-2">
                		<label for="updgender">Gender</label>
	              		<select name="updgender" class="form-control mb-2 form-select-lg mb-3 form-select" aria-label="Default select example">
				  			<option value="">Choose. . .</option>
                  			<option value="Male">Male</option>
                  			<option value="Female">Female</option>
                  		</select>
              		  </div>
						<div class="form-group mb-2">
		      			<label for="name">Birthdate</label>
		      			<input name="upddate" id="upddate" type="date" class="form-control">
		      		 </div> 
					<div class="form-group mb-2">
		      			<label for="name">Email</label>
		      			<input type="text" id="updemail" name="updemail" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Contact Number</label>
		      			<input type="text" id="updCNum" name="updCNum"  class="form-control">
		      		</div>
					<div>		
		      </div>
			    <div class="geocoder"><div id="geocoder" ></div></div>
				<div id="map"></div>
				<div class="modal-footer">
                	<div class="form-group mb-2">
					 	<button type="button" id="close-updatebtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3"  readonly="readonly">
		        		</button>
	              	</div>
                	<div class="form-group mb-2">
					  <input value="Update" class="form-control btn btn-primary rounded submit px-3" id="updateadminbtn" readonly="readonly">
	              	</div>
              	</div>
			  </form>
      </div>
    </div>
  </div>
</div>
<!-- <form id="addadminform" class="form" name="addadminform"> -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
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
                <label for="gender">Gender</label>
	              <select name="gender" class="form-control mb-2 form-select-lg mb-3 form-select" aria-label="Default select example">
				  <option value="">Choose. . .</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
              	</div>
				<div class="form-group mb-2">
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
	            	  <!-- <button  class="close-btn form-control btn btn-primary rounded px-3">Cancel</button> -->
					  <!-- <input value="Cancel" class="form-control btn btn-primary rounded px-3" id="close-btn" readonly="readonly"> -->
					 	<button type="button" id="closebtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3" id="close-btn" readonly="readonly">
		        		</button>
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



<script>
$(document).ready(function () {
	$("#addadminform").validate({
		rules: {
			first: {
				required: true,
				minlength: 2,
			},
			last: {
				required: true,
				minlength: 2,
			},
			pnum: {
				required: true,
				number: true,
				minlength: 11,
				maxlength: 11,
			},
			email: {
				required: true,
				email: true,
			},
			date: {
				required: true,
			},
			username: {
				required: true,
				minlength: 4,
				maxlength: 16,
			},
			pass: {
				required: true,
				minlength: 8,
			},
			conpass: {
				required: true,
				minlength: 8,
				equalTo: "#pass",
			},
			status: {
				required: true,
			},
			gender: {
				required: true,
			},
		},
		messages: {
			first: {
				required: "Please enter your first name",
				minlength: "Name should atleast have 2 characters",
			},
			last: {
				required: "Please enter your last name",
				minlength: "Name should atleast have 2 characters ",
			},
			pnum: {
				required: "Please enter your phone number",
				number: "Please enter numbers only",
			},
			email: {
				required: "Please enter your email",
			},
			username: {
				required: "Please enter your username",
				minlength: "Username should be atleast 4 characters",
				maxlength: "Username should not be long than 8 characters",
			},
			pass: {
				required: "Please enter your password",
				minlength: "Password should be 8 or more characters long",
			},
			conpass: {
				required: "Please re enter your password",
				equalTo: "Incorrect password",
			},
		},
	});
	$("#changepassform").validate({
		rules: {
			curpas: {
				required: true,
			},
			newpas: {
				required: true,
				minlength: 8,
			},
			repnewpas: {
				required: true,
				minlength: 8,
				equalTo: "#newpas",
			},
		},
		messages: {
			curpas: {
				required: "Please enter your current password",
			},
			newpas: {
				required: "Please enter your new password",
				minlength: "Password should be 8 or more characters long",
			},
			repnewpas: {
				required: "Please repeater your new password",
				equalTo: "Incorrect password",
			},
		},
	});
	$("#updateadminform").validate({
		rules: {
			updfirst: {
				required: true,
				minlength: 2,
			},
			updlast: {
				required: true,
				minlength: 2,
			},
			updCNum: {
				required: true,
				number: true,
				minlength: 11,
				maxlength: 11,
			},
			updemail: {
				required: true,
				email: true,
			},
			upddate: {
				required: true,
			},
			updgender: {
				required: true,
			},
		},
		messages: {
			updfirst: {
				required: "Please enter your first name",
				minlength: "Name should atleast have 2 characters",
			},
			updlast: {
				required: "Please enter your last name",
				minlength: "Name should atleast have 2 characters ",
			},
			updCNum: {
				required: "Please enter your phone number",
				number: "Please enter numbers only",
			},
			updemail: {
				required: "Please enter your email",
			},
		},
	});
	$("#updatecompform").validate({
		rules: {
			compname: {
				required: true,
				minlength: 2,
			},
			number: {
				required: true,
				number: true,
				minlength: 11,
				maxlength: 11,
			},
			lat: {
				required: true,
			},
			emailadd: {
				required: true,
				email: true,
			},
			lng: {
				required: true,
			},
			address: {
				required: true,
			},
		},
		messages: {
			compname: {
				required: "Please enter Computer shop name",
				minlength: "Name should atleast have 2 characters",
			},
			number: {
				required: "Please enter your phone number",
				number: "Please enter numbers only",
			},
			emailadd: {
				required: "Please enter your email",
			},
		},
	});
	$("#updatefeeform").validate({
		rules: {
			serviceFee: {
				required: true,
			},
		}
	});
});

//backbutton
function BackPage(el) {
	window.location = "/listofcomputershop";
}

//inserting data with AJAX

$(document).on("click", "#addadminbtn", function () {
	var validator = $("#addadminform").validate();
	if ($("#addadminform").valid()) {
		var CSPK = $("#CompShopPK").text();
		var fname = $("#first").val();
		var lname = $("#last").val();
		var uname = $("#username").val();
		var phonenum = $("#pnum").val();
		var email = $("#email").val();
		var pass = $("#pass").val();
		var conpass = $("#conpass").val();

		var bdate = new Date($("#date").val());
		var day = bdate.getDate();
		var month = bdate.getMonth() + 1;
		var year = bdate.getFullYear();

		var actbdate = [day, month, year].join("/");

		//select tag
		var gender = $('select[name="gender"]').val();
		var BASE_URL = "<?php echo base_url();?>";
		$.ajax({
			url:"<?php echo base_url();?>registeradmin",
			type: "POST",
			data: {
				shop_id		: CSPK,
				firstname	: fname,
				lastname	: lname,
				pnum		: phonenum,
				birthdate	: actbdate,
				username	: uname,
				email		: email,
				gender		: gender,
			},
			// 	// contentType: false,
			// 	//       cache: false,
			// 	// processData:false,
			// beforeSend : function()
			// {
			// //$("#preview").fadeOut();
			// // $("#err").fadeOut();
			// alert("processing");
			// },
			success: function (data) {
				swal({
					title: "Good job!",
					text: "Admin has been registered!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
					// $("#closebtn").trigger("click");
					window.location =  BASE_URL+"admin-list/" + CSPK;
				});
			},
		});

		// $("#CompShopPK").text("");
		// $("#first").val("");
		// $("#last").val("");
		// $("#username").val("");
		// $("#pnum").val("");
		// $("#email").val("");
		// $("#pass").val("");
		// $("#conpass").val("");
		// $("#date").val("");

		//select tag
		// $('select[name="gender"]').val("");
		// $('select[name="vacstatus"]').val("");
	} else {
		// swal(
		// 	{
		// 		title: "Are you sure?",
		// 		text: "You will not be able to recover this imaginary file!",
		// 		type: "warning",
		// 		showCancelButton: true,
		// 		confirmButtonColor: "#DD6B55",
		// 		confirmButtonText: "Yes, delete it!",
		// 		closeOnConfirm: false,
		// 		//closeOnCancel: false
		// 	},
		// 	function () {
		// 		swal("Deleted!", "Your imaginary file has been deleted!", "success");
		// 	}
		// );
	}
});
$(document).on("click", ".changepassmodal", function () {
	var BASE_URL = "<?php echo base_url();?>";
	$.ajax({
			url: BASE_URL+"checkpassword",
			method: "POST",
			dataType: "json",
			success: function (data) {
				$("#currentpass").text(data.password);
			},
		});//end ajax
});
$(document).on("click", "#changepassbtn", function () {
	var validator = $("#changepassform").validate();
	var BASE_URL = "<?php echo base_url();?>";
	if ($("#changepassform").valid()) {
		var current = $("#curpas").val();
		var newpas = $("#newpas").val();
		var repeat = $("#repnewpas").val();

		

			alert($("#currentpass").text());
			alert($("#curpas").val());

		  if($("#currentpass").text() == $("#curpas").val()) { 
			//   alert("good to change");

		$.ajax({
			url: BASE_URL+"updatepassword/"+repeat,
			method: "POST",
			data: {
				password : repeat,
			},
			success: function (data) {
				// window.location = "listofcomputershop";
				swal({
					title: "Good job!",
					text: "Password has been changed!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
					location.reload(); 
				});
			},
		});//end ajax
		}//end check pass
	}//end validate if
	
});
$(document).on("click", ".view-admin", function () {
	var id = $(this).attr("data");
	// var CSPK = $("#CompShopPK").text();
	var BASE_URL = "<?php echo base_url();?>";
	$.ajax({
		url: BASE_URL+"getadmin-details/" + id,
		method: "POST",
		data: { user_id: id },
		dataType: "json",
		success: function (data) {
			$("#updfirst").val(data.firstname);
			$("#updlast").val(data.lastname);
			$('select[name="updgender"]').val(data.gender);
			$("#updemail").val(data.email);
			$("#updCNum").val(data.contactaddress);
			$("#useridid").text(data.user_id);


			
			let text = data.birthdate;
			const myArray = text.split("/");
			var dd = myArray[0];
			var mm = myArray[1];
			var yy = myArray[2];
			if(mm.length > 1){
				var actbdate = [yy, mm, dd].join("-");
			}
			else{
				var actbdate = [yy, "0"+mm, dd].join("-");
			}

			// if(mm.length == 0){

			// }
			

			$("#upddate").val(actbdate);

			$("#updateAdminModal").modal('show');
		},
	});
});
$(document).on("click", ".view-fee", function () {
	var id = $(this).attr("data");
	// var CSPK = $("#CompShopPK").text();
	var BASE_URL = "<?php echo base_url();?>";
	$.ajax({
		url: BASE_URL+"getCompTypeInfo/" + id,
		method: "POST",
		data: { Ctype_id : id },
		dataType: "json",
		success: function (data) {
			$("#serviceFee").val(data.service_fee);
			$("#CompTypeID").text(data.Ctype_id);

			$("#updateFeeModal").modal('show');
		},
	});
});
$(document).on("click", "#updatefeebtn", function () {
	var validator = $("#updatefeeform").validate();
	var BASE_URL = "<?php echo base_url();?>";
	if ($("#updatefeeform").valid()) {

		var CTPK = $("#CompTypeID").text();
		var servicefee = $("#serviceFee").val();

		$.ajax({
			url: BASE_URL+"updateFee/" + CTPK,
			method: "POST",
			data: {
				service_fee : servicefee,
			},
			success: function (data) {
				alert(data);
				// window.location = "listofcomputershop";
				swal({
					title: "Good job!",
					text: "Service fee has been changed!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
					location.reload(); 
				});
			},
		});
	} else {
		swal(
			{
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false,
				//closeOnCancel: false
			},
			function () {
				swal("Deleted!", "Your imaginary file has been deleted!", "success");
			}
		);
	}
});
$(document).on("click", "#updateadminbtn", function () {
	var validator = $("#updateadminform").validate();
	var BASE_URL = "<?php echo base_url();?>";
	if ($("#updateadminform").valid()) {
		var CSPK = $("#useridid").text();
		var first = $("#updfirst").val();
		var last = $("#updlast").val();
		var gender = $('select[name="gender"]').val();
		var email = $("#updemail").val();
		var number = $("#updCNum").val();

		var bdate = new Date($("#upddate").val());
		var day = bdate.getDate();
		var month = bdate.getMonth() + 1;
		var year = bdate.getFullYear();

		var actbdate = [day, month, year].join("/");

		$.ajax({
			url: BASE_URL+"updateadmindetails/" + CSPK,
			method: "POST",
			data: {
				firstname: first,
				lastname: last,
				gender: gender,
				birthdate: actbdate,
				email: email,
				contactaddress: number
			},
			success: function (data) {
				// window.location = "listofcomputershop";
				swal({
					title: "Good job!",
					text: "ComputerShop has been registered!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
					location.reload(); 
				});
			},
		});
	} else {
		swal(
			{
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false,
				//closeOnCancel: false
			},
			function () {
				swal("Deleted!", "Your imaginary file has been deleted!", "success");
			}
		);
	}
});
$(document).on("click", ".remove-admin", function () {
		var BASE_URL = "<?php echo base_url();?>";
		var id = $(this).attr("data");

			swal({
  				title: "Are you sure to delete this computer type?",
  				icon: "warning",
  				buttons: true,
  				dangerMode: true,
			}).then((willDelete) => {
  				if (willDelete) {
					$.ajax({
						url: BASE_URL+"deleteadmin/" + id,
						method: "POST",
						data: { user_id: id },
						success: function (data){
							swal("Computer Type has been deleted!", {
    					  		icon: "success",
    						}).then((value) => {
								location.reload(); 
							});

						},
					});	
  				}
			});
});
$(document).on("click", ".editbtn", function () {
	var CSPK = $("#CompShopPK").text();
	var BASE_URL = "<?php echo base_url();?>";
	$.ajax({
		url: BASE_URL+"getshopdetails/" + CSPK,
		method: "POST",
		data: { shop_id: CSPK },
		dataType: "json",
		success: function (data) {
			$("#shopName").val(data.shop_name);
			$("#c_number").val(data.contact_number);
			$("#emailadd").val(data.email_address);
			$("#AddressIN").val(data.address);

			let text = data.coordinates;
			const myArray = text.split(",");

			var lat = myArray[0];
			var lng = myArray[1];

			$("#lat").val(lat);
			$("#lng").val(lng);

			$("#updateComputerModal").modal('show');
		},
	});

});



$(document).on("click", "#updatecomputershopbtn", function () {
	var validator = $("#updatecompform").validate();
	var BASE_URL = "<?php echo base_url();?>";
	if ($("#updatecompform").valid()) {
		var CSPK = $("#CompShopPK").text();
		var s_name = $("#shopName").val();
		var c_number = $("#c_number").val();
		var email = $("#emailadd").val();
		var add = $("#AddressIN").val();
		var lat = $("#lat").val();
		var lng = $("#lng").val();
		var coordinate = lat + "," + lng;

		$.ajax({
			url: BASE_URL+"updateshopdetails/" + CSPK,
			method: "POST",
			data: {
				shop_name: s_name,
				number: c_number,
				email_add: email,
				address: add,
				coor: coordinate,
			},
			success: function (data) {
				// window.location = "listofcomputershop";
				swal({
					title: "Good job!",
					text: "ComputerShop has been registered!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
					window.location = BASE_URL +"admin-list/"+CSPK;
				});
			},
		});
	} else {
		swal(
			{
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false,
				//closeOnCancel: false
			},
			function () {
				swal("Deleted!", "Your imaginary file has been deleted!", "success");
			}
		);
	}
});

</script>
<script>
$(document).ready(function() {
	var CSPK = $("#CompShopPK").text();

var BASE_URL = "<?php echo base_url();?>";
$.ajax({
	url: BASE_URL+"getshopdetails/" + CSPK,
	method: "POST",
	data: { shop_id: CSPK },
	dataType: "json",
	success: function (data) {
		
		$("#shopName").val(data.shop_name);
		$("#c_number").val(data.contact_number);
		$("#emailadd").val(data.email_address);
		$("#AddressIN").val(data.address);

		let text = data.coordinates;
		const myArray = text.split(",");

		var lat = myArray[0];
		var lng = myArray[1];

		$("#lat").val(lat);
		$("#lng").val(lng);

	},
});
});


	// var lati = document.getElementById("lat").value;
	// alert(lati);
    //  document.getElementById("lng").value;
    // //  var sample = "hello";
	//  alert(document.getElementById("lat").value);
	//  var text =  document.getElementsByClassName('heading-section').textContent;
    //   alert(text);

		var long = 123.89702509681695;
		var lang =  10.297418655907592;
         var user_location = [long, lang ];
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG5rbzEzIiwiYSI6ImNrbWZxNWl5eDM3amcyeGp4cHRvN3pxdGgifQ.HM7QZISQcECRgm9aKAZysg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v10',
            center: user_location,
            zoom: 12
        });
        //  geocoder here
        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            // limit results to Australia
            //country: 'IN',
        });

        var marker ;

        // After the map style has loaded on the page, add a source layer and default
        // styling for a single point.
        map.on('load', function() {
            addMarker(user_location,'load');
            // add_markers(saved_markers);

            // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
            // makes a selection and add a symbol that matches the result.
            geocoder.on('result', function(ev) {
                alert("aaaaa");
                console.log(ev.result.center);

            });
        });
        map.on('click', function (e) {
            marker.remove();
            addMarker(e.lngLat,'click');
            //console.log(e.lngLat.lat);
            document.getElementById("lat").value = e.lngLat.lat;
            document.getElementById("lng").value = e.lngLat.lng;

        });

        function addMarker(ltlng,event) {

            if(event === 'click'){
                user_location = ltlng;
            }
            marker = new mapboxgl.Marker({draggable: true,color:"#d02922"})
                .setLngLat(user_location)
                .addTo(map)
                .on('dragend', onDragEnd);
        }
        // function add_markers(coordinates) {

        //     var geojson = (saved_markers == coordinates ? saved_markers : '');

        //     console.log(geojson);
        //     // add markers to map
        //     geojson.forEach(function (marker) {
        //         console.log(marker);
        //         // make a marker for each feature and add to the map
        //         new mapboxgl.Marker()
        //             .setLngLat(marker)
        //             .addTo(map);
        //     });

        // }

        function onDragEnd() {
            var lngLat = marker.getLngLat();
            document.getElementById("lat").value = lngLat.lat;
            document.getElementById("lng").value = lngLat.lng;
            console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);
        }

        // $('#signupForm').submit(function(event){
        //     event.preventDefault();
        //     var lat = $('#lat').val();
        //     var lng = $('#lng').val();
        //     var url = 'locations_model.php?add_location&lat=' + lat + '&lng=' + lng;
        //     $.ajax({
        //         url: url,
        //         method: 'GET',
        //         dataType: 'json',
        //         success: function(data){
        //             alert(data);
        //             location.reload();
        //         }
        //     });
        // });
        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
    </script>