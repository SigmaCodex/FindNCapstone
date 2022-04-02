<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Profile</title>

    <link rel="stylesheet" href="assets/css/accountSettings.css">

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
                <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email</label> <input id="email" name="email" type="email" value="<?php echo $w->email;?>" class="bg-light form-control">  </div>
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
                    <p>Enter verification code sent to your email.</p>   
                </div>
                    <div class="col-md-6 d-flex justify-content-evenly" >
                        <?php
                       if(isset($status)){
                           
                            if($status == "verified"){
                                echo " <div class='ver btn btn-success' disabled>Verified <i class='fa-solid fa-check-circle '></i></div>";
                            }else{
                                echo "<div class='ver btn btn-outline-primary' id='click-verify-btn' data-toggle='modal' data-target='#AccountVerificationModal'>Click to Verify <i class='fa-solid fa-envelope '></i></div>";
                            }
                        }    
                        ?>
                        <!-- <div class="ver btn btn-outline-primary" id="click-verify-btn" data-toggle="modal" data-target="#AccountVerificationModal">Click to Verify<i class="fa-solid fa-envelope "></i></div>
                        <div class="ver btn success" disabled>Verified<i class="fa-solid fa-check-circle "></i></div> -->
                    </div>
                
            </div>
            <div class="d-sm-flex align-items-center py-4" id="change">
                <div class="title-info"> CHANGE PASSWORD
                    <p>Do not share your password to anyone.</p>   
                </div>
                <div class="" > <button class="btn danger">Change</button> </div>
            </div>
            <?php
                if(isset($status)){
                    if($status == "verified"){
                        echo "
                        <div class='d-sm-flex align-items-center py-2' id='change'>
                            <div class='title-info'> Disable Account
                                <p>You will Disabled your account</p>   
                            </div>
                            <div class='btn danger' id='disable_account'> Click To Disable </div>
                        </div>";
                    }
                }    
            ?>


            <div class="py-2 pb-4 "> <button class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        </div>
    </div>
   
</div>
<?php }?> 
</form>


</body>

<!-- modal style  -->
<style>
    .form-verification {
  padding: 2rem;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0,0,0,.1);
  max-width: 500px;
  background: #fff;
  
  }
  .verificationform-control {
    display: block;
    height: 50px;
    margin-right: 0.5rem;
    text-align: center;
    font-size: 1.25rem;
    min-width: 0;
    
    &:last-child {
      margin-right: 0;
    }
}
</style>
<!-- Modals -->
<div class="modal fade" id="AccountVerificationModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Account Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="justify-content: center;">
      <div class="form-verification">
        <h4 class="text-center mb-4">Enter your code</h4>
        <div class="d-flex mb-3">
            <input type="text" id="1st" maxlength="1"  class="verificationform-control">
            <input type="text" id="2nd" maxlength="1"  class="verificationform-control">
            <input type="text" id="3rd" maxlength="1"  class="verificationform-control">
            <input type="text" id="4th"maxlength="1" class="verificationform-control">
            <input type="text" id="5th" maxlength="1" class="verificationform-control">
            <input type="text" id="6th" maxlength="1"  class="verificationform-control">
        </div>
        <button id="btn-code-submit" class="w-100 btn btn-primary">Verify account</button>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<!-- ajax for updating account -->
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
 <!-- verify account -->
 <script>
    $(document).on('click','#btn-code-submit',function(){ 
        var first = $("#1st").val();
        var second = $("#2nd").val();
        var third = $("#3rd").val();
        var fourth = $("#4th").val();
        var fifth = $("#5th").val();
        var sixth = $("#6th").val();
    

        var code = first+second+third+fourth+fifth+sixth;
        
        $.ajax({
				url:"checkVerificationCode",
				method: "POST",
				data: {input_code:code},
				success: function (data) {


                    if(data == "Match"){
                        swal({
                            title: "Account Verified Successfully",
                            text: "",
                            icon: "success",
                            button: "Continue",
                            }).then((value) => {
                                    location.reload();
                            }); 
                          
                    }else{
                        swal(
							'Code Not Match!',
							'Please Check your Code or Check your Email',
							'error'
						)
                    }



                },
		});	
        
    });
 </script>
 <script>
    $(document).on('click','#click-verify-btn',function(){ 
        var emailaddress = $('#email').val();

        $.ajax({
				url:"sendVerificationCodeToEmail",
				method: "POST",
				data: {email:emailaddress},
				success: function (data) {
                    alert(data);
                },
		});	

       
    });
 </script>
 <!-- disable account -->
 <script>
    $(document).on('click','#disable_account',function(){ 

        swal({
  				title: "Are you sure to delete Account?",
  				icon: "warning",
  				buttons: true,
  				dangerMode: true,
			}).then((willDelete) => {
  				if (willDelete) {

                    $.ajax({
                            url:"disableFinderAccountStatus",
                            method: "POST",
                            data: {},
                            success: function (data) {
                                window.location = "findnlogin";
                            },
                    });	

  				}
			});





       
    });


 </script>
</html>








