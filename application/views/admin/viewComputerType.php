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
			<!-- <li class="logo"><a href="">Back</a></li> -->
            <li class="logo"><a href="#">FindN</a></li>
			<li class="item button secondary"><a href="<?php echo base_url();?>user-logout">Log out</a></li>

            <li class="toggle"><span class="bars"></span></li>
        </ul>
    	</nav>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-left mb-6">
					<h2 class="heading-section">Computer Type Information</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" id="deletebtn" class="btn mb-2 mb-md-0 btn-primary btn-block">Delete Computer Type</button>
				</div>
			</div>
      		<br>
			

			<div class="row">
      			<div class="col-md-3 cold-xs-1">
        			<h3 class="h5 mb-4 text-center"></h3>
        			<div class="card" style="width: 18rem;">
          				<div class="card-body">
						  <?php foreach ($details as $d) {?>  
            				<h5 class="card-title" ><?php echo $d->name;?></h5>
            				<p class="card-text" id="CompShopPK"><?php echo $d->Ctype_id;?></p>
							<p class="card-text" id="CompShopFK" style="display:none"><?php echo $d->shop_id_fk;?></p>
          				</div>
          				<ul class="list-group list-group-flush">
            				<li class="list-group-item">Total Units: <p><?php echo $d->total_units;?></p></li>
							<li class="list-group-item">Rate: <p><?php echo $d->rate;?></p></li>
              				<li class="list-group-item">Status: <p><?php echo $d->status;?></p></li>
						</ul>
          				<div class="card-body">
						  <div class="form-group mb-2">
						  <button type="button" data-target="updateComputerModal" data-toggle="modal" class="editbtn btn mb-2 mb-md-0 btn-primary btn-block">Edit Details</button>
	              		  </div>
          				</div>
        			</div>
					<?php } ?>
      			</div>
				<div class="col-md-9 col-xs-1">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>Specifications</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php foreach($details as $d){ ?>
							<tr class="alert" role="alert">
						      	<td><?php echo $d->specs ?></td>
						    </tr>
						<?php } ?>  
						  </tbody>
						</table>
					</div>
				</div>
        
			</div>
		</div>
	</section>
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
		      			<label for="name">Computer Type Name:</label>
		      			<input name="compname" id="shopName" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Total Units:</label>
		      			<input  name="number" id="c_number" type="text" class="form-control">
		      		</div> 
					<div class="form-group mb-2">
		      			<label for="name">Rate:</label>
		      			<input name="emailadd" id="emailadd" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Specs:</label>
		      			<input name="address" id="AddressIN" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Computer Type Image:</label>
		      			<input  type="text" id="lat" name="lat" placeholder="Your lat.." class="form-control">
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
					  <input value="Update" class="form-control btn btn-primary rounded submit px-3" id="updatecomputertypebtn" readonly="readonly">
	              	</div>
              	</div>
			  </form>
      </div>
    </div>
  </div>
</div>
<!-- <form id="addadminform" class="form" name="addadminform"> -->
	</body>
</html>
<script>
$(document).on("click", ".editbtn", function () {
	var CSPK = $("#CompShopPK").text();
	var BASE_URL = "<?php echo base_url();?>";
	$.ajax({
		url: BASE_URL+"getCompTypeInfo/" + CSPK,
		method: "POST",
        data: { Ctype_id: CSPK },
		dataType: "json",
		success: function (data) {
			
			$("#shopName").val(data.name);
			$("#c_number").val(data.total_units);
			$("#emailadd").val(data.rate);
			$("#AddressIN").val(data.specs);
            $("#lat").val(data.comp_type_img);

			$("#updateComputerModal").modal('show');
		},
	});
});
  $(document).on("click", '#updatecomputertypebtn', function() {
    var BASE_URL = "<?php echo base_url();?>";
    var type_ID = $('#CompShopPK').text();
    var name = $('#shopName').val();
    var total = $('#c_number').val();
    var rate = $('#emailadd').val();
    var specs = $('#AddressIN').val();
    var cimage = $('#lat').val();
    $.ajax({
          url:BASE_URL+"updateCompType/"+type_ID,
          type: "POST",
          data:{comp_name:name,comp_total:total,comp_rate:rate,comp_specs:specs,comp_img:cimage},
          beforeSend : function()
          {
          alert("processing");
          },
          success: function(data)
          {
            location.reload();   
          }
         });
 });
 </script>
 <script>
$(document).on("click", "#deletebtn", function () {
    var BASE_URL = "<?php echo base_url();?>";
    var CSPK = $("#CompShopPK").text();
    var shop_id = $("#CompShopFK").text();
	$.ajax({
						url: BASE_URL+"deleteComputerType/" + CSPK,
						method: "POST",
						data: { Ctype_id: CSPK },
						success: function (data) {
							swal("Computer Type has been deleted!", {
    					  		icon: "success",
    						}).then((value) => {
						  		window.location = BASE_URL+"shopadmin-computertypelist/" +shop_id;
							});

						},
					});	
 });
 </script>