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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<title>Shop Admin Edit Profile</title>
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
					<a href="#" class="btn-view">
						<i class='bx bxs-plus-circle' ></i>
						<span class="text">Add Computer Type</span>
					</a>
				</div>

                <p class="edit-desc py-4">The profile information section is the most essential aspect in the profile editing area. Don't overlook this section when adding shop information, and you should thoroughly fill out all relevant sections and adhere to the profile terms and conditions.</p>

                <div class="choices d-flex align-items-center justify-content-start">
                    <div class="overview active-menu" data-target-tab="#overview">
                        <h6 style="color: #FF5D31; font-weight: 600;" >Overview</h6>
                    </div>
                    <div class="edit-profile active-menu d-flex align-items-center"  data-target-tab="#edit">
                        <i class='bx bx-edit-alt' style="padding-right: 5px; color: #FF5D31;"></i>
                        <h6 style="color: #FF5D31; font-weight: 600;">Edit Profile</h6>
                    </div>
                </div>
                
                <div class="profile-pic d-flex flex-column align-items-center justify-content-center">
                    <img class="profile-pic-img" src="assets/images/Image1.png" alt="">
                    <h5 class="profile-pic-name">TNC CYBERCAFE CEBU HQ</h5>
                </div>


                <div class="content-details active row py-4"  id="overview">
                    <div class="col-lg-6 col-md-12">

                        <div class="row">
                            <div class="col-4 text-description text-left">
                                <h6>Opening Days</h6>
                                <p>Monday - Friday</p>
                            </div>
                            <div class="col-4 text-description text-center">
                                <h6>Opening Hours</h6>
                                <p>24 hours</p>
                            </div>
                            <div class="col-4 text-description text-center">
                                <h6>Internet Speed</h6>
                                <p>1000 mbps</p>
                            </div>
                        </div>

                        <div class="row py-4">
                            <div class="col-12 text-description">
                                    <h5>Description:</h6>
                                    <p class="desc-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
                            </div>
                        </div>
                        
                        <div class="row py-2">
                            <div class="col-6 text-description text-left">
                                <h6>Phone Number</h6>
                                <p>+639273847658</p>
                            </div>
                            <div class="col-6 text-description text-center">
                                <h6>Telephone Number</h6>
                                <p>(032) 437-8576</p>
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-6 text-description text-left">
                                <h6>Address</h6>
                                <p>II Pelaez St. Brgy. Kalubihan Cebu City</p>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-12 text-description text-left">
                                <h6>Computer Access Type</h6>

                                <div class="boxes d-flex align-items-center justify-content-around">
                                    
                                    <div class="boxes-card">
                                        <h5>VIP</h5>
                                    </div>

                                    <div class="boxes-card">
                                        <h5>Regular</h5>
                                    </div>
                                    
                                    <div class="boxes-card">
                                        <h5>Super VIP</h5>
                                    </div>

                                </div>
                                


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        
                        <div class="shop-img-preview">
                            <div class = "shop-imgs">

                                <div class = "img-display">
                                  <div class = "img-showcase">
                                    <img src = "assets/images/TNC-1.jpg">
                                    <img src = "assets/images/TNC-2.jpg">
                                    <img src = "assets/images/TNC-3.jpg">
                                    <img src = "assets/images/TNC-4.jpeg">
                                  </div>
                                </div>
                                <div class = "img-select">
                                  <div class = "img-item">
                                    <a href = "#" data-id = "1">
                                      <img src = "assets/images/TNC-1.jpg">
                                    </a>
                                  </div>
                                  <div class = "img-item">
                                    <a href = "#" data-id = "2">
                                      <img src = "assets/images/TNC-2.jpg">
                                    </a>
                                  </div>
                                  <div class = "img-item">
                                    <a href = "#" data-id = "3">
                                      <img src = "assets/images/TNC-3.jpg">
                                    </a>
                                  </div>
                                  <div class = "img-item">
                                    <a href = "#" data-id = "4">
                                      <img src = "assets/images/TNC-4.jpeg">
                                    </a>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="table-data">
                            <div class="order">
                                <div class="text-description text-left py-2">
                                    <h6>Shop Location Coordinates:</h6>
                                </div>
                                <div class="map-location d-flex align-items-center justify-content-center">
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1962.7754870953547!2d123.89757386099087!3d10.297716817573397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99909fa641ea7%3A0x28868e53470c0c75!2sTNC%20CEBU%20HQ!5e0!3m2!1sen!2sph!4v1649999691702!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                                </div>
                                </div>
                        </div>
                    </div>  
                </div>

                <div class="content-details row py-4"  id="edit">
                    <div class="col-lg-6 col-md-12">

                        <div class="row">
                            <div class="col-4 text-description text-left">
                                <h6>Opening Days</h6>

                                 <!-- Dropdown Days Start-->
                                <div class="d-flex flex-column " >
                                    <select class="form-control form-control-sm mb-2">
                                        <option hidden selected disabled>Start</option>
                                        <option >Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                        <option>Sunday</option>
                                    </select>
    
                                    <select class="form-control form-control-sm" aria-placeholder="heade">
                                        <option hidden selected disabled>End</option>
                                        <option >Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                        <option>Sunday</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-4 text-description text-center">
                                <h6>Opening Hours</h6>

                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <label class="time-label-open" for="appt">Open</label>
                                    <input type="time" id="appt" name="appt" min="09:00" max="18:00" >
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <label class="time-label-close" for="appt">Close</label>
                                    <input type="time" id="appt" name="appt" min="09:00" max="18:00" >
                                </div>
                                <hr>
                                <div class="d-flex align-items-center justify-content-center">
                                    <input type="checkbox">
                                    <p class="text-muted m-0 pl-4" style="font-size: 15px;"> 24 Hours</p>
                                </div>  
                                
                            </div>
                            <div class="col-4 text-description text-center">
                                <h6>Internet Speed</h6>

                                <div class="input-group input-group-sm mb-2">
                                    <input type="number" class="form-control text-right " aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                      <span class="input-group-text" id="basic-addon2">mbps</span>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="row py-4">
                            <div class="col-12 text-description">
                                    <h5>Description:</h6>
                                   <textarea  class="text-area-details w-100"></textarea>
                            </div>
                        </div>
                        
                        <div class="row py-2">
                            <div class="col-6 text-description text-left">
                                <h6>Phone Number</h6>
                                
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm">+63</span>
                                    </div>
                                    <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                            </div>
                            <div class="col-6 text-description text-center">
                                <h6>Telephone Number</h6>
                                
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm">(032)</span>
                                    </div>
                                    <input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-6 text-description text-left">
                                <h6>Address</h6>
                                <div class="input-group input-group-md mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm"><i class='bx bx-current-location'></i></span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-12 text-description text-left">
                                <h6>Computer Access Type</h6>
                                
                                <button class="view-btn">View Computer Type</button>
                            </div>
                        </div>
                    </div>

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
                                  <div class = "img-item">
                                    <a href = "#" data-id = "1">
                                      <img src = "assets/images/upload.png" class="wrap-image" id="imageDisplay1" onclick="chooseImages()" onchange="displayImage(this)">
                                    </a>
                                  </div>
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
                         
                            <input type="file" name="uploadImage" id="uploadImage">
                        </div>

                        <div class="table-data">
                            <div class="order">
                                <div class="text-description text-left py-2">
                                    <h6>Shop Location Coordinates:</h6>
                                </div>
                                <div class="map-location d-flex align-items-center justify-content-center">
                                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1962.7754870953547!2d123.89757386099087!3d10.297716817573397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99909fa641ea7%3A0x28868e53470c0c75!2sTNC%20CEBU%20HQ!5e0!3m2!1sen!2sph!4v1649999691702!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
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

<script>

    var selectedImageHolder = "";
    $('.wrap-image').click(function(){
        selectedImageHolder = $(this).attr('id');
    })

    function chooseImage() {
        document.querySelector('#uploadImage').click();
    }
    function displayImage() {
        var image = document.getElementById('uploadImage').files;

        if (image.files[0]) {
            var reader = new FileReader();
            reader.onload = function(image) {
        //    $(selectedImageHolder).setAttribute('src', image.target.result);
        //    $("#"+selectedImageHolder).attr('src', image.target.result);

            }
            reader.readAsDataURL(image.files[0]);
}
}
</script>
</body>
</html>