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
	<link rel="stylesheet" href="../assets/css/findersViewShop.css">

    <!-- bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="../assets/js/findersViewShop.js"></script>
    <!-- <script src="../assets/js/clock.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
	<title>View Shop Admin</title>
</head>
<body>

	<!-- CONTENT -->
    <div class="container">
         <div class="content mt-5 p-3">
                
                <!-- PROFILE DETAILS -->
                <?php foreach($shopdetails as $sd) {?>
                <div class="row">

                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="profile-img ">
                            <img src="../assets/upload/shop/<?php echo $sd->shop_img_icon;?>" alt="">
                        </div>
                    </div>  

                    <div class="col-lg-7 col-md-7 col-sm-7">

                        <div class="profile-details">
                            <div class="profile-title">
                                <h1><?php echo $sd->shop_name;?></h1>
                                <p id="shop_id" style="display:none"><?php echo $sd->shop_id;?></p>
                            </div>
                            <?php foreach($count_ratings as $rate){?>
                                
                            <div class="profile-review d-flex align-items-center justify-content-start">
                                <div class="reviews-star d-flex align-items-center justify-content-start">

                                <?php
                                    $rateConverted = number_format($rate->avgRatings, 0) ;
                                    if($rateConverted==0){
                                        echo "<i class='bx bx-star' ></i>";
                                    }else{

                                        for($i=1; $i<=5; $i++){
                                        
                                            if($i<=$rate->avgRatings){
                                                echo "<i class='bx bxs-star' ></i>";
                                            }else{
                                                if(($i < floor($rateConverted)+0.5) && $rate->avgRatings <5){
                                                    echo "<i class='bx bxs-star-half'></i>";
                                                }else{
                                                    echo "<i class='bx bx-star' ></i>";
                                                }
                                            }
                                        }	

                                    }	
							    ?>

                                </div>
                                <div class="reviews-num  d-flex align-items-center justify-content-start">
                                    <h6 class="m-0"><?php echo number_format($rate->avgRatings, 1);?></h6>
                                    <p class="m-0">reviews</p>
                                </div>
                            </div>
                            <?php }?>

                            <div class="profile-brief-details">
                                
                                <div class="row">

                                    <div class="col-6">

                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bxs-phone'></i>
                                            <p class="m-0"><?php echo $sd->tel_number;?> / <?php echo $sd->contact_number;?></p>
                                        </div>

                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bx-envelope'></i>
                                            <p class="m-0"><?php echo $sd->email_address;?></p>
                                        </div>

                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bx-wifi' ></i>
                                            <p class="m-0"><?php echo $sd->net_speed;?> MBPS</p>
                                        </div>

                                        
                                    </div>

                                    <div class="col-6">
                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bx-calendar'></i>
                                            <p class="m-0"><?php echo $sd->operating_days;?></p>
                                        </div>

                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bxs-timer'></i>
                                            <p class="m-0"><?php echo $sd->operating_hours;?></p>
                                        </div>
                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bxs-door-open'></i>
                                            <p class="m-0" <?php if($sd->Shop_Status == "Open"){echo "style='color:green; font-weight:700;'";} if($sd->Shop_Status == "Close"){echo "style='color:red; font-weight:700;'";} ?>><?php echo $sd->Shop_Status;?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="contact d-flex align-items-center justify-content-start">
                                            <i class='bx bx-current-location'></i>
                                            <p class="m-0"><?php echo $sd->address;?></p>
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
                                    <button class="btn btn-warning"  data-toggle="modal" data-target="#rate">Rate <i class='bx bxs-star'></i></button>
                                </div>
                                <div class="p-2">
                                    
                                    <button class="book" data-toggle="modal" data-target="#booknow_modal" style="outline:none;" <?php if($sd->Shop_Status == "Close"){echo "disabled";}?>>Book</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- BOOK NOW MODAL -->
                <hr>
                <div class="modal fade" id="booknow_modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">     
                    <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><br>
                        <h6 class="text-center mb-5" style="font-size: 20px; font-weight: 600;">Select Service</h6>
                        <i class="fa fa-computer"></i>
                        <div class="text-center mb-4"><a href="<?php echo base_url();?>finder-ComputerBookingRequest/<?php echo $sd->shop_id;?>" class="btn btn-primary w-50 rounded-pill b1">Computer Bookings</a></div> 
                        <div class="text-center mb-3"> <a href="<?php echo base_url();?>finder-PrintingBookingRequest/<?php echo $sd->shop_id;?>" class="btn btn-primary w-50 rounded-pill b1" >Printing Service</a> </div> 
                    </div>
                    </div>
                </div>
                <!-- SEE MORE COMPUTER TYPE MODAL -->
                <div class="modal fade" id="view-description">
				<div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
					<div class="modal-content p-4">

					<div class="modal-body ">
						<div class="modal-holder">
							
		

							<div class="modal-img-holder d-flex flex-column align-items-center justify-content-center">
								<p class="modal-img-holder-caption text-muted"></p>
								<img id="view-upload-preview" class="modal-image" src="../assets/upload/shop/computertype/default_computertype.png" style="border-radius: 10px;">
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
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>			
										</div>
										
										
										
										
										
									</div>
					
						</div>
					</div>
		
					</div>
				</div>
			</div>
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
                            <?php 
                            $count=0; 
                            foreach($shop_images as $si){ ?>
                              <div class="carousel-item <?php if($count==0){echo "active";} else{echo "";}?>">
                                <img class="d-block w-100" src="../assets/images/<?php echo $si->img_file;?>" alt="First slide" onerror="this.src='../assets/upload/shop/defaultshopimg.png';">
                              </div>
                            <?php $count++;}?>
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
                            <p><?php echo $sd->description;?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <hr>

                <div class="card-title text-left mb-5">
                    <h6>Computer Access Type</h6>
                </div>
                    
                    <div class="card-content d-flex align-items-center justify-content-around">
                    <?php foreach($typedetails as $td){?>
                        <div class="access-type" data=<?php echo $td->Ctype_id;?>>
                            <div class="access-type-title text-center">
                                <h6><?php echo $td->name;?> Acccess</h6>
                            </div>
                            <div class="access-type-img">
                                <img src="../assets/upload/shop/computertype/<?php echo $td->comp_type_img;?>" alt="">
                            </div>

                            <div class="access-type-details flex-column">
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-wallet'></i>
                                    <p class="m-0">Price Rate(hr) :</p>
                                    <p class="m-0 data text-muted"><?php echo $td->rate;?></p>
                                </div>
                                
                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bx-desktop'></i>
                                    <p class="m-0">Computer Slot :</p>
                                    <p class="m-0 data text-muted"><?php echo $td->total_units;?></p>
                                </div>

                                <div class="access-type-details-text d-flex align-items-center justify-content-start">
                                    <i class='bx bxs-keyboard'></i>
                                    <p class="m-0 data-acc text-muted"><?php echo $td->specs;?></p>
                                </div>

                            </div>
                            

                            <div class="button-modal d-flex align-items-center justify-content-start show_btn">
                                <h6 id="show_btn">Show more</h6>
                                <i class='bx bxs-chevrons-right'></i>
                            </div>
                        </div>
                        <?php }?>
                    </div>

                <hr>

                <div class="card-title text-left mb-3">
                    <h6>Posts</h6>
                </div>
        <?php foreach($postDetails as $pd){?>
            <div class="profile-info">
                    <p id="shop_id" style="display:none"><?php echo $pd->shop_id;?></p>
                    <div class="row mt-5">
                        <div class="col-1">
                            <div class="profile-info-img">
                                <img src="../assets/images/<?php echo $pd->shop_img_icon?>" alt="">
                            </div>
                        </div>
                        
                        <div class="col-9">
                            <div class="profile-name-title">
                                <h5 class="m-0" ><?php echo $pd->shop_name;?></h5>
                                <p class="m-0"><?php echo $pd->firstname;?> <?php echo $pd->lastname;?>(ADMIN)</p>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="profile-date-posted text-right">
                                <p class="text-muted"><?php echo date("M j, Y H:i A", strtotime($pd->post_created));?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <div class="profile-post">
                                <h5><?php echo $pd->post_title;?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <div class="profile-post">
                            <?php if($pd->post_img){?>
                                <img src="../assets/upload/shop/postandeventsImages/<?php echo $pd->post_img;?>" alt="">
                            <?php }?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <div class="profile-post">
                                <p class="m-0 desc"><?php echo $pd->post_description;?></p>
                            </div>
                            <div class="profile-post-comment pt-3 d-flex align-items-center justify-content-start">
                                <p class=" m-0 badge badge-dark mark_count" id="cmnt_count"><?php $count=0; foreach($commentDetails as $cmtdet){if($pd->post_id == $cmtdet->post_id_fk){$count++;}} echo $count;?></p>
                                <p class="m-0 comment" id="comment_text">Comment</p>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-11">

                            <span class="comments-section-area mb-5" id="comments">
                                <div class="comments">
                                    <div class="comments-section">
                                        <h6>Comments</h6>
                                    </div>
            
                                    <textarea id="cmnt_text" class="comnt_text" cols="140" rows="4"></textarea>
                                    
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button class="btn btn-success" id="add_cmnt" posts_id="<?php echo $pd->post_id;?>">Post Comment</button>
                                    </div>
                                    <?php foreach($commentDetails as $cd){
                                    if($pd->post_id == $cd->post_id_fk){
                                    ?>
                                    <!-- First Comment Card -->
                                    <div class="comments-card mt-4 pt-4">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-2">
                                                <?php if($cd->user_type == "Admin"){?>
                                                <div class="profile-img">
                                                <img src="../assets/upload/shop/admin/<?php echo $cd->profilepic;?>" alt="">
                                                </div>
                                                <?php }?> 
                                                <?php if($cd->user_type == "finder"){?>
                                                <div class="profile-img">
                                                <img src="../assets/upload/finder/<?php echo $cd->profile_pic;?>" alt="">
                                                </div>
                                                 <?php }?>
                                            </div>
                    
                                            <div class="col-8 col-md-8 col-sm-7 d-flex align-items-center justify-content-start">
                                                <div class="comments-profile-name">
                                                    <?php if($cd->user_type == "Admin"){?>
                                                    <h6 class="m-0"><?php echo $cd->admin_firstname;?> <?php echo $cd->admin_lastname;?></h6>
                                                    <?php }?>
                                                    <?php if($cd->user_type == "finder"){?>
                                                    <h6 class="m-0"><?php echo $cd->firstname;?> <?php echo $cd->lastname;?></h6>
                                                    <?php }?>
                                                    <p class="text-muted m-0"><?php echo $cd->user_type;?></p>
                                                    <div class="profile-elapsed">
                                                        <p class="text-muted"><?php echo date("M j, Y H:i A", strtotime($cd->date));?></p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-sm-3 d-flex align-items-start justify-content-end">
                                                <div class="edit-delete">
                                                    <?php if($finder_id == $cd->user_id){
                                                    echo "<i class='bx bxs-edit' id='edit_comment' edit_id='$cd->comment_id'></i>
                                                    <i class='bx bx-trash' id='del_comment' del_id='$cd->comment_id'></i>";
                                                    }?>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-11">
                                                <div class="posts-comment">
                                                    <p><?php echo $cd->comment;?> 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }}?>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <?php }?>


                <hr>

                <div class="card-title text-center mb-3">
                    <h6>Reviews</h6>
                </div>
                <?php foreach($count_ratings as $review){?>
                <div class="card-title text-center mb-1">
                    <h3> <b><?php echo number_format($review->avgRatings, 1);?></b> </h2>
                </div>

                <div class="review-stars-ratings d-flex align-items-center justify-content-center">
                <?php
                                    $rateConverted = number_format($review->avgRatings, 0) ;
                                    if($rateConverted==0){
                                        echo "<i class='bx bx-star' ></i>";
                                    }else{

                                        for($i=1; $i<=5; $i++){
                                        
                                            if($i<=$review->avgRatings){
                                                echo "<i class='bx bxs-star' ></i>";
                                            }else{
                                                if(($i < floor($rateConverted)+0.5) && $review->avgRatings <5){
                                                    echo "<i class='bx bxs-star-half'></i>";
                                                }else{
                                                    echo "<i class='bx bx-star' ></i>";
                                                }
                                            }
                                        }	

                                    }	
							    ?>
                </div>
                
                <?php }?>
                <div class="card-title text-center mb-3 pt-1">
                    <p class="text-muted fs-2"> <?php $count = 0; foreach($rating_heading as $user_ratings){ $count++;} echo $count;?> Reviews 
                    </p>
                </div>

                    <div class="ratings-data ">
                        <div class="d-flex justify-content-center align-items-center p-2">
    
                              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                    <?php 
                                    $count = 0;
                                    foreach($rating_heading as $user_ratings){
                                        $count++;
                                    ?>
                                   
                                    <div class="carousel-item <?php if($count==1){echo "active";}?>">
                                        <div class="ratings-card-details">
        
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="ratings-img">
                                                    <img src="../assets/upload/finder/<?php echo $user_ratings->profile_pic;?>"  onerror="this.src='../assets/images/default.png';"  alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="ratings-name">
                                                        <h6 class=""><?php echo $user_ratings->firstname;?> <?php echo $user_ratings->lastname;?></h6>
                                                        <div class="ratings-card-star d-flex align-items-center justify-content-start">

                                                        <?php
                                                            for($i=1; $i<=5; $i++){               
                                                                if($i<=$user_ratings->computer_rate){
                                                                    echo "<i class='bx bxs-star' ></i>";
                                                                }else{
                                                                    echo "<i class='bx bx-star' ></i>";
                                                                }
                                                            }	                                    
                                                        ?>                                           

                                                        </div>
                
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="ratings-date">
                                                        <p class="text-muted m-0"><?php echo date("M j, Y", strtotime($user_ratings->date));?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="ratings-desc-details">
                                                <p>  <?php echo $user_ratings->review;?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>    

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

  <!-- start modal -->
  <div  class="modal fade" id="rate"  data-bs-keyboard="false" tabindex="-1" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">

            <div class="header-title d-flex align-items-center justify-content-start">
              <i class="fas fa-arrow-left pr-3"  data-dismiss="modal"></i>
              <h6 class="m-0">Feedback</h6>
            </div>

            <div class="title">
              <h4 class="text-center mt-4 mb-1">Rate your Experience</h4>
            </div>
              <div class="rate-star d-flex flex-column align-items-center justify-content-center mb-1">
                  <div class="rate">
                    <input type="radio" id="star5" name="rate" class="star" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" class="star" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" class="star" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" class="star" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" class="star" value="1" />
                    <label for="star1" title="text">1 star</label>
                    <!-- <input type="text" id="selected_val"> -->
                  </div>
                  
              </div>

                  <div class="modal-details p-3">
                    <div class="text-details text-center">
                      <p class="text-muted">How satisfied are you with the service?</p>
                    </div>
                    <div class="text-details text-left" style="font-size: 12px;">
                      <p>Tell us what we can Improved?</p>
                    </div>

                    <div class="text-card">
                        <textarea name="" id="review" cols="51" rows="5" placeholder="Type here..." ></textarea>
                    </div>
                   
                  </div>

              <!-- MODAL CSS INLINE -->
              <style>
                    .fa-arrow-left {
                      cursor: pointer;
                    }
                    .rate {
                        float: left;
                        height: 46px;
                        padding: 0 10px;
                    }
                    .rate:not(:checked) > input {
                        position:absolute;
                        top:-9999px;
                    }
                    .rate:not(:checked) > label {
                        float:right;
                        width:1em;
                        overflow:hidden;
                        white-space:nowrap;
                        cursor:pointer;
                        font-size:50px;
                        color:#ccc;
                    }
                    .rate:not(:checked) > label:before {
                        content: '✯ ';
                    }
                    .rate > input:checked ~ label {
                        color: #F78516;    
                    }
                    .rate:not(:checked) > label:hover,
                    .rate:not(:checked) > label:hover ~ label {
                        color: #F78516;  
                    }
                    .rate > input:checked + label:hover,
                    .rate > input:checked + label:hover ~ label,
                    .rate > input:checked ~ label:hover,
                    .rate > input:checked ~ label:hover ~ label,
                    .rate > label:hover ~ input:checked ~ label {
                        color: #F78516;
                    }
                    .text-card textarea{
                      outline:none;
                      resize:none;
                      border-radius:10px;
                      padding:10px;
                      font-size:15px;
                      border:1px solid #A7A1A1;
                      background-color: #F1F1F1;
                    }
                    .review-but{
                      background-color: #FF5D31;
                      color: #FFFFFF;
                      padding: 10px 100px 10px 100px;
                      outline:none;
                      border:none;
                      border-radius: 5px;
                    }
                    .review-but:hover {
                      background-color: #F53805;
                    }
                    @media (max-width: 400px) {
                        .text-card textarea{
                          width:280px;
                        }
                        .review-but{
                            font-size:12px;
                        }
                    }
              </style>

                    <div class="button d-flex justify-content-center align-items-center">
                      <button class="review-but" id="submit_review">Submit Review</button>
                    </div>
          </div>
      </div>
    </div>
    <!-- end of modal -->

</body>
</html>
<script>
    $(document).on('click','#add_cmnt',function(){
    BASE_URL = "<?php echo base_url();?>";
    id = $(this).attr('posts_id');
    comm = $(this).parent().parent().find('.comnt_text').val();
    $.ajax({
          url:BASE_URL+"addComment/"+id,
          type: "POST",
          data:{comment_txt:comm},
          success: function(data)
          {
            location.reload();    
          }
         });
    });
</script>
<script>
     $(document).on('click', '#edit_comment',function(){
        BASE_URL = "<?php echo base_url();?>";
        id = $(this).attr("edit_id");
        status = $(this).attr('stat');
        if(status == "active"){     
         $(this).parent().parent().parent().parent().find('.posts-comment').find('textarea').remove();
         $(this).parent().parent().parent().parent().find('.posts-comment').find('button').remove();
         $(this).parent().parent().parent().parent().find('.posts-comment').find('p').show();
         $(this).attr('stat', '');
        }
        else{
         $(this).attr('stat', 'active');
         $(this).parent().parent().parent().parent().find('.posts-comment').find('p').hide();
         edit_comment_text = $(this).parent().parent().parent().parent().find('.posts-comment').find('p').text();
         $(this).parent().parent().parent().parent().find('.posts-comment').append("<div><textarea class='comment_field_edit' cols='118' rows='3'>"+edit_comment_text+"</textarea><button class='edit_curr_comment add-com badge badge-success p-2' getid='"+id+"'>UPDATE</button></div>");
        }
});
$(document).on('click', '.edit_curr_comment',function(){
        // comm = $(this).parent().find('.comment_field_edit').css('background-color','red');
        edited_comment = $(this).parent().parent().parent().find('.posts-comment').find('textarea').val();
        id = $(this).attr('getid');
                $.ajax({  
                     url: BASE_URL+"updateComment/"+id,   
                     method:"POST",  
                     data:{comment_txt:edited_comment},
                     success:function(data)  
                     {
                     }  
                });
            $(this).parent().parent().parent().find('p').show();
            $(this).parent().parent().parent().find('p').text(edited_comment);
            $(this).parent().parent().parent().find('.posts-comment').find('textarea').remove();
            $(this).remove();
});
</script>

<script>
$(document).on('click', '#del_comment', function(){
        id = $(this).attr('del_id');
        count = $(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().find('.mark_count').text();
        count_elem = $(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().find('.mark_count');
        $.ajax({  
				url: BASE_URL+"deleteComment/"+id,   
				type:"POST",  
				data:{},   
				success:function(data)  
				{   
                    count = count - 1;
                    count_elem.text(count);
				}
		});
        $(this).parent().parent().parent().parent().hide();
});
</script>
<script>
    $(document).on("click", ".access-type", function(){
    $("#view-description").modal('show');
    id = $(this).attr('data');
    $.ajax({
					url: BASE_URL+"getCompTypeInfo/"+id,
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
								$("#view-upload-preview").attr("src","../assets/upload/shop/computertype/"+result[x]['comp_type_img']);
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
    });
</script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).on('click','.star',function(){ 
   var rating = $(this).val();
   $("#submit_review").attr('rating',rating);

});

$(document).on('click','#submit_review',function(){ 
   var shop_id = $('#shop_id').text();
   var rating = $(this).attr('rating');
   var review = $('#review').val();
   var BASE_URL = "<?php echo base_url();?>";

   $.ajax({
			url: BASE_URL+"addRate/"+shop_id,
			method: "POST",
			data:{score: rating,rate_review:review},
			success: function (data) {
        // location.reload();

          swal({
            title: "Thank You",
            text: "Your FeedBack Was Succesfully Submitted",
            icon: "success",
            button: "Continue",
          }).then((value) => {
                location.reload();
          });


			},
		});
 


  
});
</script>
