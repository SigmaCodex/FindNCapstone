$(document).on("click", "#addratebtn", function () {
	var gender = $('input[name="gender"]:checked').val();

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

	// alert(actbdate);
});
