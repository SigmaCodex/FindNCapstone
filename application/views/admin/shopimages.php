<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
</head>
<style>
    body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 600px;
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
<body>

<h5 id="shop_id"><?php if(isset($id)){ echo 
                    $id;}?></h5>
<form method="post" id="upload_form" enctype="multipart/form-data"> 

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
    <center><input type="submit" type="submit" class="btn btn-primary mr-3" id="btn-add" > </center>
</form>

<br>
<div class="container">
    <div class="row">
      <?php foreach ($details as $s) {?>  
        <div class="card col-md-4" style="width:400px">
            <img class="card-img-top" src="../assets/upload/shop/<?php echo $s->img_file;?>" alt="Card image" style="width:100%">
            <div class="card-body">      
            <a href="#" class="btn btn-danger btn-remove" image_id ="<?php echo $s->image_id;?>">remove</a>
            </div>
        </div> 
      <?php }?>         
    </div>
   
</div>






</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>  
 $(document).ready(function(){  
      $('#upload_form').on('submit', function(e){  
        var shop_id = $("#shop_id").text();
        var BASE_URL = "<?php echo base_url();?>";
           e.preventDefault();  
            alert("processing");
                $.ajax({  
                     url: BASE_URL+"uploadshopimages/"+shop_id,   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                         alert(data);
                         location.reload(); 
                     }  
                });  
             
      });  
 });  
 </script>
 
 <script>  
 $(document).ready(function(){  
      $('.btn-remove').on('click', function(e){  
        var image_id = $(this).attr("image_id");
        var BASE_URL = "<?php echo base_url();?>";
           e.preventDefault();  
            alert("processing");
                $.ajax({  
                     url: BASE_URL+"removeshopimage/"+image_id ,   
                     method:"POST",  
                     data:{},  
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
</html>