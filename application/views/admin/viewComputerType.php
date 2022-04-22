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
  	<script src="../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>


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
	  <form method="post" id="upload_form" enctype="multipart/form-data"> 
					<div class="form-group mb-2">
		      			<label for="name">Computer Type Name:</label>
		      			<input name="comp_name" id="shopName" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Total Units:</label>
		      			<input  name="comp_total" id="c_number" type="text" class="form-control">
		      		</div> 
					<div class="form-group mb-2">
		      			<label for="name">Rate:</label>
		      			<input name="comp_rate" id="emailadd" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Specs:</label>
		      			<input name="comp_specs" id="AddressIN" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Computer Type Image:</label>
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
			    <div class="geocoder"><div id="geocoder" ></div></div>
				<div id="map"></div>
				<div class="modal-footer">
                	<div class="form-group mb-2">
					 	<button type="button" id="close-updatebtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3"  readonly="readonly">
		        		</button>
	              	</div>
                	<div class="form-group mb-2">
					  <input value="Update" type="submit" class="form-control btn btn-primary rounded submit px-3" id="updatecomputertypebtn" readonly="readonly">
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
//   $(document).on("click", '#updatecomputertypebtn', function() {
//     var BASE_URL = "<?php echo base_url();?>";
//     var type_ID = $('#CompShopPK').text();
//     var name = $('#shopName').val();
//     var total = $('#c_number').val();
//     var rate = $('#emailadd').val();
//     var specs = $('#AddressIN').val();
//     var cimage = $('#lat').val();
//     $.ajax({
//           url:BASE_URL+"updateCompType/"+type_ID,
//           type: "POST",
//           data:{comp_name:name,comp_total:total,comp_rate:rate,comp_specs:specs,comp_img:cimage},
//           beforeSend : function()
//           {
//           alert("processing");
//           },
//           success: function(data)
//           {
//             location.reload();   
//           }
//          });
//  });
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
        var type_ID = $('#CompShopPK').text();
        var BASE_URL = "<?php echo base_url();?>";
           e.preventDefault();  
            alert("processing");
                $.ajax({  
                     url: BASE_URL+"updateCompType/"+type_ID,   
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