<!doctype html>
<html lang="en">
  <head>
  	<title>List of Computer Types of Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
 	<link rel="stylesheet" href="assets/css/ionicons.min.css">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="assets/admin/vendor/jquery/jquery.min.js"></script>
  	<script src="assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  	<!-- <script src="assets/js/adminlist.js"></script> -->
  	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="assets/css/register.css">

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
            <li class="logo"><a href="#">FindN</a></li>
            </li>
            <li class="item button secondary"><a href="#">Log out</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    	</nav>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-left mb-6">
					<h2 class="heading-section">Computer Type List</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" data-target="#addComputerModal" data-toggle="modal">Add Computer Type</button>
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
						      <th>No.</th>
						      <th>Name</th>
						      <th>Total Units</th>
						      <th>Rate</th>
                              <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
							<!-- php -->
						  <?php foreach ($details as $s) {?>  
						    <tr class="alert" role="alert">
						    	<td class="primary-key">
										<?php echo $s->Ctype_id;?>	
						    	</td>
						    	<td class="shop-name">
						    			<?php echo $s->name;?>	
						    	</td>
						    	<td class="shop-email">
						      	
										<?php echo $s->total_units;?>	
						      	
						      	</td>
						      	<td class="shop-contactnum">
                                      <?php echo $s->rate;?>
                                </td>
						      	<td>
									<div style="display:flex;justify-content:space-around;align-items:center;">
										<button type="button" class="view-shop" data="<?php echo $s->Ctype_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa fa-eye"></i></span>
										</button>
										<button type="button" class="remove-shop" data="<?php echo $s->Ctype_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa fa-close"></i></span>
										</button>
								   </div>
				        		</td>
						    </tr>
						    <?php }?>  	
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
  <div class="modal fade" id="addComputerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <!-- <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div> -->
		      <div class="modal-body p-4 py-5 p-md-5">
		    		<h3 class="text-center mb-3">Add Computer Shop</h3>
					
					<div class="form-group mb-2">
		      			<label for="name">Computer Type Name</label>
		      			<input name="username" id="comp_name" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Total Units</label>
		      			<input name="username" id="comp_total" type="text" class="form-control">
		      		</div> 
					<div class="form-group mb-2">
		      			<label for="name">Rate</label>
		      			<input name="username" id="comp_rate" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Specifications</label>
		      			<input name="username" id="comp_specs" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Image Upload</label>
		      			<input type="text" id="comp_img" name="lat" placeholder="Your lat.." class="form-control">
		      		</div>
					<div>		
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
					  <input value="Add" class="form-control btn btn-primary rounded submit px-3" id="addcomputertypeBtn">
	              </div>
              </div>
		    </div>
		  </div>
		</div>

	</body>
<!-- script for inserting computer types  -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script>
  $(document).on("click", '#addcomputertypeBtn', function() {
    var shopID = $('#compshop_id').val();
    var name = $('#comp_name').val();
    var total = $('#comp_total').val();
    var rate = $('#comp_rate').val();
    var specs = $('#comp_specs').val();
    var cimage = $('#comp_img').val();
    $.ajax({
          url: "addcomtype/1",
          type: "POST",
          data:{comp_name:name,comp_total:total,comp_rate:rate,comp_specs:specs,comp_img:cimage},
          beforeSend : function()
          {
          alert("processing");
          },
          success: function(data)
          {
             alert(data);   
          }
         });
 });
</script>

</html>