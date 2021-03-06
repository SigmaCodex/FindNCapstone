(function ($) {
	"use strict";

	$('[data-toggle="tooltip"]').tooltip();
})(jQuery);

//input validation

$(document).ready(function () {
	$("#addadminform").validate({
		rules: {
			first: {
				required: true,
				minlength: 2,
			},
			last: {
				required: true,
				minlength: 2,
			},
			pnum: {
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
			vacstatus: {
				required: true,
			},
			status: {
				required: true,
			},
			gender: {
				required: true,
			},
		},
		messages: {
			first: {
				required: "Please enter your first name",
				minlength: "Name should atleast have 2 characters",
			},
			last: {
				required: "Please enter your last name",
				minlength: "Name should atleast have 2 characters ",
			},
			pnum: {
				required: "Please enter your phone number",
				number: "Please enter numbers only",
			},
			email: {
				required: "Please enter your email",
			},
			username: {
				required: "Please enter your username",
				minlength: "Username should be atleast 8 characters",
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
//inserting data with AJAX

$(document).on("click", "#addadminbtn", function () {
	var validator = $("#addadminform").validate();
	if ($("#addadminform").valid()) {
		var CSPK = $("#CompShopPK").text();
		var fname = $("#first").val();
		var lname = $("#last").val();
		var uname = $("#username").val();
		var phonenum = $("#pnum").val();
		var email = $("#email").val();
		var pass = $("#pass").val();
		var conpass = $("#conpass").val();

		var bdate = new Date($("#date").val());
		var day = bdate.getDate();
		var month = bdate.getMonth() + 1;
		var year = bdate.getFullYear();

		var actbdate = [day, month, year].join("/");

		//select tag
		var gender = $('select[name="gender"]').val();
		var vacstatus = $('select[name="vacstatus"]').val();

		$.ajax({
			url: "http://localhost/FindNCapstone/registeradmin",
			type: "POST",
			data: {
				shop_id: CSPK,
				firstname: fname,
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
			// 	// contentType: false,
			// 	//       cache: false,
			// 	// processData:false,
			// beforeSend : function()
			// {
			// //$("#preview").fadeOut();
			// // $("#err").fadeOut();
			// alert("processing");
			// },
			success: function (data) {
				swal({
					title: "Good job!",
					text: "Admin has been registered!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
					// $("#closebtn").trigger("click");
					window.location = "http://localhost/FindNCapstone/admin-list/" + CSPK;
				});
			},
		});

		// $("#CompShopPK").text("");
		// $("#first").val("");
		// $("#last").val("");
		// $("#username").val("");
		// $("#pnum").val("");
		// $("#email").val("");
		// $("#pass").val("");
		// $("#conpass").val("");
		// $("#date").val("");

		//select tag
		$('select[name="gender"]').val("");
		$('select[name="vacstatus"]').val("");
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
	}
});

$(document).on("click", "#editbtn", function () {
	var CSPK = $("#CompShopPK").text();
	alert(CSPK);
	$.ajax({
		url: "http://localhost/FindNCapstone/getshopdetails/" + CSPK,
		method: "POST",
		data: { shop_id: CSPK },
		dataType: "json",
		success: function (data) {
			$("#shopName").val(data.shop_name);
			$("#c_number").val(data.contact_number);
			$("#emailadd").val(data.email_address);
			$("#Address").val(data.address);

			let text = data.coordinates;
			const myArray = text.split(",");

			var lat = myArray[0];
			var lng = myArray[1];

			$("#lat").val(lat);
			$("#lng").val(lng);

			$("#updateComputerModal").modal("show");
		},
	});
});
$(document).on("click", "#updatecomputershopbtn", function () {
	var validator = $("#updatecompform").validate();
	if ($("#updatecompform").valid()) {
		var id = $(this).attr("data");
		var s_name = $("#shopName").val();
		var c_number = $("#c_number").val();
		var email = $("#email").val();
		var add = $("#Address").val();
		var lat = $("#lat").val();
		var lng = $("#lng").val();
		var coordinate = lat + "," + lng;

		$.ajax({
			url: "updateshopdetails/" + id,
			method: "POST",
			data: {
				shop_name: s_name,
				number: c_number,
				email_add: email,
				address: add,
				coor: coordinate,
			},
			success: function (data) {
				// window.location = "listofcomputershop";
				swal({
					title: "Good job!",
					text: "ComputerShop has been registered!",
					icon: "success",
					button: "Continue",
				}).then((value) => {
					window.location = "listofcomputershop";
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
	}
});
