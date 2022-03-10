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
      <form id="resgistrationform" class="form" method="get" name="registerform">
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
        <div class="button">
          <input type="submit" value="Register" id="registration_btn">
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
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
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
$(document).ready(function(){
  $("#resgistrationform").validate({
      rules: {
        fname: {
          required: true,
          minlength: 2
	      },
        lastname: {
          required: true,
          minlength: 2
        },
        p_numberform: {
          required: true,
          number:true,
          minlength:10,
          maxlength:10 
        },
        email: {
          required: true,
          email: true
        },
        date: {
          required: true
        },
        username: {
          required:true,
          minlength:4,
          maxlength:8
        },
        pass: {
          required: true,
          minlength:8
        },
        conpass: {
          required: true,
          minlength:8,
          equalTo : "#pass"
        }
      },
      messages: {
        fname: {
          required: "Please enter your first name",
          minlength: "Name should atleast have 2 characters"
	    },
        lastname: {
          required: "Please enter your last name",
          minlength: "Name should atleast have 2 characters "
        },
        p_numberform: {
          required: "Please enter your phone number",
          number:"Please enter numbers only",
        },
        email: {
          required: "Please enter your email",
        },
        username: {
          required:"Please enter your username",
          minlength:"Username should be atleast 4 characters",
          maxlength:"Username should not be long than 8 characters"
        },
        pass: {
          required: "Please enter your password",
          minlength:"Password should be 8 or more characters long"
        },
        conpass: {
          required: "Please re enter your password",
          equalTo: "Incorrect password"
	      }
      },
  });
});
      $(document).ready(function () {

         $("#registration_btn").click(function () {
          if($("input[name='gender']:checked").length == 0){
            $("#errorgender").text("Please choose an option").css("color","red");
          }
          if($("input[name='vacstatus']:checked").length == 0){
            $("#errorvac").text("Please choose an option").css("color","red");
          }
         });
     });

  jQuery(document).ready(function(){
    jQuery('input[name=gender]:radio').click(function(){
      $("#errorgender").text("");
    });
  });

  jQuery(document).ready(function(){
    jQuery('input[name=vacstatus]:radio').click(function(){
      $("#errorvac").text("");
    });
  });

</script>
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
    // $(document).on('keypress','#p_numberform',function(){  

    //   var phone = $('#p_numberform').val();
    //      var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    //     if(phone == ""){
    //         $("#p_numberform").css("border-color","red");
          
    //     }else if(!phone.match(phoneNum) || phone.length != 10){
    //         $("#p_numberform").css("border-color","red");
    //         $("#errorphone").text("dli match").css("color","red");
    //     }else{
    //         $("#p_numberform").css("border-color","green");
    //         $("#errorphone").text("goodsna").css("color","green");
    //     }

    // });
</script>
</html>
