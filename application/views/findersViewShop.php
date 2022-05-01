<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<!-- <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/findersViewShop.css">

    <!-- bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
	<title>View Shop Admin</title>
</head>
<body>

	<!-- CONTENT -->
    <div class="container">
         <div class="content mt-5 p-3">
                
                <!-- PROFILE DETAILS -->
                <div class="row">

                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="profile-img ">
                            <img src="assets/images/Image1.png" alt="">
                        </div>
                    </div>  

                    <div class="col-lg-7 col-md-7 col-sm-7">

                        <div class="profile-details">
                            <div class="profile-title">
                                <h1>TNC CYBERCAFE CEBU HQ</h1>
                            </div>

                            <div class="profile-review d-flex align-items-center justify-content-start">
                                <div class="reviews-star d-flex align-items-center justify-content-start">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star' ></i>
                                </div>
                                <div class="reviews-num  d-flex align-items-center justify-content-start">
                                    <h6 class="m-0">15</h6>
                                    <p class="m-0">reviews</p>
                                </div>
                            </div>

                            <div class="profile-brief-details">
                                
                                <div class="row">

                                    <div class="col-6">

                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bxs-phone'></i>
                                            <p class="m-0">437-4432</p>
                                        </div>

                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bx-envelope'></i>
                                            <p class="m-0">abc@gmail.com</p>
                                        </div>

                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bx-wifi' ></i>
                                            <p class="m-0">1,000 mbps</p>
                                        </div>

                                        
                                    </div>

                                    <div class="col-6">
                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bx-calendar'></i>
                                            <p class="m-0">Monday - Sunday</p>
                                        </div>

                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bxs-timer'></i>
                                            <p class="m-0">abc@gmail.com</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bx-current-location'></i>
                                            <p class="m-0">II Pelaez St. Brgy. Kalubihan Cebu City</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                            
                    </div>

                    <div class="col-lg-3 col-md-3">

                            <div class="book-buttons d-flex align-items-end flex-column d-sm-flex justify-content-sm-center" style="height: 250px;">
                                <div class="mb-auto p-2">
                                    <div class="book-mark">
                                        <i class='bx bxs-bookmarks'></i>
                                    </div>

                                </div>
                                <div class="p-2">
                                    <button class="btn btn-light">Rate</button>
                                </div>
                                <div class="p-2">
                                    <button class="book">Book</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <!-- IMAGES -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/images/tops.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/sugbo.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="assets/images/Image1.png" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="profile-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="card-title text-left mb-5">
                    <h6>Computer Access Type</h6>
                </div>

                    <div class="card-content d-flex align-items-center justify-content-between">

                        <div class="access-type">
                            <div class="access-type-title text-center">
                                <h6>Regular Acccess</h6>
                            </div>

                            <div class="access-type-img">
                                <img src="assets/images/tops.jpg" alt="">
                            </div>

                            <div class="access-type-details flex-column">
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-wallet'></i>
                                    <p class="m-0">Price Rate(hr) :</p>
                                    <p class="m-0 data text-muted">₱10</p>
                                </div>
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-desktop'></i>
                                    <p class="m-0">Computer Slot :</p>
                                    <p class="m-0 data text-muted">20</p>
                                </div>

                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bxs-keyboard'></i>
                                    <p class="m-0 data-acc text-muted">Predator PC and Predator Accessories</p>
                                </div>

                            </div>
                            

                            <div class="button-modal d-flex align-items-center justify-content-start">
                                <h6>Show more</h6>
                                <i class='bx bxs-chevrons-right'></i>
                            </div>
                        </div>

                        <div class="access-type">
                            <div class="access-type-title text-center">
                                <h6>Regular Acccess</h6>
                            </div>

                            <div class="access-type-img">
                                <img src="assets/images/tops.jpg" alt="">
                            </div>

                            <div class="access-type-details flex-column">
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-wallet'></i>
                                    <p class="m-0">Price Rate(hr) :</p>
                                    <p class="m-0 data text-muted">₱10</p>
                                </div>
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-desktop'></i>
                                    <p class="m-0">Computer Slot :</p>
                                    <p class="m-0 data text-muted">20</p>
                                </div>

                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bxs-keyboard'></i>
                                    <p class="m-0 data-acc text-muted">Predator PC and Predator Accessories</p>
                                </div>

                            </div>
                            

                            <div class="button-modal d-flex align-items-center justify-content-start">
                                <h6>Show more</h6>
                                <i class='bx bxs-chevrons-right'></i>
                            </div>
                        </div>

                        <div class="access-type">
                            <div class="access-type-title text-center">
                                <h6>Regular Acccess</h6>
                            </div>

                            <div class="access-type-img">
                                <img src="assets/images/tops.jpg" alt="">
                            </div>

                            <div class="access-type-details flex-column">
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-wallet'></i>
                                    <p class="m-0">Price Rate(hr) :</p>
                                    <p class="m-0 data text-muted">₱10</p>
                                </div>
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-desktop'></i>
                                    <p class="m-0">Computer Slot :</p>
                                    <p class="m-0 data text-muted">20</p>
                                </div>

                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bxs-keyboard'></i>
                                    <p class="m-0 data-acc text-muted">Predator PC and Predator Accessories</p>
                                </div>

                            </div>
                            

                            <div class="button-modal d-flex align-items-center justify-content-start">
                                <h6>Show more</h6>
                                <i class='bx bxs-chevrons-right'></i>
                            </div>
                        </div>

                        <div class="access-type">
                            <div class="access-type-title text-center">
                                <h6>Regular Acccess</h6>
                            </div>

                            <div class="access-type-img">
                                <img src="assets/images/tops.jpg" alt="">
                            </div>

                            <div class="access-type-details flex-column">
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-wallet'></i>
                                    <p class="m-0">Price Rate(hr) :</p>
                                    <p class="m-0 data text-muted">₱10</p>
                                </div>
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-desktop'></i>
                                    <p class="m-0">Computer Slot :</p>
                                    <p class="m-0 data text-muted">20</p>
                                </div>

                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bxs-keyboard'></i>
                                    <p class="m-0 data-acc text-muted">Predator PC and Predator Accessories</p>
                                </div>

                            </div>
                            

                            <div class="button-modal d-flex align-items-center justify-content-start">
                                <h6>Show more</h6>
                                <i class='bx bxs-chevrons-right'></i>
                            </div>
                        </div>

                    </div>
                
                <hr>

                <div class="card-title text-left mb-3">
                    <h6>Posts</h6>
                </div>
                
                <div class="profile-info">

                    <div class="row">
                        <div class="col-1">
                            <div class="profile-info-img">
                                <img src="assets/images/Image1.png" alt="">
                            </div>
                        </div>
                        
                        <div class="col-9">
                            <div class="profile-name-title">
                                <h5 class="m-0" >TNC CYBERCAFE CEBU HQ</h5>
                                <p class="m-0">TNC_cebu (Admin1)</p>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="profile-date-posted text-right">
                                <p class="text-muted">May 2, 2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <div class="profile-post">
                                <h5>NEW SUGBO MERKADO</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <div class="profile-post">
                                <img src="assets/images/sugbo.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <div class="profile-post">
                                <p class="m-0 desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                            <div class="profile-post-comment pt-3 d-flex align-items-center justify-content-start">
                                <p class=" m-0 badge badge-dark">1</p>
                                <p class="m-0 comment" id="comment_text" onclick="myFunctionComment()">Comment</p>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11">

                            <span id="comments">
                                <div class="comments">
                                    <div class="comments-section">
                                        <h6>Comments</h6>
                                    </div>
            
                                    <textarea name="" id="" cols="140" rows="4"></textarea>
                                    
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button class="btn btn-success">Post Comment</button>
                                    </div>

                                    <!-- First Comment Card -->
                                    <div class="comments-card mt-4 pt-4">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-2">
                                                <div class="profile-img">
                                                    <img src="assets/images/Image1.png" alt="">
                                                </div>
                                            </div>
                    
                                            <div class="col-8 col-md-8 col-sm-7 d-flex align-items-center justify-content-start">
                                                <div class="comments-profile-name">
                                                    <h6 class="m-0">Junky Dubs</h6>
                                                    <p class="text-muted m-0">junky</p>
                                                    <div class="profile-elapsed">
                                                        <p class="text-muted">May 2, 2022</p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                    
                                            <div class="col-3 col-md-3 col-sm-3 d-flex align-items-start justify-content-end">
                                                <div class="edit-delete">
                                                    <i class='bx bxs-edit'></i>
                                                    <i class='bx bx-trash'></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-11">
                                                <div class="posts-comment">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                        sed do eiusmod tempor 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </span>
                            
                        </div>
                    </div>

                </div>

                <hr>

                <div class="card-title text-center mb-3">
                    <h6>Reviews</h6>
                </div>
                <div class="card-title text-center mb-1">
                    <h3> <b>4.0</b> </h2>
                </div>

                <div class="review-stars-ratings d-flex align-items-center justify-content-center">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star' ></i>
                </div>
                
                <div class="card-title text-center mb-3 pt-1">
                    <p class="text-muted fs-2">45 Reviews</p>
                </div>

                    <div class="ratings-data ">

                        <div class="d-flex justify-content-center align-items-center p-2">
    
                              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                  <div class="carousel-item active">
                                    <div class="ratings-card-details">
    
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="ratings-img">
                                                    <img src="assets/images/Image1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="ratings-name">
                                                    <h6 class="">Junky Dubs Dublin</h6>
                                                    <div class="ratings-card-star d-flex align-items-center justify-content-start">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star' ></i>
                                                    </div>
            
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="ratings-date">
                                                    <p class="text-muted m-0">May 22, 2022</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="ratings-desc-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="carousel-item">

                                    <div class="ratings-card-details">
    
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="ratings-img">
                                                    <img src="assets/images/Image1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="ratings-name">
                                                    <h6 class="">Junky Dubs Dublin</h6>
                                                    <div class="ratings-card-star d-flex align-items-center justify-content-start">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star' ></i>
                                                    </div>
            
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="ratings-date">
                                                    <p class="text-muted m-0">May 22, 2022</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="ratings-desc-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                        </div>
                                    </div>

                                  </div>
                                  <div class="carousel-item">

                                    <div class="ratings-card-details">
    
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="ratings-img">
                                                    <img src="assets/images/Image1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="ratings-name">
                                                    <h6 class="">Junky Dubs Dublin</h6>
                                                    <div class="ratings-card-star d-flex align-items-center justify-content-start">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star' ></i>
                                                    </div>
            
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="ratings-date">
                                                    <p class="text-muted m-0">May 22, 2022</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="ratings-desc-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                        </div>
                                    </div>

                                  </div>
                                  <div class="carousel-item">

                                    <div class="ratings-card-details">
    
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="ratings-img">
                                                    <img src="assets/images/Image1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="ratings-name">
                                                    <h6 class="">Junky Dubs Dublin</h6>
                                                    <div class="ratings-card-star d-flex align-items-center justify-content-start">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star' ></i>
                                                    </div>
            
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="ratings-date">
                                                    <p class="text-muted m-0">May 22, 2022</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="ratings-desc-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                        </div>
                                    </div>

                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true" style="color: red;"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            
                        </div>
    
                    </div>
                
                   


                
        </div>
    </div>
       
		
	<!-- END CONTENT -->
	

	<script src="findersViewShop.js"></script>
</body>
</html>