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
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Birthdate</label> <input type="date" name="bdate" value="<?php echo date( "Y-m-d", strtotime($w->birthdate));?>" id="date" class="bg-light form-control"> </div>
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
                <div class="ml-auto mx-1" > <div class="btn danger" data-toggle='modal' data-target='#changepassword'>Change</div> </div>
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

<!-- changepassword -->
<div class="modal fade" id="changepassword" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="justify-content: center;">
        <div class="form-verification">
            <div class="col-md-12"> <label >CurrentPassword:</label> <input type="password" id="current_password" name="currentpassword" value="" class="bg-light form-control"> </div>
            <!-- <br> -->
            <hr>
            <div class="col-md-8"> <label>New Password:</label> <input type="password" id="new_password" name="newpassword" value="" class="bg-light form-control"> </div>
            <div class="col-md-8"> <label>Repeat New Password:</label> <input type="password" id="check_new_password" value="" class="bg-light form-control"> </div>
            <br>
        <button id="change_pass_btn" class="w-100 btn btn-primary">Change password</button>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"  ></script>
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
            // myValidator();
            if(checkValidation()&&BDateValidator()){
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

function BDateValidator() {
  var birthday = document.getElementById("date").value; // Don't get Date yet...
  var regexVar = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/; // add anchors; use literal
  var regexVarTest = regexVar.test(birthday); // pass the string, not the Date
  var userBirthDate = new Date(birthday.replace(regexVar, "$3-$2-$1")); // Use YYYY-MM-DD format
  var todayYear = (new Date()).getFullYear(); // Always use FullYear!!
  var cutOff19 = new Date(); // should be a Date
  cutOff19.setFullYear(todayYear - 16); // ...
  var cutOff95 = new Date();
  cutOff95.setFullYear(todayYear - 60);
   if (isNaN(userBirthDate)) {
    
    swal( 'Invalid Birthdate','','error');
    $("#date").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
    return false;
  } else if (userBirthDate > cutOff19) {
    // alert("you have to be older than 16");
    swal( 'Invalid Birthdate','you have to be older than 16','error');
    $("#date").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
    return false;
  } else if (userBirthDate < cutOff95) {
    // alert("you have to be younger than 95");
    swal( 'Invalid Birthdate','you have to be younger than 60','error');
    $("#date").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
    return false;
  } 
  return true; // Return the date instead of an undefined variable
}
 </script>
  
<script>
    $(document).on('click','#change_pass_btn',function(){ 

c_pass = $("#current_password").val(); 
new_password = $("#new_password").val(); 
repeat_password = $("#check_new_password").val(); 

if(new_password != repeat_password){
    swal(
    'Password Not Match!',
    'Please Match Your Password',
    'error'
    )
}else{
        $.ajax({
                url:"change-password",
                method: "POST",
                data: { newpassword:new_password,currentpassword:c_pass},
                success: function (data) {
                    if(data == "invalid"){
                        swal(
                                'Current Password Not Match!',
                                'Please Match Your CurrentPassword',
                                'error'
                                )
                    }else{

                        swal({
                        title: "Password Changed Successfully",
                        text: "",
                        icon: "success",
                        button: "Proceed",
                        }).then((value) => {
                                location.reload();
                        }); 

                    }
                },
        });
        // console.log("hello");
}

});
</script> 
</html>









