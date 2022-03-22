<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
 	<link rel="stylesheet" href="../assets/css/ionicons.min.css">

	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../assets/admin/vendor/jquery/jquery.min.js"></script>
  	<script src="../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<link rel="stylesheet" href="../assets/css/register.css">

	</head>
	<body>
	<section class="ftco-section">
		<nav>
        <ul class="menu">
			<li class="logo"><a href="<?php echo base_url();?>listofcomputershop">Back</a></li>
            <li class="logo"><a href="#">FindN</a></li>
			<li class="item button secondary"><a href="user-logout">Log out</a></li>

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
						  <?php foreach ($compDetails as $s) {?>  
            				<h5 class="card-title" ><?php echo $s->shop_name;?></h5>
            				<p class="card-text" id="CompShopPK"><?php echo $s->shop_id;?></p>
					
          				</div>
          				<ul class="list-group list-group-flush">
            				<li class="list-group-item">ContactNumber: <p><?php echo $s->contact_number;?></p></li>
              				<li class="list-group-item">Adress: <p><?php echo $s->address;?></p></li>
						</ul>
          				<div class="card-body">
            				<a href="#" class="card-link">Edit Details</a>
          				</div>
						  <?php } ?>
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
						  <?php foreach($adminDetails as $aD){ ?>
							<tr class="alert" role="alert">
							<td>
								<label class="checkbox-wrap checkbox-primary">
									<input type="checkbox">
									  <span span class="checkmark"></span>
								</label>
							</td>
							<td><?php echo $aD->user_id ?></td>
							<td>
								  <div class="email">
									  <span><?php echo $aD->firstname?> <?php echo $aD->lastname?></span>
						      		</div>
						      	</td>
						      	<td><?php echo $aD->email ?></td>
						      	<td>
								  <div style="display:flex;justify-content:space-around;align-items:center;">
										<button type="button" class="view-shop" data="<?php echo $s->shop_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa fa-eye"></i></span>
										</button>
										<button type="button" class="remove-shop" data="<?php echo $s->shop_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa fa-close"></i></span>
										</button>
								   </div>
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

// 	(function ($) {
// 	"use strict";

// 	$('[data-toggle="tooltip"]').tooltip();
// })(jQuery);

//input validation

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
				minlength: 8,
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
			vacstatus: {
				required: true,
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
		var vacstatus = $('select[name="vacstatus"]').val();
		var BASE_URL = "<?php echo base_url();?>";
		$.ajax({
			url:"<?php echo base_url();?>registeradmin",
			type: "POST",
			data: {
				shop_id: CSPK,
				firstname: fname,
				lastname: lname,
				pnum: phonenum,
				birthdate: actbdate,
				username: uname,
				email: email,
				pass: pass,
				conpass: conpass,
				gender: gender,
				vacstatus: vacstatus,
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
		$('select[name="gender"]').val("");
		$('select[name="vacstatus"]').val("");
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

</script>
