<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/accountSettings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!-- SVG top-->
<!-- <div class="custom-shape-divider-top-1647103383">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div> -->
<!-- img upload css -->
<style>
  
</style>

<!--Navigation Bar-->
<input type="checkbox" id="check">
<!--Start header-->
<header class="p-2">
    <label for="check">
        <i class="fa-solid fa-bars" id="side_bar_btn" onclick = "btn();"></i>
    </label>
    <div class="logo_holder d-flex justify-content-center align-items-center align-self-center" >
        <img class="logo" src="assets/Images/logo.png"> 
        <p class="fs-4 pt-1 my--1 mb-4 fw-bolder" style="font-family: 'NordiquePro-Bold', sans-serif; font-size: 35px;">FindN</p>
    </div>
   
</header>
<!--End header-->


<!--Sidebar start-->
<div class="side_bar" id="side_bar_show" style="display:none;" >
    <div class="centerA">
        <img src="assets/Images/Prof.png" class="profile_image" alt="">
        <h4>Junky Dubs</h4>
    </div>
    <a href="#" class="m-0 w-100"><i class="fa-solid fa-home fa-fw"></i><span>Home</span></a>
    <a href="#" class="m-0 w-100"><i class="fa-solid fa-history"></i><span>History</span></a>
    <a href="#" class="m-0 w-100"><i class="fa-solid fa-tasks"></i><span>Pending Booking</span></a>
    <a href="#" class="m-0 w-100"><i class="fa-solid fa-share-alt"></i><span>Settings</span></a>
    <a href="#" class="m-0 w-100"><i class="fa-solid fa-question-circle"></i><span>About</span></a>
    <a href="#" class="m-0 w-100"><i class="fa-solid fa-door-open"></i><span>Logout</span></a>
    
</div>

<!-- Content Inside -->
<form method="post" id="upload_form" enctype="multipart/form-data"> 
<div class="container my-2 ">
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="tit pb-4 border-bottom">Account Settings</h4>
        <div class="d-flex align-items-start py-3 border-bottom"> 
            <!-- img Upload Update -->
            <!-- <img src="assets/Images/Prof.png" class="img" alt=""> -->

            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url(assets/Images/Prof.png);">
                    </div>
                </div>
            </div>
            <div class="pp pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                <p>Accepted file type (.png). Less than 5MB</p>
            </div>


            <!-- end of img upload -->
        </div>
        <div class="py-2">
            <div class="title-info"> <b>USER INFORMATION</b>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" name="f_name" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" name="l_name" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Birthday</label> <input type="date" name="b_date" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="gender">Gender</label>  
                <select name="gender" id="gender" class="bg-light">
                    <option value="select" selected>(Select)</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="female">Other</option>
                </select>
                </div>
            </div>
            <br>
            <div class="title-info"> <b>ACCOUNT INFORMATION</b>
             <div class="row py-2">
                <div class="col-md-6"> <label for="username">Username</label> <input name="username" type="text" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email</label> <input type="email" class="bg-light form-control"> </div>
                <div class="col-md-6"> <label for="phone">Phone Number</label> <input  name="p_number" type="text" class="bg-light form-control" placeholder="+63"> </div>
            </div>
            <div class="title-info"> <b>VACCINATION STATUS</b></div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="vaccine">Vaccination Form Status</label> 
                    <select id="vaccine" name="vac_status" class="bg-light">
                        <option value="select" selected>(Select)</option>
                        <option value="1stvac">Vaccinated 1st Dose</option>
                        <option value="2ndvac">Vaccinated 2nd Dose</option>
                        <option value="unvaccinated">Unvaccinated</option>
                    </select> 
                </div>
                <div class="col-md-6"> <label for="vaccine">Status</label><div class="ml-auto"> 
                    <button class="ver btn success">Verified <i class="fa-solid fa-check-circle "></i></button>
                    <button class="btn button border"><b>Upload</b></button>
                </div>
            </div>
            <div class="d-sm-flex align-items-center pt-5 " id="change">
                <div class="title-info mx-3"> <b>CHANGE PASSWORD</b>
                    <p>Do not share your password to anyone.</p>   
                </div>
                <div class="ml-auto mx-3" > <button class="btn danger">Change</button> </div>
            </div>
            <br>
            <!-- <br><button type="submit" class="btn btn-primary mr-3" id="btn-update" valu>Save Changes</button> -->
            <div class="py-2 pb-4 mx-3 "><input type="submit" type="submit" class="btn btn-primary mr-3" id="btn-update" >  <button class="btn border button">Cancel</button> </div>
        </div>
    </div>
    
</div>
</form>

</body>
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
                         alert(data);
                     }  
                });  
             
      });  
 });  
 </script>  
</html>








