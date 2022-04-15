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
                     <input type="text"   name="pnum" id="pnum">
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

nextBtnFirst.addEventListener("click", function (event) {
	event.preventDefault();
	var fname = $("#firstname").val();
	var lname = $("#lastname").val();
	if (fname.length == 0) {
		$("#errorfname").text("Please input your first name").css("color", "red");
	}
	if (lname.length == 0) {
		$("#errorlname").text("Please input your last name").css("color", "red");
	}
	if (fname.length > 0 && lname.length > 0) {
		$("#errorfname").text("");
		$("#errorlname").text("");
		slidePage.style.marginLeft = "-25%";
		bullet[current - 1].classList.add("active");
		progressCheck[current - 1].classList.add("active");
		progressText[current - 1].classList.add("active");
		current += 1;
	}
});
nextBtnSec.addEventListener("click", function (event) {
	event.preventDefault();
	var email = $("#email").val();
	var number = $("#pnum").val();
	let regEmail =
		/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (!regEmail.test(email)) {
		$("#erroremail").text("Please input your first name").css("color", "red");
	}
	if (number.toString().length > 11 || number.toString().length < 11) {
		$("#errornum")
			.text("Number must be 11 digits long along with first zero")
			.css("color", "red");
	}
	if (regEmail.test(email) && number.toString().length == 11) {
		$("#erroremail").text("");
		$("#errornum").text("");
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
	if (date == "") {
		$("#errordate").text("Please input a date").css("color", "red");
	}
	if (gender == "") {
		$("#errorgender").text("Please select gender").css("color", "red");
	}
	if ($("#registerform").valid() && !(gender == "")) {
		$("#errordate").text("");
		$("#errorgender").text("");
		slidePage.style.marginLeft = "-75%";
		bullet[current - 1].classList.add("active");
		progressCheck[current - 1].classList.add("active");
		progressText[current - 1].classList.add("active");
		current += 1;
	}
});
nextBtnFourth.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "-100%";
	bullet[current - 1].classList.add("active");
	progressCheck[current - 1].classList.add("active");
	progressText[current - 1].classList.add("active");
	current += 1;
});

prevBtnSec.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "0%";
	bullet[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	current -= 1;
});
prevBtnThird.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "-25%";
	bullet[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	current -= 1;
});
prevBtnFourth.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "-50%";
	bullet[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	current -= 1;
});
prevBtnFifth.addEventListener("click", function (event) {
	event.preventDefault();
	slidePage.style.marginLeft = "-75%";
	bullet[current - 2].classList.remove("active");
	progressCheck[current - 2].classList.remove("active");
	progressText[current - 2].classList.remove("active");
	current -= 1;
});

var isUserTaken ="";
   $("#username").keyup(function(){  
      var BASE_URL = "<?php echo base_url();?>";
      var uname = $("#username").val();
      $.ajax({
			url: BASE_URL+"checkuser/"+uname,
			type: "POST",
         success: function (data){
            isUserTaken = data;
            if(isUserTaken == "false"){
               $("#erroruser").text("Username is already taken").css("color", "red");
            }
            if(isUserTaken == "true"){
               $("#erroruser").text("");
            }
            console.log(data);
         }
         });
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

	if (username == "") {
		$("#erroruser").text("Please enter user name").css("color", "red");
	}
	if (username.toString().length < 8) {
		$("#erroruser")
			.text("Username should not be shorter than 8 characters")
			.css("color", "red");
	}
	if (pass == "") {
		$("#errorpass").text("Please enter your password").css("color", "red");
	} else if (pass.toString().length < 8) {
		$("#errorpass")
			.text("Password should be 8 or more characters long")
			.css("color", "red");
	}
	if (pass != conpass) {
		$("#errorconpass").text("Password is incorrect").css("color", "red");
	}



	if (pass.toString().length >= 8 && pass == conpass && isUserTaken == "true") {
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

// $(document).ready(function(){ 
   
// });

      </script>
      <style>
         label.error {
	         color: #f7b733;
         }
      </style>
   </body>
</html>