<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    	<!-- CDN's -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>     -->

    <link rel="stylesheet" href="assets/css/shopAdminFeed.css">    
    <script src="assets/js/shopAdminFeed.js"></script>

    <!-- MODAL CDN -->
  
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     -->
    <title>Shop Admin Feed</title>
</head>
<body>

    <div class="container">

        <div class="head-title">
            <div class="left">
                <h1>Profile Feed</h1>
            </div>
            <p class="edit-desc py-4">The profile post section or profile feed shows posts and comments which the admin can directly interact with their customers through posts using specific hashtags. Customers may view your posts by clicking on your profile page and can comment and be updated everytime when you posts events. </p>
        </div>
        <hr>
        <div class="row">

            <!-- Creating post section -->
            <div class="posts col-lg-7 col-md-7 col-sm-12 order-sm-12">

                <!-- Create post Card row -->
                <div class="create-post rounded mb-3">
                    <div class="row">
                        <div class="col-2">
                            <div class="profile-img">
                                <img src="assets/images/Image1.png" alt="">
                            </div>
                        </div>
                        <div class="col-5 d-flex align-items-center justify-content-start">
                            <div class="create-title">
                                <h6>Create Post</h6>
                            </div>
                            
                        </div>
                        <div class="col-5 d-flex align-items-center justify-content-end">
                            <div class="post-button" type="button" data-toggle="modal" data-target="#exampleModal">
                                <button>Post Now</button>
                            </div>
                            
                        </div>

                    </div>
                </div>

                    <!-- Button trigger modal -->
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="post_now_modal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content p-4">
                                    <div class="header-modal d-flex align-items-center justify-content-between">
                                        <h5 class="modal-title" id="post_now_modal">Create Post</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                    </div>
                                        
                                    <div class="modal-body d-flex flex-column">
                                        <textarea name="" id="" cols="65" rows="6" placeholder="Any thoughts to share? "></textarea>
                                        <div class="gap p-2"></div>
                                        <div class="img-holder-upload">
                                            <img src="assets/images/post.jpg" alt="">
                                        </div>
                                        <div class="gap p-2"></div>

                                        <div class="d-flex justify-content-end">
                                            <label class="btn btn-primary">
                                                <i class="fa fa-image"></i> Upload Image<input type="file" style="display: none;"  name="image">
                                            </label>
                                        </div>
                                        
                                    </div>
                                        <button type="button" class="btn btn-warning">Save changes</button>
                                </div>
                            </div>
                        </div>




                

                <!-- POSTS CARD with picture -->
                <div class="create-post-content rounded mb-3">

                    <div class="row">
                        <div class="col-2">
                            <div class="profile-img">
                                <img src="assets/images/Image1.png" alt="">
                            </div>
                        </div>

                        <div class="col-7 d-flex align-items-center justify-content-start">
                            <div class="posts-profile-name">
                                <h6>TNC CYBERCAFE CEBU HQ</h6>
                                <p class="text-muted">TNC_cebu (Admin1)</p>
                            </div>
                            
                        </div>

                        <div class="col-3 d-flex align-items-center justify-content-end">
                            <div class="profile-elapsed">
                                <p class="text-muted">1 hour ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="post-desc">
                        <img src="assets/images/post.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>

                    <span id="liked">

                        <div class="num-likes d-flex align-items-center  justify-content-evenly">
                            <i class="fa-solid fa-thumbs-up"></i>
                            <p class="m-0" >1</p>
                        </div>
                    </span>
                    
                    <div class="like-comment d-flex align-items-center  justify-content-evenly">
                        <p id="like" onclick="myFunctionLike()">Like</p>

                        <div class="comments d-flex align-items-center justify-content-center">
                            <p class="badge badge-secondary">3</p>
                            <p id="comment_text" onclick="myFunctionComment()">Comment</p>
                        </div>
                        
                    </div>
                    
                   
                        <span id="comments">
                            <div class="comments">
                                <div class="comments-section">
                                    <h6>Comments</h6>
                                </div>
        
                                <textarea name="" id="" cols="81" rows="4"></textarea>
                                
                                <!-- First Comment Card -->
                                <div class="comments-card pt-2">
                                    <div class="row">
                                        <div class="col-2">
    
                                        </div>
                                        <div class="col-2">
                                            <div class="profile-img">
                                                <img src="assets/images/Prof.png" alt="">
                                            </div>
                                        </div>
                
                                        <div class="col-5 d-flex align-items-center justify-content-start">
                                            <div class="comments-profile-name">
                                                <h6>Junky Dubs</h6>
                                                <p class="text-muted">junky</p>
                                            </div>
                                            
                                        </div>
                
                                        <div class="col-3 d-flex align-items-center justify-content-end">
                                            <div class="profile-elapsed">
                                                <p class="text-muted">1 hour ago</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="posts-comment">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                            sed do eiusmod tempor 
                
                                        </p>
                                    </div>
                                </div>
                                
                                <!-- Second Comment Card -->
                                <div class="comments-card pt-2">
                                    <div class="row">
                                        <div class="col-2">
    
                                        </div>
                                        <div class="col-2">
                                            <div class="profile-img">
                                                <img src="assets/images/Prof1.png" alt="">
                                            </div>
                                        </div>
                
                                        <div class="col-5 d-flex align-items-center justify-content-start">
                                            <div class="comments-profile-name">
                                                <h6>Jan Daveee</h6>
                                                <p class="text-muted">junky</p>
                                            </div>
                                            
                                        </div>
                
                                        <div class="col-3 d-flex align-items-center justify-content-end">
                                            <div class="profile-elapsed">
                                                <p class="text-muted">1 hour ago</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="posts-comment">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                            sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                            sed do eiusmod tempor 
                
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </span>
                    
                    
                    
                </div>


            </div>

            <!-- Reviews & ratings section -->
            <div class="ratings col-lg-5 col-md-6 col-sm-12 order-sm-1">

                <div class="ratings-card  rounded">
                    <!-- total reviews section -->
                    <h4 class="text-center">Reviews</h4>
                    <?php foreach($count_ratings as $rate){?>
                    <p class="number text-center m-0"><?php echo number_format($rate->avgRatings, 1);?></p>

                    <div class="stars d-flex align-items-center justify-content-center">

                        <!-- <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bx-star' ></i> -->
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
                    
                    <p class="count text-center text-muted"><?php echo $rate->countRating;?> reviews</p>
                    <?php }?>
                    <hr>
                    <!-- end of total reviews -->
                
        <?php
            $count = 0; 
            foreach($rating_heading as $user_ratings){
            $count++; 
            if($count<=2){
        ?> 
                   
                <!-- User reviews 1-->
                <div class="profile-review">
                    <div class="row">
                        <div class="col-2">
                            <div class="profile-img">
                                <img src="assets/upload/finder/<?php echo $user_ratings->profile_pic;?>"  onerror="this.src='assets/images/default.png';"  alt="">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="profile-name">
                                <h6><?php echo $user_ratings->firstname;?> <?php echo $user_ratings->lastname;?></h6>

                                <div class="user-rating d-flex">
                                    <?php
                                        for($i=1; $i<=5; $i++){               
                                            if($i<=$user_ratings->computer_rate){
                                                echo "<i class='bx bxs-star' ></i>";
                                            }else{
                                                echo "<i class='bx bx-star' ></i>";
                                            }
                                        }	                                    
                                    ?>

                                    <p class=""><?php echo number_format($user_ratings->computer_rate, 1);?></p>   
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-3">
                            <div class="profile-elapsed">
                                <p class="text-muted"><?php echo date("M j, Y", strtotime($user_ratings->date));?></p>
                            </div>
                            
                        </div>
                        
                    </div>    

                    <div class="profile-comment">
                        <p>Very Good I love The Service and DEVELOPER  
                        </p>
                    </div>
                </div>
                <?php }}?>   
                <!-- end User reviews 1-->
                
                <!-- User reviews 2-->
                <!-- <div class="profile-review">

                    <div class="row">
                        <div class="col-2">
                            <div class="profile-img">
                                <img src="assets/images/Prof1.png" alt="">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="profile-name">
                                <h6>Dave Delgado</h6>

                                <div class="user-rating d-flex">
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bxs-star' ></i>
                                    <i class='bx bx-star' ></i> 
                                    <p class="">4.0</p>   
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-3">
                            <div class="profile-elapsed">
                                <p class="text-muted">1 hour ago</p>
                            </div>
                            
                        </div>
                        
                    </div>    
                    <div class="badges row py-1 ">
                        <div class="col-2">

                        </div>
                        <div class="col-10">
                            <p class="badge badge-warning">Overall Service</p>
                            <p class="badge badge-warning">Customer Support</p>
                            <p class="badge badge-warning">Payment Details</p>
                            <p class="badge badge-warning">UI / UX</p>


                        </div>
                    </div>
                    <div class="profile-comment">
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor 

                        </p>
                    </div>
                </div> -->
                <!--end User reviews 2-->

                <!-- SEE MORE -->
                <span id="text" style="font-size: 10px;">
                <?php
                    $count = 0; 
                    foreach($rating_heading as $user_ratings){
                    $count++; 
                    if($count>2){
                ?> 
                    <!-- User reviews 3-->
                    <div class="profile-review">
                        <div class="row">
                            <div class="col-2">
                                <div class="profile-img">
                                    <img src="assets/upload/finder/<?php echo $user_ratings->profile_pic;?>"  onerror="this.src='assets/images/default.png';"  alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="profile-name">
                                    <h6><?php echo $user_ratings->firstname;?> <?php echo $user_ratings->lastname;?></h6>
    
                                    <div class="user-rating d-flex">
                                    <?php
                                        for($i=1; $i<=5; $i++){               
                                            if($i<=$user_ratings->computer_rate){
                                                echo "<i class='bx bxs-star' ></i>";
                                            }else{
                                                echo "<i class='bx bx-star' ></i>";
                                            }
                                        }	                                    
                                    ?>

                                    <p class=""><?php echo number_format($user_ratings->computer_rate, 1);?></p> 
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-3">
                                <div class="profile-elapsed">
                                    <p class="text-muted"><?php echo date("M j, Y", strtotime($user_ratings->date));?></p>
                                </div>
                                
                            </div>
                            
                        </div>    
    
                        <div class="profile-comment">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor 
    
                            </p>
                        </div>
    
                    </div>
                    <?php }}?> 

                </span>   
                    
                <div class="show-more">
                    <button id="toggle">Show More</button>

                </div>
                    

                </div>
                
            </div>

            
        </div>
    </div>

</body>
</html>




