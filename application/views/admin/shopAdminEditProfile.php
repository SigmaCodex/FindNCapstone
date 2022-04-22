<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/shopAdminEditProfile.css">

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />

	<title>Shop Admin Edit Profile</title>
    <style>
        /* Profile CSS */
.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 0px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  background-image: linear-gradient(45deg, #f83f0b,#e09e1a);
  background-size: 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  -webkit-text-fill-color: transparent; 
  -moz-text-fill-color: transparent;
  text-decoration: none;
  position: absolute;
  top: 5px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #eea264;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

/* for map */
    #map {
        height: 100%;
	}
	#map { position:relative;height:400px ;width:100%; }

    .geocoder {
            position:relative;

    }
	.marker {
	  background-image: url('assets/images/marker.png');

	  background-size: cover;
	  width: 50px;
	  height: 50px;
	  border-radius: 50%;
	  cursor: pointer;
	}
	.mapboxgl-popup {
  		max-width: 200px;
	}

	.mapboxgl-popup-content {
	  text-align: center;
	  font-family: 'Open Sans', sans-serif;
	}

    /* #editmap {
        height: 100%; width:100%;
		} */
		#editmap { position:relative;height:550px ;width:100%; }
       
    </style>
</head>
<body>

	<!-- CONTENT -->
	<div class="container mt-5">
		<section id="content">

			<!-- MAIN -->
			<main>
				<div class="head-title">
                        <div class="left">
                            <h1>Edit Shop Profile</h1>
                        </div>
					<a href="shopAdminComputerType" class="btn-view">
						<i class='bx bxs-keyboard'></i>
						<span class="text">Computer Type</span>
					</a>
				</div>

                <p class="edit-desc py-4">The profile information section is the most essential aspect in the profile editing area. Don't overlook this section when adding shop information, and you should thoroughly fill out all relevant sections and adhere to the profile terms and conditions.</p>

                <div class="choices d-flex align-items-center justify-content-start">
                    <div class="overview active-menu" data-target-tab="#overview">
                        <h6 style="color: #FF5D31; font-weight: 600;" >Overview</h6>
                    </div>
                    <div class="edit-profile d-flex align-items-center"  data-target-tab="#edit">
                        <i class='bx bx-edit-alt' style="padding-right: 5px; color: #FF5D31;"></i>
                        <h6 style="color: #FF5D31; font-weight: 600;">Edit Profile</h6>
                    </div>
                </div>
                

            <?php foreach($shop_details as $data){?>
          
                <div class="overview-title-img">
                    <div class="profile-pic d-flex flex-column align-items-center justify-content-center" >
                        <img class="profile-pic-img" src="assets/upload/shop/<?php echo $data->shop_img_icon?>" onerror="this.src='assets/upload/shop/defaultshopimg.png';" alt="" >
                        <h5 class="profile-pic-name"><?php echo $data->shop_name?></h5>
                    </div>
                </div>


                <div class="content-details active row py-4"  id="overview">
                    <div class="col-lg-6 col-md-12">

                        <div class="row">
                            <div class="col-4 text-description text-left">
                                <h6>Opening Days</h6>
                                <p><?php echo $data->operating_days?></p>
                            </div>
                            <div class="col-4 text-description text-center">
                                <h6>Opening Hours</h6>
                                <p><?php echo $data->operating_hours?></p>
                            </div>
                            <div class="col-4 text-description text-center">
                                <h6>Internet Speed</h6>
                                <p><?php echo $data->net_speed?> mbps</p>
                            </div>
                        </div>

                        <div class="row py-4">
                            <div class="col-12 text-description">
                                    <h5>Description:</h6>
                                    <p class="desc-text"><?php echo $data->description?></p> 
                            </div>
                        </div>
                        
                        <div class="row py-2">
                            <div class="col-6 text-description text-left">
                                <h6>Phone Number</h6>
                                <p>+63<?php echo $data->contact_number?></p>
                            </div>
                            <div class="col-6 text-description text-center">
                                <h6>Telephone Number</h6>
                                <p>(032) <?php echo $data->tel_number?></p>
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-6 text-description text-left">
                                <h6>Address</h6>
                                <p><?php echo $data->address?></p>
                            </div>
                            <div class="col-6 text-description text-left">
                                <h6>Email Address</h6>
                                <p><?php echo $data->email_address?></p>
                            </div>
                        </div>
                    <?php }?>        
                        

                        <div class="row">
                            <div class="col-12 text-description text-left">
                                <h6>Computer Access Type</h6>

                                <div class="boxes d-flex align-items-center justify-content-around">
                                    
                                    <?php foreach($computer_details as $data2){?>
                                    <div class="boxes-card">
                                        <h5><?php echo $data2->name?></h5>
                                    </div>
                                    <?php }?>
                                </div>
                                


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        
                        <div class="shop-img-preview">
                            <div class = "shop-imgs">
                            
                                <div class = "img-display">
                                  <div class = "img-showcase">
                                    <?php 
                                    $numimages= 0;
                                     foreach($shopimages as $images){ $numimages++;?>
                                       
                                        <img src = "assets/upload/shop/<?php echo $images->img_file?>">
                                    <?php }?>
                                  </div>
                                </div>
                                <div class = "img-select">
                                        <?php 
                                              $counter = 0;
                                                if($numimages<1){  
                                                    echo "
                                                    <div class = 'img-item'>
                                                        <a href = '#'>
                                                        <img src = 'assets/upload/shop/defaultshopimg.png'>
                                                        </a>
                                                    </div>";
                                                 }
                                                foreach($shopimages as $images2){
                                                $counter++;
                                        ?>
                                            <div class = "img-item">
                                                <a href = "#" data-id = "<?php echo $counter;?>">
                                                <img src = "assets/upload/shop/<?php echo $images2->img_file?>">
                                                </a>
                                            </div>

                                         <?php }?>
                                </div>
                            
                              
                            </div>            
                        </div>

                        <div class="table-data">
                            <div class="order">
                                <div class="text-description text-left py-2">
                                    <h6>Shop Location Coordinates:</h6>
                                </div>
                                <div class="map-location d-flex align-items-center justify-content-center">
                                    <div id="map"></div>
                                </div>
                             </div>
                        </div>

                    </div>  
                </div>
<!-- ========================Update Section================================ -->
    <?php foreach($shop_details as $data){?>
        <form method="post" id="updateShop" enctype="multipart/form-data">    
                    <!--img logo update    -->
                <div class="image-logo-update d-none">
                    <div class="profile-pic d-flex flex-column align-items-center justify-content-center" >
                        
                    <div class="avatar-upload col-md-6 pt-md-0 pt-3">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" name="shop_iconimageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="iconimagePreview" style="background-image: url(assets/upload/shop/<?php echo $data->shop_img_icon?>);" ></div>
                        </div>
                    </div>

                        <h5 class="profile-pic-name"><?php echo $data->shop_name?></h5>
                    </div>

                </div>
                <!--end img logo update -->
                <div class="content-details row py-4"  id="edit">
                    <div class="col-lg-6 col-md-12">
                    
                        <div class="row">
                            <div class="col-4 text-description text-left">
                                <h6>Opening Days</h6>

                                 <!-- Dropdown Days Start-->
                                <div class="d-flex flex-column " >
                                    <?php 
                                         
                                         $day_arr = explode ("-", $data->operating_days);
                                    ?>
                                    <select name="day_start" class="form-control form-control-sm mb-2">
                                        <option hidden selected disabled>Start</option>
                                        <option value="Monday" <?php if($day_arr[0]=="Monday"){echo "selected";}?>>Monday</option>
                                        <option value="Tuesday" <?php if($day_arr[0]=="Tuesday"){echo "selected";}?>>Tuesday</option>
                                        <option value="Wednesday" <?php if($day_arr[0]=="Wednesday"){echo "selected";}?>>Wednesday</option>
                                        <option value="Thursday" <?php if($day_arr[0]=="Thursday"){echo "selected";}?>>Thursday</option>
                                        <option value="Friday" <?php if($day_arr[0]=="Friday"){echo "selected";}?>>Friday</option>
                                        <option value="Saturday" <?php if($day_arr[0]=="Saturday"){echo "selected";}?>>Saturday</option>
                                        <option value="Sunday" <?php if($day_arr[0]=="Sunday"){echo "selected";}?>>Sunday</option>
                                    </select>
    
                                    <select name="day_end" class="form-control form-control-sm" aria-placeholder="heade">
                                        <option hidden selected disabled>End</option>
                                        <option value="Monday" <?php if($day_arr[1]=="Monday"){echo "selected";}?>>Monday</option>
                                        <option value="Tuesday" <?php if($day_arr[1]=="Tuesday"){echo "selected";}?>>Tuesday</option>
                                        <option value="Wednesday" <?php if($day_arr[1]=="Wednesday"){echo "selected";}?>>Wednesday</option>
                                        <option value="Thursday"  <?php if($day_arr[1]=="Thursday"){echo "selected";}?>>Thursday</option>
                                        <option value="Friday" <?php if($day_arr[1]=="Friday"){echo "selected";}?>>Friday</option>
                                        <option value="Saturday" <?php if($day_arr[1]=="Saturday"){echo "selected";}?>>Saturday</option>
                                        <option value="Sunday" <?php if($day_arr[1]=="Sunday"){echo "selected";}?>>Sunday</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center justify-content-center">
                                    <!-- <input type="checkbox"> -->
                                    <p class="text-muted m-0 pl-4 justify-content-center" style="font-size: 15px;"><?php echo $data->operating_days?> </p>
                                </div>

                            </div>
                            <div class="col-4 text-description text-center">
                            <h6>Opening Hours</h6>
                                <?php 
                                    $time_arr = explode ("-", $data->operating_hours);
                                    $timestart_in_24_hour_format = date("H:i", strtotime($time_arr[0]));
                                    $timeend_in_24_hour_format = date("H:i", strtotime($time_arr[1]));
                                ?>
                                
                                <?php  ?>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <label class="time-label-open" for="appt">Open</label>
                                    <input type="time" id="" name="time_start" value="<?php echo $timestart_in_24_hour_format;?>:00"  max="12:00" >
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <label class="time-label-close" for="appt">Close</label>
                                    <input type="time" id="" value="<?php echo $timeend_in_24_hour_format;?>:00"  name="time_end">
                                </div>
                                <hr>
                                <div class="d-flex align-items-center justify-content-center">
                                    <!-- <input type="checkbox"> -->
                                    <p class="text-muted m-0 pl-4" style="font-size: 15px;"><?php echo $data->operating_hours?></p>
                                </div>  
                                
                            </div>
                            <div class="col-4 text-description text-center">
                                <h6>Internet Speed</h6>

                                <div class="input-group input-group-sm mb-2">
                                    <input type="number" name="net_speed" class="form-control text-right" value="<?php echo $data->net_speed?>" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                      <span class="input-group-text" id="basic-addon2">mbps</span>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="row py-4">
                            <div class="col-12 text-description">
                                    <h5>Description:</h6>
                                   <textarea name="description"  class="text-area-details w-100"><?php echo $data->description?></textarea>
                            </div>
                        </div>
                        
                        <div class="row py-2">
                            <div class="col-6 text-description text-left">
                                <h6>Phone Number</h6>
                                
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm">+63</span>
                                    </div>
                                    <input type="number" name="p_num" value="<?php echo $data->contact_number?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                            </div>
                            <div class="col-6 text-description text-center">
                                <h6>Telephone Number</h6>
                                
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm">(032)</span>
                                    </div>
                                    <input type="text" name="tel_num" value="<?php echo $data->tel_number?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-9 text-description text-left">
                                <h6>Emai Address</h6>
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class='bx bx-envelope'></i></span>
                                    </div>
                                    <input type="text" name="email" value="<?php echo $data->email_address?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="col-9 text-description text-left">
                                <h6>Address</h6>
                                
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class='bx bx-home-circle'></i></span>
                                    </div>
                                    <input type="text" name="address" value="<?php echo $data->address?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                  

                            <div class="col-6 text-description text-left">
                                <h6>Latitude</h6>
                                <?php  $string = $data->coordinates;
                                       $str_arr = explode (",", $string); 
                                ?>
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class='bx bx-current-location'></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="latitude" value="<?php echo $str_arr[1];?>" placeholder="Latitude"  id="lng" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>    
                            <div class="col-6 text-description text-left">
                            <h6>Longtitude</h6>
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class='bx bx-current-location'></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="longtitude" value="<?php echo $str_arr[0];?>" placeholder="Longtitude" id="lat"  aria-label="Small" aria-describedby="inputGroup-sizing-sm " >
                                </div>
                            </div>

                        </div>
                        
    
    <?php }?>

                        <div class="row">
                            <div class="col-12 text-description text-left">
                                
                                <button class="btn btn-primary mr-3">Save Changes</button>
                            </div>
                        </div>
                    </div>
        </form>            


                    <div class="col-lg-6 col-md-12">
                        
                        <div class="shop-img-preview">
                            <div class = "shop-imgs">

                                <div class = "img-display">
                                  <div class = "img-showcase">
                                    <img src = "assets/images/upload.png" >
                                    <img src = "assets/images/upload.png" >
                                    <img src = "assets/images/upload.png" >
                                    <img src = "assets/images/upload.png" >
                                  </div>
                                </div>

                                <div class = "img-select">
                                  <!-- <div class = "img-item">
                                    <a href = "#" data-id = "1">
                                      <img src = "assets/images/upload.png" class="wrap-image" id="imageDisplay1" onclick="chooseImages()" onchange="displayImage(this)">
                                    </a>
                                  </div> -->
                                  <div class = "img-item">
                                    <a href = "#" data-id = "2">
                                      <img src = "assets/images/upload.png"  class="wrap-image" id="imageDisplay2" onclick="chooseImage()" onchange="displayImage(this)">
                                    </a>
                                  </div>
                                  <div class = "img-item">
                                    <a href = "#" data-id = "3">
                                      <img src = "assets/images/upload.png" class="wrap-image" id="imageDisplay3" onclick="chooseImage()" onchange="displayImage(this)">
                                    </a>
                                  </div>
                                  <div class = "img-item">
                                    <a href = "#" data-id = "4">
                                      <img src = "assets/images/upload.png" class="wrap-image" id="imageDisplay4" onclick="chooseImage()" onchange="displayImage(this)">
                                    </a>
                                  </div>
                                </div>

                            </div>
                             <br>
                            <input type="file" name="uploadImage" id="uploadImage">
                            <button class="btn btn-success">Upload Img</button>
                        </div>


                        <div class="table-data">
                            <div class="order">
                                <div class="text-description text-left py-2">
                                    <h6>Map:</h6>
                                    <div class="geocoder"><div id="geocoder"></div></div>
                                </div>
                                <div class="map-location d-flex align-items-center justify-content-center">
                                    <!-- <div class="geocoder"><div id="geocoder" ></div></div> -->
                                   <!-- // <div class="geocoder"><div id="geocoder"></div></div> -->
                             
                                    <div id="editmap"></div>
                                </div>
                                </div>
                        </div>
                    </div>  

                </div>
				
			</main>
			<!-- MAIN -->
		</section>
	</div>
		
	<!-- CONTENT -->

	<script src="assets/js/shopAdminEditProfile.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
//section menu 
$(document).on('click','.overview',function(){ 
    $(this).addClass('active-menu');
    $(".edit-profile").removeClass('active-menu');
    $(".overview-title-img").show();
    $(".image-logo-update").addClass('d-none');
   
});
$(document).on('click','.edit-profile',function(){ 
    $(this).addClass('active-menu');
    $(".overview").removeClass('active-menu');
    $(".overview-title-img").hide();
    $(".image-logo-update").removeClass('d-none');
});

</script>

<script>

    $('#updateShop').on('submit', function(e){  
           e.preventDefault();  
            // alert("processing");
            // myValidator();
            // if(checkValidation()&&BDateValidator()){
                $.ajax({  
                     url:"updateComputerDetails",   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                        //  alert(data);
                        swal({
                            title: "Shop Updated",
                            text: "",
                            icon: "success",
                            button: "Continue",
                            }).then((value) => {
                                    location.reload();
                            }); 
                    }  
                });  
            // }       
      }); 
</script>



<!-- imgUpload and preview -->
<script>
        function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#iconimagePreview').css('background-image', 'url('+e.target.result +')');
                        $('#iconimagePreview').hide();
                        $('#iconimagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function() {
                readURL(this);
            });
        </script>
</body>
</html>
<!-- map for overview -->
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZG5rbzEzIiwiYSI6ImNrbWZxNWl5eDM3amcyeGp4cHRvN3pxdGgifQ.HM7QZISQcECRgm9aKAZysg';
<?php foreach ($shop_details as $s) {

  
// $str_arr = explode (",", $s->coordinates); 
// $newCoordinate = $str_arr[1].","$str_arr[0];
 $string = $s->coordinates;
 $str_arr = explode (",", $string); ?>
var map = new mapboxgl.Map({
        style: 'mapbox://styles/mapbox/streets-v10',
        center: [<?php echo $str_arr[1];?>, <?php echo $str_arr[0];?>],
        zoom: 15.5,
        pitch: 45,
        bearing: -17.6,
        container: 'map',
        antialias: true
});


var geojson = {
  type: 'FeatureCollection',
  features: [

//star of loop



<?php 

   
    //  $coor = .","print_r($str_arr[1]);
  echo "{
      type: 'Feature',
       geometry: {
        coordinates: [".$str_arr[1].",".$str_arr[0]."]
     },
      properties: {
        title: '".$s->shop_name."',
        description: '<strong>".$s->Shop_Status."</strong><p><a href= ".'"shopAdminEditProfile"'."        class=".'"btn btn-primary"'.">View Shop Profile</a></p>'
      }
     },";

    }
?>


  ]

};

// code from the next step will go here!

// add markers to map
geojson.features.forEach(function(marker) {

  // create a HTML element for each feature
  var el = document.createElement('div');
  el.className = 'marker';

  // make a marker for each feature and add to the map
  new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
    .addTo(map);
});

</script>



<script>
<?php foreach ($shop_details as $s) {

 $string = $s->coordinates;
 $str_arr = explode (",", $string);
    
 }?>
      
        var long = <?php echo $str_arr[1];?>;
		var lang =  <?php echo $str_arr[0];?>;
        var user_location = [long, lang ];
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG5rbzEzIiwiYSI6ImNrbWZxNWl5eDM3amcyeGp4cHRvN3pxdGgifQ.HM7QZISQcECRgm9aKAZysg';
        var map = new mapboxgl.Map({
            container: 'editmap',
            style: 'mapbox://styles/mapbox/streets-v10',
            center: user_location,
            zoom: 15.5,
            // pitch: 905,
            // bearing: -10.6,
            antialias: true
        });
 
        //  geocoder here
        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            // limit results to Australia
            country: 'PH',
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


        function onDragEnd() {
            var lngLat = marker.getLngLat();
            document.getElementById("lat").value = lngLat.lat;
            document.getElementById("lng").value = lngLat.lng;
            console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);
        }

        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
</script>