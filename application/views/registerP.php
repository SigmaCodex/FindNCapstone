<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/registerP.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<!-- <img class="wave" src="assets/images/wavy.png"> -->
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form id="resgistrationform" class="form" name="registerform">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" id="firstname" placeholder="Enter your first name" >
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your last name" > 
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="p_numberform" id="p_numberform" placeholder="Enter your number" >
          </div>
          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" name="date" id="date" >
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Enter your password" >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" id="email" placeholder="Enter your Email" >
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" id="pass" placeholder="Enter your password" >
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="conpass" id="conpass" placeholder="Confirm your password" >
          </div>
        </div>
        <!-- <div class="example">
        <button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
        </div> -->
        <div class="gender-details">
          <input type="radio" name="gender" value="Male"        id="dot-1">
          <input type="radio" name="gender" value="Female"      id="dot-2">
          <input type="radio" name="gender" value="Not to say"  id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
          <h5 id="errorgender"></h5>
        </div>
        <div class="gender-details">
          <input type="radio" name="vacstatus" value="1st Dose" id="vdot-1">
          <input type="radio" name="vacstatus" value="2nd Dose" id="vdot-2">
          <span class="gender-title">Vaccination Status</span>
          <div class="category">
            <label for="vdot-1">
            <span class="dot vone"></span>
            <span class="gender">1st Dose</span>
          </label>
          <label for="vdot-2">
            <span class="dot vtwo"></span>
            <span class="gender">2nd Dose</span>
          </label>
          </div>
          <h5 id="errorvac"></h5>
        </div>
        <div class="button" >
          <input type="" value="Register" id="registration_btn" disabled="disabled">        
        </div>
      </form>

      <form>
        <div class="imagebody">
          <div class="container1">
            <span class="gender-title">Vaccination Card</span>
              <div class="wrapper">
                <div class="image">
                  <img src=" " alt="">
                </div>
                <div class="content1">
                  <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                  <div class="icon">No image yet</i></div>
                </div>
                <div id="cancel-btn"><i class="fas fa-times"></i></div>
                  <div class="file-name">File name here</div>
                </div>
                <div class="button">
                  <input id="default-btn" type="file" hidden>
                  <button onclick="uploadImage()" id="custom-btn">Choose a file</button>
                </div>   
                
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
<script src="assets/js/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="assets/js/registerP.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</html>
