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
                                <?php foreach($shop_details as $sd){?>
                                <p id="shopid" style="display:none"><?php echo $sd->shop_id;?></p>
                                <img src="assets/upload/shop/<?php echo $sd->shop_img_icon;?>" alt="">
                                <?php } ?>
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
                                        <form id="upload_post">
                                        <label>"Post Title:</label><input type="text" name="title">
                                        <textarea name="description" id="" cols="65" rows="6" placeholder="Any thoughts to share to finders?"></textarea>
                                        <div class="gap p-2"></div>
                                        <div class="img-holder-upload">
                                        <img src="assets/images/post.jpg" id="upload-preview" alt="">
                                        </div>
                                        <div class="gap p-2"></div>

                                        <div class="d-flex justify-content-end">
                                            <label class="btn btn-primary">
                                                <i class="fa fa-image"></i> Upload Image<input class="img_upload" type="file" style="display: none;"  name="postimage">
                                            </label>
                                        </div>
                                        
                                    </div>
                                        <button type="submit" id="add_postfeed" class="btn btn-warning">Save changes</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Button trigger modal -->
                        
                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="post_now_modal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content p-4">
                                    <div class="header-modal d-flex align-items-center justify-content-between">
                                        <h5 class="modal-title" id="post_now_modal">Edit Post</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                    </div>
                                        
                                    <div class="modal-body d-flex flex-column">
                                        <form id="edit_upload_post">
                                        <label>"Post Title:</label><input id="cp_title" type="text" name="edit_title">
                                        <textarea name="edit_description" id="cp_desc" cols="65" rows="6" placeholder="Any thoughts to share to finders?"></textarea>
                                        <div class="gap p-2"></div>
                                        <div class="img-holder-upload">
                                        <img src="assets/images/post.jpg" id="edit_upload-preview" alt="">
                                        </div>
                                        <div class="gap p-2"></div>

                                        <div class="d-flex justify-content-end">
                                            <label class="btn btn-primary">
                                                <i class="fa fa-image"></i> Upload Image<input id="cp_img" class="edit_img_upload" type="file" style="display: none;"  name="edit_postimage">
                                            </label>
                                        </div>
                                        
                                    </div>
                                        <button type="submit" id="add_postfeed" class="btn btn-warning">Save changes</button>
                                        </form>
                                </div>
                            </div>
                        </div>




                

                <!-- POSTS CARD with picture -->
                <?php foreach($postDetails as $pd){?>
                <div class="create-post-content rounded mb-3">
                    <div class="row">
                    <p id="postid" style="display:none"><?php echo $pd->post_id;?></p>
                    <i class='close-notif fa-solid fa-trash-alt' id="delete_post" delete_id="<?php echo $pd->post_id;?>"></i>
                    <i class='close-notif fa-solid fa-pen-alt' id="edit_post" edit_id="<?php echo $pd->post_id;?>"></i>
                    <p id="admin_profile" style="display:none;"><?php echo $pd->profilepic;?></p>
                        <div class="col-2">
                            <div class="profile-img">
                                <img src="assets/upload/shop/<?php echo $pd->shop_img_icon?>" alt="">
                            </div>
                        </div>

                        <div class="col-7 d-flex align-items-center justify-content-start">
                            <div class="posts-profile-name">
                                <h6><?php echo $pd->shop_name;?></h6>
                                <p class="text-muted"><?php echo $pd->firstname;?> <?php echo $pd->lastname;?>(Admin)</p>
                                <p class="text-muted">Subject : <?php echo $pd->post_title;?></p>
                            </div>
                            
                        </div>

                        <div class="col-3 d-flex align-items-center justify-content-end">
                            <div class="profile-elapsed">
                                <p class="text-muted"><?php echo $pd->post_created;?></p>
                            </div>
                        </div>
                    </div>

                    <div class="post-desc">
                        <?php if($pd->post_img){?>
                        <img src="assets/upload/shop/postandeventsImages/<?php echo $pd->post_img;?>" alt="">
                    <?php }?>
                        <p><?php echo $pd->post_description;?></p>
                    </div>

                    <!-- <span id="liked">

                        <div class="num-likes d-flex align-items-center  justify-content-evenly">
                            <i class="fa-solid fa-thumbs-up"></i>
                            <p class="m-0" >1</p>
                        </div>
                    </span> -->
                    
                    <div class="like-comment d-flex align-items-center  justify-content-evenly">

                        <div class="comments d-flex align-items-center justify-content-center">
                            <p class="badge badge-secondary mark_count" id="cmnt_count"><?php $count=0; foreach($commentDetails as $cmtdet){if($pd->post_id == $cmtdet->post_id_fk){$count++;}} echo $count;?></p>
                            <p class="comment_txt" id="comment_text">Comments</p>
                        </div>
                        
                    </div>
                    
                   
                        <span class="comments_section_area" id="comments">
                            <div class="comments">
                                <div class="comments-section">
                                    <h6>Comments</h6>
                                </div>
        
                                <textarea name="" class="cmnt_text" cols="81" rows="4"></textarea>
                                <div class="d-flex align-items-center justify-content-end pr-4 pb-3" id="comm_apnd">
                                    <button class="add-com badge badge-success p-2" id="add_cmnt" posts_id="<?php echo $pd->post_id;?>">ADD COMMENT</button>
                                </div>
                                <!-- First Comment Card -->
                                <?php foreach($commentDetails as $cd){
                                if($pd->post_id == $cd->post_id_fk){
                                ?>
                                <div class="comments-card pt-2">
                                    <div class="row">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col-2">
                                            <div class="profile-img">
                                            <p style="display:none" id="comment_id_text"><?php echo $cd->comment_id?></p>
                                                <img src="assets/upload/finder/<?php echo $cd->profile_pic;?>" onerror="this.src='assets/images/default.png'" alt="">
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex align-items-center justify-content-start">
                                            <div class="comments-profile-name">
                                            <?php if($cd->user_type == "Admin"){?>
                                                <h6 class="m-0" id="admin_fullname"><?php echo $cd->admin_firstname;?> <?php echo $cd->admin_lastname;?></h6>
                                            <?php }?>
                                                <?php if($cd->user_type == "finder"){?>
                                                <h6 class="m-0"><?php echo $cd->firstname;?> <?php echo $cd->lastname;?></h6>
                                            <?php }?>
                                                <p class="text-muted"><?php echo $cd->user_type;?></p>
                                            </div>
                                            
                                        </div>
                
                                        <div class="col-3 d-flex align-items-center justify-content-end">
                                            <div class="profile-elapsed">
                                                <p class="text-muted"><?php echo $cd->date;?></p>
                                                <?php
                                            if($admin_id == $cd->user_id){
											echo "<i class='close-notif fa-solid fa-pen-alt' id='edit_comment' edit_id='$cd->comment_id'></i>";
									    }?>
                                            <i class='close-notif fa-solid fa-trash-alt' id="delete_comment" delete_id="<?php echo $cd->comment_id;?>"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="posts-comment">
                                        <p id="spec_comm"><?php echo $cd->comment;?></p> 
                                    </div>
                                </div>
                                <?php }} ?>
                            </div>
                        </span>
                </div>
                <?php } ?>
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
                        <p>
                        <?php echo $user_ratings->review;?>
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

                            <p> 
                                       <?php echo $user_ratings->review?> 

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
<script>  
	$(document).ready(function(){  
		$('#upload_post').on('submit', function(e){  
			var shopID = $('#shopid').text();
			var BASE_URL = "<?php echo base_url();?>";

			e.preventDefault();  
					$.ajax({  
						url: BASE_URL+"addshopPost/"+shopID,   
						method:"POST",  
						data:new FormData(this),  
						contentType: false,  
						cache: false,  
						processData:false,  
						success:function(data)  
						{  
                            location.reload();
						}  
					});
		});  
	});   
 </script>
 <script>
     $(document).on('click', '#delete_post',function(){
        BASE_URL = "<?php echo base_url();?>";
        postid = $(this).attr('delete_id');
        $.ajax({  
						url: BASE_URL+"deletePost/"+postid,   
						type:"POST",  
						data:{},   
						success:function(data)  
						{  
                            location.reload();  
						}
					});
     });
 </script>
 <script>
    $(document).on('click', '#edit_post',function(){
    postid = $(this).attr('edit_id');
			BASE_URL = "<?php echo base_url();?>";
            $.ajax({
					url: BASE_URL+"getPostInfo/"+postid,
					type: "GET",
                    cache: false,
                    async: false,
					success: function(data){
                           var result = JSON.parse(data);
                            for(var x = 0 ; x < result.length ; x ++)
                            {
                                $("#cp_title").val(result[x]['post_title']);
                                $("#cp_desc").val(result[x]['post_description']);
								$("#edit_upload-preview").removeAttr("src");
                                $("#edit_upload-preview").attr("src","assets/upload/shop/postandeventsImages/"+result[x]['post_img']);
                            }
                    }
                });
            $('#editModal').modal('show');  
    $('#edit_upload_post').on('submit', function(e){  
        BASE_URL = "<?php echo base_url();?>";
           e.preventDefault();
                $.ajax({  
                     url: BASE_URL+"updateshopPost/"+postid,   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {
                         location.reload(); 
                     }  
                });  
             
      });
    });
</script>
<script>
    $(document).on('click','#add_cmnt',function(){
    today = new Date();
    date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
    time = today.getHours() + ":" + today.getMinutes();
    name = $('#admin_fullname').text();
    admin_pic = $('#admin_profile').text();
    comm = $(this).parent().parent().find('.cmnt_text').val();
    alert(admin_pic);
    comm_card = `<div class="comments-card pt-2">
                    <div class="row">
                    <div class="col-2">
                    
                    </div>
                    <div class="col-2">
                        <div class="profile-img">
                        <p style="display:none" id="comment_id_text"></p>
                            <img src="assets/upload/shop/admin/${admin_pic}" onerror="this.src='assets/images/default.png'" alt="">
                        </div>
                    </div>
                    <div class="col-5 d-flex align-items-center justify-content-start">
                        <div class="comments-profile-name">
                            <h6>${name}</h6>
                            <p class="text-muted">ADMIN</p>
                        </div>
                        
                    </div>

                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <div class="profile-elapsed">
                            <p class="text-muted">${date}</p>
                        <i class='close-notif fa-solid fa-pen-alt' id='edit_comment' edit_id='$cd->comment_id'></i>
                        <i class='close-notif fa-solid fa-trash-alt' id="delete_comment" delete_id=""></i>
                        </div>
                    </div>
                </div>

                <div class="posts-comment">
                    <p id="spec_comm">${comm}</p> 
                </div>
            </div>
        </div>`;
    BASE_URL = "<?php echo base_url();?>";
    id = $(this).attr('posts_id');
    comm_apnd = $(this).parent().parent().parent().find('.comments');
    // alert(comm);
    $.ajax({
          url:BASE_URL+"addComment/"+id,
          type: "POST",
          data:{comment_txt:comm},
          success: function(data)
          {
            comm_apnd.append(comm_card);    
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
         $(this).parent().parent().parent().parent().find('.posts-comment').append("<textarea class='comment_field_edit' cols='80' rows='3'>"+edit_comment_text+"</textarea><button class='edit_curr_comment add-com badge badge-success p-2' getid='"+id+"'>UPDATE</button>");
        }
     });
     $(document).on('click', '.edit_curr_comment',function(){
        // comm = $(this).parent().find('.comment_field_edit').css('background-color','red');
        edited_comment = $(this).parent().parent().find('.posts-comment').find('textarea').val();
        id = $(this).attr('getid');
                $.ajax({  
                     url: BASE_URL+"updateComment/"+id,   
                     method:"POST",  
                     data:{comment_txt:edited_comment},
                     success:function(data)  
                     {
                     }  
                });
            $(this).parent().find('p').show();
            $(this).parent().find('p').text(edited_comment);
            $(this).parent().parent().find('.posts-comment').find('textarea').remove();
            $(this).remove();
     });
</script>
<script>
    $(document).on('click', '#delete_comment',function(){
        id = $(this).attr('delete_id');
        count = $(this).parent().parent().parent().parent().parent().parent().parent().find('.mark_count').text();
        count_elem = $(this).parent().parent().parent().parent().parent().parent().parent().find('.mark_count');
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

			$(".edit_img_upload").change(function(event){
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




