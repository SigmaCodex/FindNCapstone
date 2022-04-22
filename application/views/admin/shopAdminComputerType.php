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
						<span class="text" data-toggle="modal" data-target="#add-description">Add Computer Type</span>
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
									<th>Status</th>
									<th>Action</th>
	
								</tr>
							</thead>
								<tbody>
								<?php foreach ($typelist as $td){?>
									<h1 id="shopid" style="display:none;"><?php echo $td->shop_id_fk;?></h1>
								<tr>
									<td><span class="status pending"><?php echo $td->Ctype_id;?></span></td>
									<td><?php echo $td->name;?></td>
									<td><?php echo $td->total_units;?></td>
									<td>₱<?php echo $td->rate;?></td>
									<td>
										<div class="switch-toggle">
											<label class="switch"><input id="offline-regular" ctypeid="<?php echo $td->Ctype_id;?>" type="checkbox" class="checkbox" <?php if($td->status == "Available"){echo "checked";}?>><span class="slider round"></span>
											</label>
											<p class="offline-regular" id="statusid"><?php echo $td->status;?></p> 
										</div>
									</td>
									<td class="profile">
											<p class="view badge badge-success" id="viewbtn" vtypeid="<?php echo $td->Ctype_id;?>" data-toggle="modal" data-target="#view-description">View</p>
											<!-- <p class="remove badge badge-danger" id="deletebtn" dtypeid="<?php echo $td->Ctype_id;?>">Remove</p> -->
									</td>
										
									</tr>
									<?php }?>
								<!-- <tr>
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
									
								</tr> -->
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
							
		

							<div class="modal-img-holder d-flex flex-column align-items-center justify-content-center">
								<p class="modal-img-holder-caption text-muted"></p>
								<img id="view-upload-preview" class="modal-image"src="assets/images/default_computertype.png" style="border-radius: 10px;">
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
												<p class="modal-caption-details-right" id="type_access"></p> 
												<p class="modal-caption-details-right" id="type-id"></p> 
												<p class="modal-caption-details-right" id="type_units"></p> 
												<p class="modal-caption-details-right" id="type_rate"></p> 
												<!-- <p class="modal-caption-details-right badge badge-danger" style="color: white;">Deactivated</p>  -->
												<p class="modal-caption-details-right badge"  style="color: white;" id="type_status"></p> 
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
												<p class="modal-caption-details-right-long" id="type_cpu"></p> 
												<p class="modal-caption-details-right-long" id="type_acc"></p> 
											</div>
										</div>

										<div class="close-but d-flex align-items-center justify-content-between">
											<a href="#" class="btn-download" data-toggle="modal" data-target="#edit-description">
												<i class='fa fa-pen-to-square'></i>
												<span class="text">Edit Details</span>
											</a>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>			
										</div>
										
										
										
										
										
									</div>
								
							
		
						
						</div>
					</div>
		
					</div>
				</div>
			</div>

			<!-- Modal Add -->
			<div class="modal fade" id="add-description">
				<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
					<div class="modal-content">

					<div class="modal-body">
						<div class="modal-holder ">
							
							<div class="modal-input-title text-left">
								<h4>ADD COMPUTER TYPE</h4>
							</div>
							<form method="post" id="upload_form" enctype="multipart/form-data">
							<div class="modal-img-holder d-flex flex-column align-items-center justify-content-center">
								<p class="modal-img-holder-caption text-muted">*Upload image for service type reference. Allowed extensions: (png, jpg jpeg)</p>
								<img id="upload-preview" class="modal-image"src="assets/images/default_upload.png" style="border-radius: 10px;">
							</div>
									<div class="modal-user-info">
										<div class="input-group mb-3">
											<div class="custom-file">
											  <input type="file" name="imageUpload" class="custom-file-input img_upload" id="inputGroupFile03">
											  <label class="custom-file-label" for="inputGroupFile03"></label>
											</div>
										</div>
										<div class="row ">
											<div class="col-6">
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Access Type:</p> 
													<input name="comp_name"type="text" id="add_type" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="ex. 'Regular'" required>
												</div>
												
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Number of Units:</p> 
													<input name="comp_total" type="number" id="add_units" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
												</div>
												
											</div>
											<div class="col-6 text-left">

												<!-- <div class="modal-input">
													<p class="modal-caption-details-left-input">Service Number:</p> 
												<input type="text" value="2" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
												</div> -->
												
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Price Rate:</p>
													<div class="input-group input-group-sm mb-3">
														<div class="input-group-prepend">
														  <span class="input-group-text" id="inputGroup-sizing-sm" style="font-size: 9px;">PHP</span>
														</div>
														<input name="comp_rate" type="number" id="add_price" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
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
													<input name="comp_cpu" type="text" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> 
												</div>
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Accessories:</p> 
													<textarea name="comp_acc" type="text" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm"></textarea> 
												</div>
												
											</div>
			
										</div>

										<div class="close-but d-flex align-items-center justify-content-between">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											<button type="submit" class="save-modal btn btn-success">ADD</button>
										</div>
								</form>		
							
										
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
								<h4>EDIT COMPUTER TYPE</h4>
							</div>
							<form method="post" id="edit_upload_form" enctype="multipart/form-data">
							<div class="modal-img-holder d-flex flex-column align-items-center justify-content-center">
								<p class="modal-img-holder-caption text-muted">*Upload image for service type reference. Allowed extensions: (png, jpg jpeg)</p>
								<img id="edit_upload-preview" class="modal-image"src="assets/images/default_upload.png" style="border-radius: 10px;">
							</div>
									<div class="modal-user-info">
										<div class="input-group mb-3">
											<div class="custom-file">
											  <input type="file" name="imageUpload" class="custom-file-input img_upload" id="inputGroupFile03">
											  <label class="custom-file-label" for="inputGroupFile03"></label>
											</div>
										</div>
										<div class="row ">
											<div class="col-6">
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Access Type:</p> 
													<input name="comp_name"type="text" id="edit_type_name" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="ex. 'Regular'" required>
												</div>
												
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Number of Units:</p> 
													<input name="comp_total" type="number" id="edit_type_units" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
												</div>
												
											</div>
											<div class="col-6 text-left">

												
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Price Rate:</p>
													<div class="input-group input-group-sm mb-3">
														<div class="input-group-prepend">
														  <span class="input-group-text" id="inputGroup-sizing-sm" style="font-size: 9px;">PHP</span>
														</div>
														<input name="comp_rate" id="edit_type_rate" type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
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
													<input name="comp_cpu" type="text" id="edit_type_cpu" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> 
												</div>
												<div class="modal-input">
													<p class="modal-caption-details-left-input">Accessories:</p> 
													<textarea name="comp_acc" type="text" id="edit_type_acc" class="form-control shadow-none" aria-label="Small" aria-describedby="inputGroup-sizing-sm"></textarea> 
												</div>
												
											</div>
			
										</div>

										<div class="close-but d-flex align-items-center justify-content-between">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											<button type="submit" class="save-modal btn btn-success">UPDATE</button>
										</div>
								</form>		
							
										
								</div>

						</div>

					</div>
					</div>
				</div>
			</div>


		</section>
	</div>
		
	</body>
</html>	
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<!-- 
<script src="assets/js/shopAdminComputerType.js"></script> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	$(document).on("change", '.checkbox', function() {
		var Base_URL = "<?php echo base_url();?>";
		var type_id = $(this).attr("ctypeid"); 
		var switchStatus = false;
		var stat = "";
    if ($(this).is(':checked')) {
		stat="Available";
		// alert(stat);// To verify
    	}
    else {
		stat="Unavailable";
    // alert(stat);// To verify
    }
	$.ajax({
          url: Base_URL+"updateCompTypeStat/"+type_id,
          type: "POST",
          data:{status:stat},
          success: function(data)
          {
			swal("Computer Type Status Updated!", {
    					  		icon: "success",
    						}).then((value) => {
						  		window.location = Base_URL+"shopAdminComputerType";
						}); 
          }
         });
});
</script>
<script>
	
	$(document).on("click", "#viewbtn", function(){
	var BASE_URL = "<?php echo base_url();?>";
    var type_id = $(this).attr("vtypeid"); 
        $.ajax({
					url: BASE_URL+"getCompTypeInfo/"+type_id,
					type: "GET",
                    cache: false,
                    async: false,
					success: function(data){
                           var result = JSON.parse(data);
                            for(var x = 0 ; x < result.length ; x ++)
                            {
                                $("#type_name").text(result[x]['name']);
                                $("#type-id").text(result[x]['Ctype_id']);
								$("#type_access").text(result[x]['name']);
                                $("#type_units").text(result[x]['total_units']);
                                $("#type_rate").text("₱"+result[x]['rate']);
								$("#type_status").text(result[x]['status']);
								$("#view-upload-preview").attr("src","assets/upload/shop/computertype/"+result[x]['comp_type_img']);
								var specs_text = result[x]['specs'];
								var specs_arr = specs_text.split(",");
								$("#type_cpu").text(specs_arr[0]);
								$("#type_acc").text(specs_arr[1]);
                                if(result[x]['status'] == "Available"){
                                    $("#type_status").removeClass("badge-danger");
                                    $("#type_status").addClass("badge-success");
                                }
                                else if(result[x]['status'] == "Unavailable"){
                                    $("#type_status").addClass("badge-danger");
                                    $("#type_status").removeClass("badge-success");
                                }
                                $(".editdata_id").text(result[x]['Ctype_id']);
                            }
                    }
        
                });
				// end of populating data 
	 });
	 
</script>
<script>
	$(document).on("click", ".btn-download", function(){
	var BASE_URL = "<?php echo base_url();?>";
	var type_id = $("#type-id").text();
        $.ajax({
					url: BASE_URL+"getCompTypeInfo/"+type_id,
					type: "GET",
                    cache: false,
                    async: false,
					success: function(data){
                           var result = JSON.parse(data);
                            for(var x = 0 ; x < result.length ; x ++)
                            {
                                $("#edit_type_name").val(result[x]['name']);
                                $("#edit_type_units").val(result[x]['total_units']);
                                $("#edit_type_rate").val(result[x]['rate']);
								var specs_text = result[x]['specs'];
								var specs_arr = specs_text.split(",");
								$("#edit_type_cpu").val(specs_arr[0]);
								$("#edit_type_acc").val(specs_arr[1]);
								$("#edit_upload-preview").removeAttr("src");
                                $("#edit_upload-preview").attr("src","assets/upload/shop/computertype/"+result[x]['comp_type_img']);
                            }
                    }
                });	
	$('#edit_upload_form').on('submit', function(e){  
        var type_id = $("#type-id").text();
        var BASE_URL = "<?php echo base_url();?>";
           e.preventDefault();  
                $.ajax({  
                     url: BASE_URL+"updateCompType/"+type_id,   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
						swal("Computer Type has been updated!", {
    					  		icon: "success",
    						}).then((value) => {
						  		window.location = BASE_URL+"shopAdminComputerType";
							});
                     }  
                });  
             
      });
	 }); 
</script>
<script>
$(document).on("click", "#deletebtn", function () {
    var BASE_URL = "<?php echo base_url();?>";
    var type_id = $(this).attr("dtypeid"); 
	$.ajax({
						url: BASE_URL+"deleteComputerType/"+type_id,
						method: "POST",
						data: { Ctype_id: type_id},
						success: function (data) {
							swal("Computer Type has been deleted!", {
    					  		icon: "success",
    						}).then((value) => {
						  		window.location = BASE_URL+"shopAdminComputerType";
							});

						},
					});	
 });
 </script>
	<script>
		$(document).ready(function(){
			var preview = $("#upload-preview");

			$(".img_upload").change(function(event){
			var input = $(event.currentTarget);
			var file = input[0].files[0];
			var reader = new FileReader();
			reader.onload = function(e){
				image_base64 = e.target.result;
				preview.attr("src", image_base64);
			};
			reader.readAsDataURL(file);
			});
		});
	</script>
<script>
		$(document).ready(function(){
			var preview = $("#edit_upload-preview");

			$(".img_upload").change(function(event){
			var input = $(event.currentTarget);
			var file = input[0].files[0];
			var reader = new FileReader();
			reader.onload = function(e){
				image_base64 = e.target.result;
				preview.attr("src", image_base64);
			};
			reader.readAsDataURL(file);
			});
		});
	</script>
<script>  
	$(document).ready(function(){  
		$('#upload_form').on('submit', function(e){  
			var shopID = $('#shopid').text();
			var BASE_URL = "<?php echo base_url();?>";

			e.preventDefault();  
					$.ajax({  
						url: BASE_URL+"addcomtype/"+shopID,   
						method:"POST",  
						data:new FormData(this),  
						contentType: false,  
						cache: false,  
						processData:false,  
						success:function(data)  
						{  
							swal("Computer Type is successfully added!", {
									icon: "success",
								}).then((value) => {
									window.location = BASE_URL+"shopAdminComputerType";
							}); 
						}  
					});  
				
		});  
	});  
 </script>
 <!-- <script>
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

</script> -->
<!-- <script>
	function validateForm() {
		let x = document.forms["upload_form"]["add_type"].value;

			if (x == "") {
			alert("Name must be filled out");
			return false;
			}
			if(x!=""){
				$(document).ready(function(){  
      		$('#upload_form').on('submit', function(e){  
        		var shopID = $('#shopid').text();
        		var BASE_URL = "<?php echo base_url();?>";
        		e.preventDefault();  
                $.ajax({  
                     url: BASE_URL+"addcomtype/"+shopID,   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                        swal("Computer Type is successfully added!", {
    					  		icon: "success",
    						}).then((value) => {
						  		window.location = BASE_URL+"shopAdminComputerType";
						}); 
                     }  
                });  
             
      });  
 });  
			}
	}
</script> -->