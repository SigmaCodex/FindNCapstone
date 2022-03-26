<!DOCTYPE html>
<html>
<head>
	<title>Hello Welcome to FindN</title>
   <link rel="stylesheet" type="text/css" href="../assets/admin/css/postevents.css">
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="df-content-wrapper">
    <div class="df-overlay"></div>
    <div class="df-content">

        <section class="container df-main">
            <a href="#" id="df-contact" class="df-contact">Add Announcement/Post</a>
            <div class='column one'>
               <div class='picture'>
               </div>
               <div class='desc'>
               <?php foreach ($postDetails as $s) {?>
                  <img src="..\assets\images\<?php echo $s->post_img?>" alt="">
                  <button class="df2-contact" shoppost_id="<?php echo $s->post_id;?>">Edit Post</button>
                  <h3><?php echo $s->post_title;?></h3>
                  <p><?php echo $s->post_created;?></p><p><?php echo $s->post_updated;?></p>
                  <h3 id="compshop_postid" style="display:none"><?php echo $s->post_id;?></h3>
                  <p><?php echo $s->post_description;?></p>
                  <?php }?> 
               </div>
            </div>
            <div class="df-modal">
                <div class="df-modal-overlay"></div>
                <div class="df-modal-content">
                    <h2>Announcement Form</h2>
                    <h1 id="compshop_id"  style="display:none"><?php if(isset($shopid)){ echo $shopid;}?></h1>
                    <form class="df-form">
                        <div class="df-input-box">
                            <input id="post_title" type="sujet" name="sujet" placeholder="Title" required>
                            <label for="email"></label>
                        </div>
                        <label></label>
                        <div class="df-input-box">
                            <textarea id="post_content" type="sujet" name="sujet" placeholder="Content" required></textarea>
                            <label for="sujet"></label>
                        </div>
                        <div class="df-input-box">
                            <label>Computer Image Upload: </label>
                            <input id="post_img" type="file" accept="image/*" />
                            <label for="sujet"></label>
                        </div>
                        <div class="toggle-button-cover">
								<div class="button-cover">
									<div class="button b2" id="button-16">
									<input type="checkbox" class="checkbox" />
									<div class="knobs"></div>
									<div class="layer"></div>
									</div>
								</div>
								</div>
                        <input id="idbtn" value="SAVE" />
                    </form>
                </div>
            </div>
            <div class="df2-modal">
                <div class="df2-modal-overlay"></div>
                <div class="df2-modal-content"> 
                    <h2>Edit Announcement</h2>
                    <form class="df2-form">
                        <div class="df2-input-box">
                            <input id="post_title2" type="sujet" name="sujet" placeholder="Title" required>
                            <label for="email"></label>
                        </div>
                        <label></label>
                        <div class="df2-input-box">
                            <textarea id="post_content2" type="sujet" name="sujet" placeholder="Content" required></textarea>
                            <label for="sujet"></label>
                        </div>
                        <div class="df2-input-box">
                            <label>Computer Image Upload: </label>
                            <input id="post_img2" type="file" accept="image/*" />
                            <label for="sujet"></label>
                        </div>
                        <input id="editbtn" value="SAVE" />
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
<script>
   $('#df-contact').click(function() {
    $('.df-modal').css('z-index', '999');
    $('html').addClass('df-modal-active');
  });
  $('.df-modal-overlay').click(function() {
    $('html').removeClass('df-modal-active');
    setTimeout(function() {
      $('.df-modal').css('z-index', '-999')
    }, 500);
  });

</script>
<script>
   $('.df2-contact').click(function() {
    $('.df2-modal').css('z-index', '999');
    $('html').addClass('df2-modal-active');
  });
  
  $('.df2-modal-overlay').click(function() {
    $('html').removeClass('df2-modal-active');
    setTimeout(function() {
      $('.df2-modal').css('z-index', '-999')
    }, 500);
  });

</script>
<!-- script for inserting computer shop posts  --> 
<script>
  $(document).on("click", '#idbtn', function() {
    var BASE_URL = "<?php echo base_url();?>";
    var shop_id = $('#compshop_id').text();
    var p_title = $('#post_title').val();
    var p_cont = $('#post_content').val();
    var p_img = $('#post_img').val();
    $.ajax({
          url:BASE_URL+"addshopPost/"+shop_id,
          type: "POST",
          data:{post_desc:p_cont,post_title:p_title,post_image:p_img},
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
<!-- script for updating computer shop posts -->
<script>
$(document).on("click", ".df2-contact", function () {
	var postid = $(this).attr("shoppost_id");
	alert(postid);
	var BASE_URL = "<?php echo base_url();?>";
	$.ajax({
		url: BASE_URL+"getshopPost/" +postid,
		method: "POST",
        data: {post_id: postid},
		dataType: "json",
		success: function (data) {

			$("#post_title2").val(data.post_title);
			$("#post_content2").val(data.post_description);
			$("#post_image2").val(data.post_img);

         $("df2").modal('show');

		},
	});
});
  $(document).on("click", '#editbtn', function() {
    var BASE_URL = "<?php echo base_url();?>";
    var postid = $('#compshop_postid').text();
    var p_title = $('#post_title2').val();
    var p_cont = $('#post_content2').val();
    var p_img = $('#post_img2').val();
    $.ajax({
          url:BASE_URL+"updateshopPost/"+postid,
          type: "POST",
          data:{post_desc:p_cont,post_title:p_title,post_image:p_img},
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
</body>
</html>