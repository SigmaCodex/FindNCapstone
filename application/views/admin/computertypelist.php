<!doctype html>
<html lang="en">
  <head>
  	<title>List of Computer Types of Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
 	<link rel="stylesheet" href="../assets/css/ionicons.min.css">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../assets/admin/vendor/jquery/jquery.min.js"></script>
  	<script src="../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  	<!-- <script src="assets/js/adminlist.js"></script> -->
  	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/typetoggle.css">
	<style>
.file-upload {
  background-color: #ffffff;
  width: 400px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
</style>

	</head>
	<body>
		<h1 id="compshop_id"><?php if(isset($shopid)){echo $shopid;}?></h1>
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
							  <th>Status</th>
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
						    	<td class="type-name">
						    			<?php echo $s->name;?>	
						    	</td>
						    	<td class="type-total">
										<?php echo $s->total_units;?>	
						      	</td>
						      	<td class="type-rate">
                                      <?php echo $s->rate;?>
                                </td>
								<td class="type-status">
								<div class="toggle-button-cover">
								<div class="button-cover">
									<div class="button b2" id="button-16">
									<input ctypeid="<?php echo $s->Ctype_id;?>" type="checkbox" class="checkbox"<?php if($s->status == "Unavailable"){echo "checked";}?>/>
									<div class="knobs"></div>
									<div class="layer"></div>
									</div>
								</div>
								</div>
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
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
			  <form method="post" id="upload_form" enctype="multipart/form-data"> 
		      <div class="modal-body p-4 py-5 p-md-5">
		    		<h3 class="text-center mb-3">Add Computer Shop</h3>
					
					<div class="form-group mb-2">
		      			<label for="name">Computer Type Name</label>
		      			<input name="comp_name" id="comp_name" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Total Units</label>
		      			<input name="comp_total" id="comp_total" type="text" class="form-control">
		      		</div> 
					<div class="form-group mb-2">
		      			<label for="name">Rate</label>
		      			<input name="comp_rate" id="comp_rate" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Specifications</label>
		      			<textarea name="comp_specs" id="comp_specs" type="text" class="form-control"></textarea>
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Image Upload</label>
		      			<div class="row file-upload">
					<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

					<div class="image-upload-wrap">
						<input class="file-upload-input" name="imageUpload" type='file' onchange="readURL(this);"/>
						<div class="drag-text">
						<h3>Drag and drop a file or select add Image</h3>
						</div>
					</div>
					<div class="file-upload-content">
						<img class="file-upload-image" src="#" alt="your image" />
						<div class="image-title-wrap">
						<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
						</div>
					</div>

					</div>
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
					  <input value="Add" type="submit" class="form-control btn btn-primary rounded submit px-3" id="addcomputertypeBtn">
	              </div>
              </div>
						  </form>
		    </div>
		  </div>
		</div>
	</body>
<!-- script for inserting computer types  -->
<script>
//   $(document).on("click", '#addcomputertypeBtn', function() {
// 	var Base_URL = "<?php echo base_url();?>";
//     var shopID = $('#compshop_id').text();
//     var name = $('#comp_name').val();
//     var total = $('#comp_total').val();
//     var rate = $('#comp_rate').val();
//     var specs = $('#comp_specs').val();

//     $.ajax({
//           url: Base_URL+"addcomtype/"+shopID,
//           type: "POST",
//           data:{comp_name:name,comp_total:total,comp_rate:rate,comp_specs:specs,comp_img:cimage},
//           success: function(data)
//           {
//             location.reload(); 
//           }
//          });
//  });
</script>
<script>
	$(document).on("change", '.checkbox', function() {
		var Base_URL = "<?php echo base_url();?>";
		var type_id = $(this).attr("ctypeid"); 
		var switchStatus = false;
		var stat = "";
    if ($(this).is(':checked')) {
		stat="Unavailable";
		// alert(status);// To verify
    	}
    else {
	   stat="Available";
    //    alert(status);// To verify
    }
	$.ajax({
          url: Base_URL+"updateCompTypeStat/"+type_id,
          type: "POST",
          data:{status:stat},
          success: function(data)
          {
             alert("Status Updated!");   
          }
         });
});

</script>
<!-- script for viewing details of a computer type -->
<script>
		$(document).on("click",".view-shop",function(){
			var Base_URL = "<?php echo base_url();?>";
			var id = $(this).attr("data");

			window.location = Base_URL+"shopadmin-comptypeinfo/" + id;
			
		});
</script>
<script>
		$(document).on("click",".remove-shop",function(){
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
						url: BASE_URL+"deleteComputerType/" + id,
						method: "POST",
						data: { Ctype_id: id },
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
 <script>  
 $(document).ready(function(){  
      $('#upload_form').on('submit', function(e){  
        var shopID = $('#compshop_id').text();
        var BASE_URL = "<?php echo base_url();?>";
           e.preventDefault();  
            alert("processing");
                $.ajax({  
                     url: BASE_URL+"addcomtype/"+shopID,   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         alert(data);
                        //  location.reload(); 
                     }  
                });  
             
      });  
 });  
 </script>
 <script>
    function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

</script>