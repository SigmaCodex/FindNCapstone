<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Admin Account Settings</title>

    <link rel="stylesheet" href="assets/css/shopAdminAccountSettings.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


<!-- Content Inside -->
<div class="container my-2 ">
<form method="post" id="updateAdminAccount" enctype="multipart/form-data"> 
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="tit pb-4 border-bottom">Admin Account Settings</h4>
        <?php foreach ($adminDetails as $w) {?> 
        <div class="d-flex align-items-start "> 

            <div class="pp title-info" id="img-section" >Profile Photo
                <p>Accepted file type (.png .jpg). Less than 5MB</p> 
            </div> 
        </div>
        <div class="py-2"> 
            <div class="d-flex">
                <div class="avatar-upload col-md-6 pt-md-0 pt-3">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(assets/upload/shop/admin/<?php echo $w->profilepic;?>);" ></div>
                    </div>
                </div>  
            </div>    
        </div>    

        <div class="py-2">
            <div class="title-info"> <b>USER INFORMATION</b>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" name="fname" value="<?php echo $w->firstname;?>" id="admin_firstname" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" name="lname" value="<?php echo $w->lastname;?>" id="admin_lastname"class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Birthdate</label> <input type="date" name="bdate" value="<?php echo date( "Y-m-d", strtotime($w->birthdate));?>" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="gender">Gender</label>  
                <select name="gender" id="gender" class="bg-light">
                <option value="male" <?php if($w->gender == "Male"){echo "selected";}?>>Male</option>
                    <option value="female" <?php if($w->gender == "Female"){echo "selected";}?>>Female</option>

                </select>
                </div>
            </div>
            <br>
            <div class="title-info"> <b>ACCOUNT INFORMATION</b>
             <div class="row py-2">
                <div class="col-md-6"> <label for="username">Username</label> <input name="username" value="<?php echo $w->username;?>" type="text" id="admin_username" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email</label> <input name="email" type="email" value="<?php echo $w->email;?>" id="admin_email" class="bg-light form-control"> </div>
                <div class="col-md-6"> 
                    <label for="phone">Phone Number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+63</span>
                        </div>
                        <input type="number" class="form-control" id="phone-num" value="<?php echo $w->contactaddress;?>" name="p_number"  aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

            <div class="d-sm-flex align-items-center pt-3 " id="change">
                <div class="title-info mx-3"> <b>CHANGE PASSWORD</b>
                    <p>Do not share your password to anyone.</p>   
                </div>
                <div class="ml-auto mx-1" > <div class="btn danger">Change</div> </div>
            </div>
            <br>
            <br>
            <div class="py-2 pb-4 "> <button class="btn btn-primary mr-3">Save Changes</button></div>
        </div>
    </div>
    
</div>
<?php }?> 
</form>
</body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function btn(){
            let side_bar = document.getElementById("side_bar_show")

            if (side_bar.style.display === "none") {
                side_bar.style.display = "block"
            } else {
                side_bar.style.display = "none"
            }
        }
    </script>

    <script>
        $("#phone-num").on("input", function() {
            if (/^0/.test(this.value)) {
                this.value = this.value.replace(/^0/, "")
            }
        })
    </script>
            <!-- imgUpload and preview -->
            <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function() {
                readURL(this);
            });
        </script> 

 <script>
      $(document).ready(function(){  
      $('#updateAdminAccount').on('submit', function(e){  
           e.preventDefault();  
            // alert("processing");

            if(checkValidation()){
                alert("checked");
                $.ajax({  
                     url:"updateAdminAccount",   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                        //  alert(data);
                        swal({
                            title: "Account Updated Successfully",
                            text: "",
                            icon: "success",
                            button: "Continue",
                            }).then((value) => {
                                    location.reload();
                            }); 
                    }  
                });  
            }
                

             
      });  
 });  

function checkValidation(){
            email = $("#admin_email").val();
            username = $("#admin_username").val();
            firstname = $("#admin_firstname").val();
            lname    = $("#admin_lastname").val();
            phone_num = $("#phone-num").val();
            if(IsEmail(email)){
                $("#admin_email").css({"border-color": "#fd0033", 
                "border-width":"1px", 
                "border-style":"solid"});
                return false;
            }
            if(username == ""){
                $("#admin_username").css({"border-color": "#fd0033", 
                "border-width":"1px", 
                "border-style":"solid"});
                return false;
            }
            if (checkName(firstname)){
                $("#admin_firstname").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
                return false;

            }
            if (checkName(lname)){
                $("#admin_lastname").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
                return false;
            }
            if(phone_num == "" || phone_num.length <10 || phone_num.length>10){
                $("#phone-num").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
                return false;
            }
        return true;
}

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return true;
  }else{
    return false;
  }
}
function checkName(name)
{
    var regex = /^([^0-9]*)$/;
    if(regex.test(name))
    {
        return false;
    } else{return true;}
}
 </script>       
</html>








