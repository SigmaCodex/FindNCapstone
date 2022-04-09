 <!doctype html>
<html lang="en">
  <head>
  	<title>Shop Admin Posts</title>
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
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
  	<script src="../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>



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
					<h2 class="heading-section">View Posts and Comments</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" id="deletebtn" class="deletebtn btn mb-2 mb-md-0 btn-primary btn-block">Delete Post</button>
				</div>
			</div>
      		<br>
			<div class="row">
      			<div class="col-md-3 cold-xs-1">
        			<h3 class="h5 mb-4 text-center"></h3>
        			<div class="card" style="width: 18rem;">
          				<div class="card-body">
						  <?php foreach ($postDetails as $d) {?>  
            				<h5 id="compshopid" class="card-title" ><?php echo $d->shop_id;?></h5>
            				<p class="card-text" id="CompShopPK"><?php echo $d->post_title;?></p>
							<p class="card-text" id="postdata_id" style="display:none"><?php echo $d->post_id;?></p> 
          				</div>
          				<ul class="list-group list-group-flush">
            				<li class="list-group-item"><p><?php echo $d->post_img;?></p></li>
							<li class="list-group-item">Created:<p><?php echo $d->post_created;?></p></li>
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
						      <th>Post Content</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php foreach($postDetails as $d){ ?>
							<tr class="alert" role="alert">
						      	<td><?php echo $d->post_description ?></td>
						    </tr>
                            <?php } ?>
                            <tr class="alert" role="alert">
						      	<td>
                                  <?php foreach($userDetails as $s){ ?>
                                    <div class="cell comment-reply" >
                                    <div class='cell__logo pull-left'>
                                    <img class='cell__logo__img' src="http://www.impetusconsultrainers.com/Images/test17.jpg" />
                                    <div class='cell__c__title right'><?php echo $s->username ?></div>
                                    </div>
                                    <div class='cell__c pull-left'>
                                    <div class='cell__c__desc'><?php echo $s->comment ?></div>
                                    <div class='cell__c__img'><img class="comment-pic" src=""/></div>
                                    <div class='cell__footer'>
                                    <div class='cell__time pull-left'><?php echo $s->date?></div>
									<?php if(isset($user_id)){
										if($user_id == $s->user_id){
											echo "<button class='dlt_com_btn btn-sm btn-primary text-uppercase pull-right' data='$s->comment_id'>Delete</button>  
											<button class='editbtn btn-sm btn-primary text-uppercase pull-right' editdata='$s->comment_id'>Edit</button>";
										}
									}?>
                                    </div>
                                    
                                    </div>
                                </div>
                                <?php }?>
                            <textarea id="comm_text" class="form-control w-100"
                            placeholder="Leave a comment here"
                            id="my-comment"
                            style="height:7rem;"></textarea>
                            <div class="hstack justify-content-end gap-2">
                  <button class="addcombtn btn-sm btn-primary text-uppercase">comment</button>
				  <button class="editaddcombtn btn-sm btn-primary text-uppercase" data="<?php if(isset($user_id)){echo $user_id;} ?>" >edit comment</button>
               </div>
                            </td>
						    </tr>
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
	  	<form id="updatecompform" class="" name="updatecompform">
					<div class="form-group mb-2">
		      			<label for="name">Computer Type Name:</label>
		      			<input name="compname" id="shopName" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Total Units:</label>
		      			<input  name="number" id="c_number" type="text" class="form-control">
		      		</div> 
					<div class="form-group mb-2">
		      			<label for="name">Rate:</label>
		      			<input name="emailadd" id="emailadd" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Specs:</label>
		      			<input name="address" id="AddressIN" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Computer Type Image:</label>
		      			<input  type="text" id="lat" name="lat" placeholder="Your lat.." class="form-control">
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
					  <input value="Update" class="form-control btn btn-primary rounded submit px-3" id="updatecomputertypebtn" readonly="readonly">
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
$(document).on("click", '.addcombtn', function() {
    var BASE_URL = "<?php echo base_url();?>";
    var postid = $('#postdata_id').text();
    var comm = $('#comm_text').val();
    $.ajax({
          url:BASE_URL+"addComment/"+postid,
          type: "POST",
          data:{comment_txt:comm},
          beforeSend : function()
          {
          alert("processing");
          },
          success: function(data)
          {
            location.reload();    
          }
         });
 });
</script>
<script>
$(document).on("click", ".editbtn", function () {
	var id = $(this).attr("editdata");
	var BASE_URL = "<?php echo base_url();?>";
	$(".editaddcombtn").attr("data",id);
	$.ajax({
		url: BASE_URL+"getComment/" + id,
		method: "POST",
        data: { comment_id: id },
		dataType: "json",
		success: function (data) {	
			$("#comm_text").val(data.comment);
		},
	});
});
  $(document).on("click", '.editaddcombtn', function() {
    var BASE_URL = "<?php echo base_url();?>";
	var comm = $('#comm_text').val();
    var id = $(this).attr("data");
	alert(id);
    $.ajax({
          url:BASE_URL+"updateComment/"+id,
          type: "POST",
          data:{comment_txt:comm},
          beforeSend : function()
          {
          alert("processing");
          },
          success: function(data)
          {
            location.reload();   
          }
         });
 });
 </script>
<script>
		$(document).on("click",".dlt_com_btn",function(){
         var BASE_URL = "<?php echo base_url();?>";
			var id = $(this).attr("data");

			swal({
  				title: "Are you sure to delete this comment?",
  				icon: "warning",
  				buttons: true,
  				dangerMode: true,
			}).then((willDelete) => {
  				if (willDelete) {
					$.ajax({
						url: BASE_URL+"deleteComment/" + id,
						method: "POST",
						data: { comment_id: id },
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
		$(document).on("click",".deletebtn",function(){
         var BASE_URL = "<?php echo base_url();?>";
		 var id = $('#compshopid').text();
		 var postid = $('#postdata_id').text();
			swal({
  				title: "Are you sure to delete this post?",
  				icon: "warning",
  				buttons: true,
  				dangerMode: true,
			}).then((willDelete) => {
  				if (willDelete) {
					$.ajax({
						url: BASE_URL+"deletePost/"+postid,
						method: "POST",
						data: {post_id: id },
						success: function (data){
							swal("Post has been deleted!", {
    					  		icon: "success",
    						}).then((value) => {
								window.location = BASE_URL+"shopadmin-adminPosts/"+id;
							});

						},	
					});	
  				}
			});
		});
</script>

