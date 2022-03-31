//image upload
const fileName = document.querySelector(".file-name");
const defaultBtn = document.querySelector("#default-btn");
const wrapper = document.querySelector(".wrapper");
const cutomBtn = document.querySelector("#custom-btn");
const img = document.querySelector("img");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

// function uploadImage() {
// 	defaultBtn.click();
// }
// defaultBtn.addEventListener("change", function () {
// 	const file = this.files[0];
// 	if (file) {
// 		const reader = new FileReader();
// 		reader.onload = function () {
// 			const result = reader.result;
// 			img.src = result;
// 			wrapper.classList.add("active");
// 		};
// 		reader.readAsDataURL(file);
// 	}
// 	if (this.value) {
// 		let valueStore = this.value.match(regExp);
// 		fileName.textContent = valueStore;
// 	}
// });

//input validation
$(document).ready(function () {
	$("#resgistrationform").validate({
		rules: {
			fname: {
				required: true,
				minlength: 2,
			},
			lastname: {
				required: true,
				minlength: 2,
			},
			p_numberform: {
				required: true,
				number: true,
				minlength: 11,
				maxlength: 11,
			},
			email: {
				required: true,
				email: true,
			},
			date: {
				required: true,
			},
			username: {
				required: true,
				minlength: 8,
				maxlength: 16,
			},
			pass: {
				required: true,
				minlength: 8,
			},
			conpass: {
				required: true,
				minlength: 8,
				equalTo: "#pass",
			},
		},
		messages: {
			fname: {
				required: "Please enter your first name",
				minlength: "Name should atleast have 2 characters",
			},
			lastname: {
				required: "Please enter your last name",
				minlength: "Name should atleast have 2 characters ",
			},
			p_numberform: {
				required: "Please enter your phone number",
				number: "Please enter numbers only",
			},
			email: {
				required: "Please enter your email",
			},
			username: {
				required: "Please enter your username",
				minlength: "Username should be atleast 4 characters",
				maxlength: "Username should not be long than 8 characters",
			},
			pass: {
				required: "Please enter your password",
				minlength: "Password should be 8 or more characters long",
			},
			conpass: {
				required: "Please re enter your password",
				equalTo: "Incorrect password",
			},
		},
	});
});
//radiobutton validation
$(document).ready(function () {
	$("#registration_btn").click(function () {
		if ($("input[name='gender']:checked").length == 0) {
			$("#errorgender").text("Please choose an option").css("color", "red");
		}
		if ($("input[name='vacstatus']:checked").length == 0) {
			$("#errorvac").text("Please choose an option").css("color", "red");
		}
	});
});

jQuery(document).ready(function () {
	jQuery("input[name=gender]:radio").click(function () {
		$("#errorgender").text("");
	});
});

jQuery(document).ready(function () {
	jQuery("input[name=vacstatus]:radio").click(function () {
		$("#errorvac").text("");
	});
});

//inserting data with AJAX

$(document).on("click", "#registration_btn", function () {
	var validator = $("#resgistrationform").validate();
	if ($("#resgistrationform").valid()) {
		var name = $("#firstname").val();
		var lname = $("#lastname").val();
		var uname = $("#username").val();
		var phonenum = $("#p_numberform").val();
		var email = $("#email").val();
		var pass = $("#pass").val();
		var conpass = $("#conpass").val();

		var bdate = new Date($("#date").val());
		var day = bdate.getDate();
		var month = bdate.getMonth() + 1;
		var year = bdate.getFullYear();
		var actbdate = [day, month, year].join("/");

		//radiobutton
		var gender = $('input[name="gender"]:checked').val();
		var vacstatus = $('input[name="vacstatus"]:checked').val();

		// alert(uname);
		// alert(pass);

		//communication within the server nani ivan
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
				swal({
					title: "Good job!",
					text: "You have been registered!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
					window.location = "loginpage";
				});
			},
		});
	} else {
		swal(
			{
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false,
				//closeOnCancel: false
			},
			function () {
				swal("Deleted!", "Your imaginary file has been deleted!", "success");
			}
		);

		// alert(actbdate);
	}
});
//register button end

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
