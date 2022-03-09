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
      <form id="resgistrationform">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" id="firstname" placeholder="Enter your first name" >
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your last name" >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="p_numberform" placeholder="Enter your number" >
            <h5 id="error"></h5>
          </div>
          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" id="date" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="username" placeholder="Enter your password">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" placeholder="Enter your Email" >
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="pass" placeholder="Enter your password" >
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="conpass" placeholder="Confirm your password" >
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1">
          <input type="radio" name="gender" value="Female"id="dot-2">
          <input type="radio" name="gender" value="Not to say"id="dot-3">
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
                <div class="button">
                <input type="submit" value="Register" id="registration_btn">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
<script src="assets/js/jquery/jquery.min.js"></script>
<!-- <script>
const fileName = document.querySelector(".file-name");
const defaultBtn = document.querySelector("#default-btn");
const wrapper = document.querySelector(".wrapper");
const cutomBtn = document.querySelector("#custom-btn");
const img = document.querySelector("img");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

function uploadImage(){
  defaultBtn.click();
}
defaultBtn.addEventListener("change",function(){
  const file = this.files[0];
  if(file){
    const reader = new FileReader();
    reader.onload = function(){
      const result = reader.result;
      img.src = result;
      wrapper.classList.add("active");
    }
      reader.readAsDataURL(file);   
  }
  if(this.value){
      let valueStore = this.value.match(regExp);
      fileName.textContent = valueStore;
  }
});
</script> -->

<script>
    $(document).on('click','#registration_btn',function(){  
        var name  = $("#firstname").val();
        var lname = $("#lastname").val();
        var uname = $("#username").val();
        var phonenum = $("#p_numberform").val();

        var bdate = new Date($('#date').val());
        var day = bdate.getDate();
        var month = bdate.getMonth() + 1;
        var year = bdate.getFullYear();
        
        var actbdate = [day, month, year].join('/');

        var email = $("#email").val();
        var pass = $("#pass").val();
        var conpass = $("#conpass").val();

        var gender = $('input[name="gender"]:checked').val();
        var vacstatus = $('input[name="vacstatus"]:checked').val();


      //communication within the server nani ivan
         $.ajax({
           url: "registerfinder",
           type: "POST",
           data:{firstname:name,lastname:lname,pnum:phonenum,birthdate:actbdate,username:uname,email:email,pass:pass,conpass:conpass,gender:gender,vacstatus:vacstatus},
           // contentType: false,
           //       cache: false,
           // processData:false,
           beforeSend : function()
           {
             //$("#preview").fadeOut();
             // $("#err").fadeOut();
           alert("processing");
           },
           success: function(data)
           {
             alert(data);
           }
        
         });

          // alert(actbdate);
          

    });

    
    // simple validation for phonenumber
    $(document).on('keypress','#p_numberform',function(){  

      var phone = $('#p_numberform').val();
         var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(phone == ""){
            $("#p_numberform").css("border-color","red");
          
        }else if(!phone.match(phoneNum) || phone.length != 10){
            $("#p_numberform").css("border-color","red");
            $("#error").text("dli match").css("color","red");
        }else{
            $("#p_numberform").css("border-color","green");
            $("#error").text("goodsna").css("color","green");
        }

    });
</script>
</script>





</html>
