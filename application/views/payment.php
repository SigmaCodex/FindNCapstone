<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sample Payment Form Exercise</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
	  .icon:hover{
		transform: scale(1.2);
	  }
  </style>
</head>
<body>
<div class="container">
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="card">
      <div class="card-body">
        <div class="row d-flex justify-content-center pb-5">
          <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
            <div class="py-4 d-flex flex-row">
              <h5> <b style="color:#f59660">Find</b><b>N</b> |</h5>
              <span class="ps-2">Payment Overview</span>
            </div>
            <!-- <h4 class="text-success">$85.00</h4> -->
            <h4 id="shop">Tnc Pro Cebu</h4>
            <div class="d-flex pt-2">
              <div>
                <p>
                  <b id="service-type">Computer Booking</b>
                </p>
              </div>
            </div>
			<div class="rounded d-flex" style="background-color: #f8f9fa;">
              <div class="p-2">Computer-type:</div>
              <div class="ms-auto p-2" style="color:#f59660">VIP</div>
            </div>
			<br>
			<div class="rounded d-flex" style="background-color: #f8f9fa;">
              <div class="p-2">Number Of Person:</div>
              <div class="ms-auto p-2" style="color:#f59660">1</div>
            </div>
			<br>
			<div class="p-2 d-flex">
                <div class="col-3">Name:</div>
                <div class="ms-auto" id="b_name">John Dave Delgado</div>
            </div>
			<div class="p-2 d-flex">
                <div class="col-3">Email:</div>
                <div class="ms-auto" id="b_email">Hackmetry01@gmail.com</div>
            </div>
			<div class="p-2 d-flex contact-display">
                <div class="col-5">ContactNumber:</div>
					<div class="ms-auto show-number" id="b_contactnum">09225847075</div>
					<i class="col-3 fa fa-edit icon edit-icon"></i>
            </div>

				<div class="p-2 d-flex">
					<input type="number" class="ms-auto form-control  edit-contact-form" id="contact-input" style="display:none">
					<div class="col-2 row">
					<i class="col-6 fa fa-close icon edit-contact-form" id="close-edit"style="display:none"></i>
					<i class="col-6 fa fa-check icon" id="update-contact"style="display:none"></i>
					</div>
				</div>

            <hr/>

            <div class="pt-2">
              <div class="d-flex pb-2">
                <div>
                  <p>
                    <b>PaymentMethod</b>
                  </p>
                </div>
              </div>
			  <div class="d-flex flex-column mb-3">
					<div class="btn-group-vertical" role="group" aria-label="Vertical button group">

						<label class="btn btn-outline-primary btn-lg" id="btngcash" for="option1">
						<div class="d-flex justify-content-between">
						    <img src="https://getpaid.gcash.com/assets/img/paynow.png">
							<!-- <span>Gcash</span> -->
							<span class="show-number">09262247240</span>
						</div>
						</label>

						<label class="btn btn-outline-primary btn-lg" for="option2">
						<div class="d-flex justify-content-center">
							<span>Over The Counter</span>
						</div>
						</label>
					</div>
       		 	</div>
            </div>
          </div>

          <div class="col-md-5 col-xl-4 offset-xl-1">
            <div class="py-4 d-flex justify-content-end">
              <h6><a href="#!">Cancel Booking</a></h6>
            </div>
            <div
              class="rounded d-flex flex-column p-2"
              style="background-color: #f8f9fa;"
            >
            <div class="p-3 me-4">
                <h4>Booking Recap</h4>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Computer Shop:</div>
                <div class="ms-auto">Tnc Pro Cebu</div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Service Type:</div>
                <div class="ms-auto">Computer Booking</div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Computer Type:</div>
                <div class="ms-auto">VIP</div>
              </div>
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
			    
                <div class="col-8"><i class="fa fa-calendar-o"></i> Booking Date:</div>
                <div class="ms-auto">Thur, 10 March 2021</div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">	
				<i class="fa fa-clock-o"></i> Time of Arrival
                </div>
                <div class="ms-auto">4:00 PM</div>
              </div>
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8">FindN Service Fee</div>
                <div class="ms-auto"><b>₱2.00</b></div>
              </div>
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8"><b>Total</b></div>
                <div class="ms-auto"><div class="text-success">₱<b id="amount">20.00</b></div></div>
              </div>
            </div>
			
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div> 
<!--container end.//-->

<script src='https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js'></script>
<script src='assets/js/jquery/jquery.min.js'></script>
<script>
    $(document).on('click','#btngcash',function(){ 
      var s_shop = $("#shop").text();
      var service_type = $("#service-type").text();
      var name = $("#b_name").text();
      var email = $("#b_email").text();
      var contact_num = $("#b_contactnum").text();
      var amount = $('#amount').text();
     
      $.ajax({
          url: "goto-gcash",
          type: "POST",
          data:{shop:s_shop,s_type:service_type,b_name:name,b_email:email,b_contactnum:contact_num,total_amount:amount},
          beforeSend : function()
          {
            alert("processing");
          },
          success: function(data)
          {
            //open new tab
            window.open(data);
          }
        });
    });

	$(document).on('click','.edit-icon',function(){  
		$(".edit-contact-form").show();
    });
	$(document).on('click','#close-edit',function(){  
		$(".edit-contact-form").css("display","none");
    });
	$(document).on('keydown','#contact-input',function(){  
		var phone = $(this).val();
        var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(phone == ""){
            $(this).css("border-color","red");
			$("#update-contact").css("display","none");;
        }else if(!phone.match(phoneNum) || phone.length != 10){
            $(this).css("border-color","red");
			$("#update-contact").css("display","none");;
        }else{
            $(this).css("border-color","green");
			$("#update-contact").show();
        }
    });

	$(document).on('click','#update-contact',function(){ 
		var phone = $("#contact-input").val();
		$(".edit-contact-form").css("display","none");
		$("#update-contact").css("display","none");;
        $(".show-number").text(phone);
    });

	  

</script>
</body>
</html>