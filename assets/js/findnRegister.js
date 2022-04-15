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

// $(document).on("click", "#registration_btn", function (event) {
// 	event.preventDefault();

// 	var name = $("#firstname").val();
// 	var lname = $("#lastname").val();
// 	var uname = $("#username").val();
// 	var phonenum = $("#p_numberform").val();
// 	var email = $("#email").val();
// 	var pass = $("#pass").val();
// 	var conpass = $("#conpass").val();

// 	if (pass.toString().length < 8) {
// 		$("#errorpass")
// 			.text("Password should be 8 or more characters long")
// 			.css("color", "red");
// 	}
// 	if (pass != conpass) {
// 		$("#errorconpass").text("Password is incorrect").css("color", "red");
// 	}
// 	if (pass.toString().length >= 8 && pass == conpass) {
// 		alert(name + lname + uname + phonenum + email + pass + conpass);
// 	}
// });

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
