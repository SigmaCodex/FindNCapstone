<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Profile</title>

    <link rel="stylesheet" href="assets/css/accountSettings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
</head>
<body>
    

<!-- Content Inside -->

<form method="post" id="upload_form" enctype="multipart/form-data"> 
<div class="container">
    <div class="wrapper bg-white">
        <h4 class="tit pb-4 border-bottom">Account Settings</h4>
        <div class="d-flex align-items-start "> 

        <div class="pp title-info" id="img-section" >Profile Photo
                <p>Accepted file type (.png). Less than 5MB</p> 
            </div> 
        </div>
        <?php foreach ($findersPersonalDetails as $w) {?> 
        <div class="py-2"> 
            <div class="d-flex">
                <div class="avatar-upload col-md-6 pt-md-0 pt-3">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(assets/upload/finder/<?php echo $w->profile_pic;?>);"></div>
                    </div>
                </div>  
            </div>    
        </div>       
            <div class="title-info"> USER INFORMATION
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" name="f_name" value="<?php echo $w->firstname;?>" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label><input type="text" name="l_name" value="<?php echo $w->lastname;?>"  class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Birthday</label> <input type="date" name="b_date" value="<?php echo date( "Y-m-d", strtotime($w->birthdate));?>" class="bg-light form-control" > </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="gender">Gender</label>  
                <select name="gender" id="gender" class="bg-light">
                    <option value="male" selected>Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
            </div>
            <br>
            <div class="title-info"> ACCOUNT INFORMATION
             <div class="row py-2">
                <div class="col-md-6"> <label for="username">Username</label> <input name="username" value="<?php if(isset($username)){ echo $username;}?>" type="text" class="bg-light form-control" disabled>  </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email</label> <input name="email" type="email" value="<?php echo $w->email;?>" class="bg-light form-control">  </div>
                <div class="col-md-6"> <label for="phone">Phone Number</label> <input  name="p_number" value="<?php echo $w->phone_num;?>" type="text" class="bg-light form-control" placeholder="+63">  </div>
            </div>
            <div class="title-info"> VACCINATION STATUS</div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="vaccine">Vaccination Form Status</label> 
                    <select id="vaccine" name="vac_status"  class="bg-light">
                        <option value="select" selected>(Select)</option>
                        <option value="1stvac">Vaccinated 1st Dose</option>
                        <option value="2ndvac">Vaccinated 2nd Dose</option>
                        <option value="unvaccinated">Unvaccinated</option>
                    </select> 
                </div>

                </div>
            </div>
            <div class="d-sm-flex align-items-center py-4" id="change">
                <div class="title-info"> VERIFICATION STATUS
                    <p>Enter verification code sent to email.</p>   
                </div>
                    <div class="col-md-6 d-flex justify-content-evenly" >
                        <input name="activate" type="text" class="bg-light form-control" placeholder="Enter code..." style="width:150px"> 
                        <button class="ver btn success">Verified <i class="fa-solid fa-check-circle "></i></button>    
                    </div>
                
            </div>
            <div class="d-sm-flex align-items-center " id="change">
                <div class="title-info"> CHANGE PASSWORD
                    <p>Do not share your password to anyone.</p>   
                </div>
                <div class="" > <button class="btn danger">Change</button> </div>
            </div>

            <div class="py-2 pb-4 "> <button class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        </div>
    </div>
   
</div>
<?php }?> 
</form>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
      $('#upload_form').on('submit', function(e){  
           e.preventDefault();  
            alert("processing");
                $.ajax({  
                     url:"updateFinderAccount/1",   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
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
             
      });  
 });  
 </script>  
</html>








