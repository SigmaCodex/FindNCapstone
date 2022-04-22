<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>FindN Register</title>
      <link rel="stylesheet" href="assets/css/findnRegister.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    </head>
   <body>

    </div>
      <div class="container mt-3 mb-4 col-sm-5 col-md-6">

        <!-- background -->
        <div class="custom-shape-divider-top-1647366218" id="back">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <br>
        <!-- end -->
         <header>Finder Form</header>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Name
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Birth
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Vaccine
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>5</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
         <div class="col-md-6 pt-md-0 pt-3">
            <form id="registerform" class="" name="registerform">
               <div class="page slide-page">
                  <div class="title">
                     Basic Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        First Name
                     </div>
                     <input  name="fname" id="firstname" type="text">
                  </div>
                  <label id="errorfname"></label>
                  <div class="field">
                     <div class="label">
                        Last Name
                     </div>
                     <input  name="lastname" id="lastname"  type="text">
                  </div>
                  <label id="errorlname"></label>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Contact Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        Email Address
                     </div>
                     <input name="email" id="email" type="text" >
                  </div>
                  <label id="erroremail"></label>
                  <label id="erroremail"></label>
                  <div class="field">
                     <div class="label">
                        Phone Number
                     </div>
                     <input type="number" placeholder="+63" name="pnum" id="pnum">
                  </div>
                  <label id="errornum"></label>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Date of Birth:
                  </div>
                  <div class="field">
                     <div class="label">
                        Date
                     </div>
                     <input name="date" id="date"  type="date">
                  </div>
                  <label id="errordate"></label>
                  <div class="field">
                     <div class="label">
                        Gender
                     </div>
                     <select id="gender" name="gender">
                        <option value = "">Select..</option>
                        <option value = "Male">Male</option>
                        <option value = "Female">Female</option>
                        <option value = "Other">Other</option>
                     </select>
                  </div>
                  <label id="errorgender"></label>
                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Vaccine Information:
                  </div>
                  <div class="field">
                     <div class="label">
                        Vaccine Status
                     </div>
                     <select id="vac_status" name="vacstatus">
                        <option>Unvaccinated</option>
                        <option>Vaccinated 1st Dose</option>
                        <option>Vaccinated 2nd Dose</option>
                     </select>
                  </div>
                  <div class="field1">
                    <div class="label1">
                    </div>
                     <h6 style="">*If you were able to book for a specific shop make sure to present it to the attendant of the said computer cafe.</h6>
                     <br>
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <button class="next-3 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Login Details:
                  </div>
                  <div class="field">
                     <div class="label">
                        Username
                     </div>
                     <input id="username" type="text">
                  </div>
                  <label id="erroruser"></label>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input id="pass" type="password">
                  </div>
                  <label id="errorpass"></label>
                  <div class="field">
                     <div class="label">
                        Confirm Password
                     </div>
                     <input id="conpass" type="password">
                  </div>
                  <label id="errorconpass"></label>
                  <div class="field btns">
                     <button class="prev-4 prev">Previous</button>
                     <button class="registration_btn">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>

const defaultBtn = document.querySelector("#btn");

const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");

const prevBtnFourth = document.querySelector(".prev-3");
const nextBtnFourth = document.querySelector(".next-3");

const prevBtnFifth = document.querySelector(".prev-4");
const submitBtn = document.querySelector(".registration_btn");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

String.prototype.toCap = function () {
	return this.toLowerCase().replace(/^.|\s\S/g, function (str) {
		return str.toUpperCase();
	});
};


//--------------------------------------------------------------------
$("#firstname").keyup(function(){ 
   var fname = $("#firstname").val();
   if (fname.length == 0) {
		$("#firstname").css("border", "1.5px solid red");
	}
   if (fname.length != 0) {
		$("#firstname").css("border", "1.5px solid green");
	}
});
//--------------------------------------------------------------------
$("#lastname").keyup(function(){ 
   var lname = $("#lastname").val();
   if (lname.length == 0) {
		$("#lastname").css("border", "1.5px solid red");
	}
   if (lname.length != 0) {
		$("#lastname").css("border", "1.5px solid green");
	}
});
//--------------------------------------------------------------------
let regEmail =
		/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
$("#email").keyup(function(){ 
	var email = $("#email").val();
   if (!regEmail.test(email)) {
		$("#erroremail").text("Please input valid email").css("color", "red");
      $("#email").css("border", "1.5px solid red");
	}
   if (regEmail.test(email)) {
		$("#erroremail").text("");
      $("#email").css("border", "1.5px solid green");
	}
});
//--------------------------------------------------------------------
$("#pnum").keyup(function(){ 
   var number = $("#pnum").val();
   if (number.toString().length > 10 || number.toString().length < 9) {
		$("#errornum")
			.text("Invalid Phone Number")
			.css("color", "red");
      $("#pnum").css("border", "1.5px solid red");
	}
   if (number.length == 10) {
		$("#errornum").text("");
      $("#pnum").css("border", "1px solid green");
	}
});
//--------------------------------------------------------------------var pass = $("#pass").val(); var conpass = $("#conpass").val();
$("#pass").keyup(function(){ 
   var pass = $("#pass").val();
   var conpass = $("#conpass").val();
   if (pass.length == 0) {
		$("#pass").css("border", "1.5px solid red");
	}
   if (pass.length <= 7) {
		$("#pass").css("border", "1.5px solid red");
	}
   if (pass.length > 7) {
		$("#pass").css("border", "1.5px solid green");
	}
   if (pass != conpass) {
      $("#conpass").css("border", "1.5px solid red");
   }
   if(pass == conpass){
      $("#conpass").css("border", "1.5px solid green");
   }
});
$("#conpass").keyup(function(){ 
   var pass = $("#pass").val(); 
   var conpass = $("#conpass").val();
   if (pass != conpass) {
		$("#conpass").css("border", "1.5px solid red");
	}
   else {
      $("#conpass").css("border", "1.5px solid green");
   }
});

nextBtnFirst.addEventListener("click", function (event) {
	event.preventDefault();
	var fname = $("#firstname").val();
   var lname = $("#lastname").val();
   if (fname.length == 0) {
		// $("#errorfname").text("Please input your first name").css("color", "red");
      $("#firstname").css("border", "1.5px solid red");
	}
   if (lname.length == 0) {
		// $("#errorlname").text("Please input your last name").css("color", "red");
      $("#lastname").css("border", "1.5px solid red");
	}
	if (fname.length > 0 && lname.length > 0) {
		$("#firstname").css("border", "1.5px solid green");
		$("#lastname").css("border", "1.5px solid green");
		slidePage.style.marginLeft = "-25%";
		bullet[current - 1].classList.add("active");
		progressCheck[current - 1].classList.add("active");
		progressText[current - 1].classList.add("active");
		current += 1;
	}
   // $("label").text("");
});
nextBtnSec.addEventListener("click", function (event) {
	event.preventDefault();
	var email = $("#email").val();
	var number = $("#pnum").val();
	let regEmail =
		/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email == ""){
      $("#erroremail").text("Please input your email").css("color", "red");
      $("#email").css("border", "1.5px solid red");
   }
   if(number.length == 0){
      $("#errornum").text("Please input a number").css("color", "red");
      $("#email").css("border", "1.5px solid red");
   }
	if (regEmail.test(email) && number.toString().length == 10) {
		$("#erroremail").text("");
		$("#errornum").text("");
      $("#email").css("border", "1.5px solid green");
      $("#pnum").css("border", "1.5px solid green");
		slidePage.style.marginLeft = "-50%";
		bullet[current - 1].classList.add("active");
		progressCheck[current - 1].classList.add("active");
		progressText[current - 1].classList.add("active");
		current += 1;
	}
});
nextBtnThird.addEventListener("click", function (event) {
	event.preventDefault();
	var gender = $('select[name="gender"]').val();
	var date = document.getElementById("date").value;
   alert(date);
	if (date == "") {
		$("#errordate").text("Please input a date").css("color", "red");
      $("#date").css("border", "1.5px solid red");
	}
	if (gender == "") {
		$("#errorgender").text("Please select gender").css("color", "red");
      $('select[name="gender"]').css("border", "1.5px solid red");
	}
	if (!(date == "") && !(gender == "") && BDateValidator()) {
		$("#errordate").text("");
		$("#errorgender").text("");
      $("#date").css("border", "1.5px solid green");
      $('select[name="gender"]').css("border", "1.5px solid green");
		slidePage.style.marginLeft = "-75%";
		bullet[current - 1].classList.add("active");
		progressCheck[current - 1].classList.add("active");
		progressText[current - 1].classList.add("active");
		current += 1;
	}
});

//--------------------------------------------------------------------------------
nextBtnFourth.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "-100%";
	bullet[current - 1].classList.add("active");
	progressCheck[current - 1].classList.add("active");
	progressText[current - 1].classList.add("active");
	current += 1;
   $("label").text("");
});

prevBtnSec.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "0%";
	bullet[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	current -= 1;
   $("label").text("");
});
prevBtnThird.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "-25%";
	bullet[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	current -= 1;
   $("label").text("");
});
prevBtnFourth.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "-50%";
	bullet[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	current -= 1;
   $("label").text("");
});
prevBtnFifth.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "-75%";
	bullet[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	current -= 1;
   $("label").text("");
});

var isUserTaken ="";
   $("#username").keyup(function(){  
      var BASE_URL = "<?php echo base_url();?>";
      var uname = $("#username").val();

      if(uname != ""){

         $.ajax({
			url: BASE_URL+"checkuser/"+uname,
			type: "POST",
         success: function (data){
            isUserTaken = data;
            if(isUserTaken == "true"){
               $("#erroruser").text("Username is already taken").css("color", "red");
               $("#username").css("border", "1.5px solid red");
            }
            if(isUserTaken == "false"){
                  $("#erroruser").text("");
                  $("#username").css("border", "1.5px solid green");
            }
         }
         });
      }
      else {
         $("#erroruser").text("Please input username").css("color", "red");
         $("#username").css("border", "1.5px solid red");
      }  

      
   });

submitBtn.addEventListener("click", function (event) {
	event.preventDefault();
   var BASE_URL = "<?php echo base_url();?>";

	var name = $("#firstname").val().toCap();
	var lname = $("#lastname").val().toCap();

	var email = $("#email").val();
	var phonenum = $("#pnum").val().toString();

	var uname = $("#username").val();
	var pass = $("#pass").val();
	var conpass = $("#conpass").val();

	var bdate = new Date($("#date").val());
	var day = bdate.getDate();
	var month = bdate.getMonth() + 1;
	var year = bdate.getFullYear();
	var actbdate = [day, month, year].join("/");
	var gender = $('select[name="gender"]').val();

	var vacstatus = $('select[name="vacstatus"]').val();

	if (uname == "") {
		$("#erroruser").text("Please enter user name").css("color", "red");
	}
	if (uname.toString().length > 25 ) {
		$("#erroruser")
			.text("Shorter than 25 characters")
			.css("color", "red");
	}
	if (pass == "") {
		$("#errorpass").text("Please enter your password").css("color", "red");
	} else if (pass.toString().length < 5  ) {
		$("#errorpass")
			.text("Password is too weak.")
			.css("color", "red");
	}
	if (pass != conpass) {
		$("#errorconpass").text("Password is incorrect").css("color", "red");
	}

	if (pass.toString().length >= 8 && pass == conpass && isUserTaken == "false") {
		$.ajax({
			url: "registerfinder",
			type: "POST",
			data: {
				firstname: name,
				lastname: lname,
				pnum: phonenum,
				birthdate: actbdate,
				username: uname,
				email: email,
				pass: pass,
				conpass: conpass,
				gender: gender,
				vacstatus: vacstatus,
			},
			// contentType: false,
			//       cache: false,
			// processData:false,
			// beforeSend : function()
			// {
			// //$("#preview").fadeOut();
			// // $("#err").fadeOut();
			// alert("processing");
			// },
			success: function (data) {
				// bullet[current - 1].classList.add("active");
				// progressCheck[current - 1].classList.add("active");
				// progressText[current - 1].classList.add("active");
				// current += 1;
				setTimeout(function () {
					swal({
					title: "Good job!",
					text: "Account has been registered!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
               window.location =  BASE_URL+"findnlogin";
				});

				}, 800);
			},
		});
	}
});

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
      <style>
         label.error {
	         color: #f7b733;
         }
      </style>

   <script>
        $("#pnum").on("input", function() {
            if (/^0/.test(this.value)) {
                this.value = this.value.replace(/^0/, "")
            }
        })
    </script>

   </body>
</html>