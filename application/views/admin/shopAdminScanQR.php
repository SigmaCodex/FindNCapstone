<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/shopAdminScanQR.css">
    
    <style>
        .box{
            --b:5px;   /* thickness of the border */
            --c:#f46b31;   /* color of the border */
            --w:20px;  /* width of border */
            

            border:var(--b) solid transparent; /* space for the border */
            --g:#0000 90deg,var(--c) 0;
            background:
                conic-gradient(from 90deg  at top    var(--b) left  var(--b),var(--g)) 0    0,
                conic-gradient(from 180deg at top    var(--b) right var(--b),var(--g)) 100% 0,
                conic-gradient(from 0deg   at bottom var(--b) left  var(--b),var(--g)) 0    100%,
                conic-gradient(from -90deg at bottom var(--b) right var(--b),var(--g)) 100% 100%;
            background-size:var(--w) var(--w);
            background-origin:border-box;
            background-repeat:no-repeat;
            
            /*Irrelevant code*/  
            /* width:200px;
            height:100px;
            box-sizing:border-box;
            margin:5px;
            display:inline-flex;
            font-size:30px;
            justify-content:center;
            align-items:center;
            line-height:90px; */
            }
        .frame{
            position:absolute;
            /* top:0; */
             width:500px;
            height:500px; 
            background:rgba(108,103,103,0.56) ;
            z-index: 1;
            -webkit-clip-path: polygon(0% 0%, 0% 100%, 25% 100%, 25% 25%, 75% 25%, 75% 75%, 25% 75%, 25% 100%, 100% 100%, 100% 0%);
            clip-path: polygon(0% 0%, 0% 100%, 25% 100%, 25% 25%, 75% 25%, 75% 75%, 25% 75%, 25% 100%, 100% 100%, 100% 0%);
        }    
    </style>

    <title>QR Scan Bookings</title> 
</head>
<body>

    <div class="container">
        <div class="row content-holder mt-5 d-flex align-items-center justify-content-center">
            
            <div class="col-md-12 col-sm-12 col-xs-12 "> 

                <div class="mid-card"> 
                    
                    <div class="row">

                        <!-- LEFT SIDE BAR -->

                        <div class="left-side-bar col-md-6 col-sm-6 col-xs-6 my-md-0">

                            <!-- For camera scanner -->
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="" style="">
                                    <video id="preview" class="box"  style="width:100%;  transform: rotateY(180deg);"></video>
                                    <!-- <div class="frame"></div> -->
                                </div>
                            </div>
                            <input type="radio" name="options" value="2" autocomplete="off">
                            <input type="radio" name="options" value="1" autocomplete="off">
                            <div class="row">
                                <div class="trans-detail col-6 d-flex justify-content-start align-items-center">
                                    <p>Transaction ID</p>
                                </div>
                                <div class="trans-detail col-6 d-flex justify-content-start align-items-start">
                                    <input class="form-control input-sm" type="number" id="transaction_id" style="text-align:right;" maxlength="15">
                                </div>
                            </div>

                            <!-- PAYMENT METHOD -->

                            <div class="row">
                                <div class="trans-title col-2 d-flex justify-content-center align-items-center">
                                </div>
                                <div class="trans-title-payment col-8 d-flex justify-content-center align-items-center">
                                    <h6>PAYMENT DETAILS</h6>
                                </div>
                                <div class="trans-title col-2 d-flex justify-content-center align-items-center">
                                </div>
                            </div>

                            <div class="row">
                                <div class="trans-detail-left col-6 ">
                                    <p>Payment Method</p>
                                    <p>Payment Status</p>
                                    <p>Service Fee</p>
                                </div>
                                <div class="trans-detail-right col-6 ">

                                    <!-- If GCash -->
                                    <p><img class="logo-img-method"  id="payment-method-logo" alt=""></p>
                                    <!-- If Over-the-counter -->
                                    <!-- <p><img class="logo-img-method overthecounter_method" style="display:none" src="assets/images/counter2.png" id="payment-method-logo" alt=""></p> -->
                                    <p style="color: #08B64E;" id="payment_status">---------</p>

                                  
                                    <!-- <p style="color: #e10404;">Unpaid</p> -->


                                    <p style="color: #e10404;" id="service_fee">----------</p>
                                </div>
                            </div>

                            <!-- Row for empty border line -->
                            <div class="row">
                                <div class="trans-title col-2 d-flex justify-content-center align-items-center">
                                </div>
                                <div class="trans-title-payment col-8 d-flex justify-content-center align-items-center">
                                </div>
                                <div class="trans-title col-2 d-flex justify-content-center align-items-center">
                                </div>
                            </div>

                            <!-- IF GCASH  -->
                            <div class="row" id="gcash_section" style="display:none">
                                <div class="trans-detail-left col-6 ">
                                    <p>Reference Number</p>
                                    <p>Payment Date</p>
                                    <p>Gcash Payment Receipt</p>
                                </div>
                                <div class="trans-detail-right col-6 ">
                                    <p id="reference_num">---------</p>
                                    <p id="payment_date">-----------</p>
                                    <p><img class="receipt-img-logo" id="gcash-receipt" alt=""></p>
                                    
                                </div>

                                <div id="receipt-img" class="receipt-img-modal">
                                    <span class="close-img">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                            </div>  

                            <div class="row pt-2" id="transaction_status_section" style="display:none">
                                <div class="counter-button col-12 d-flex justify-content-around align-items-center">
                                            <h1 id="transaction_status"></h1>
                                </div>
                                <div class="counter-button col-12 d-flex flex-column justify-content-center align-items-center">
                             
                                </div>
                            </div>

                            <!-- IF OVER-THE-COUNTER PAYMENT METHOD --> 
                            <div class="row pt-5" id="overthecounter_section" style="display:none">
                                <div class="counter-button col-12 d-flex justify-content-around align-items-center">
                                    <button class="counter-button-cancel" id="cancel_payment">Cancel Booking</button>
                                    <button class="counter-button-confirm" id="confirm_payment">Confirm Payment</button>
                                    
                                </div>
                                <div class="counter-button col-12 d-flex flex-column justify-content-center align-items-center">
                                    
                                </div>
                            </div>

                  



                        </div>
                        

                        <!-- RIGHT SIDE BAR  -->

                        <div class="right-side-bar col-md-6 col-sm-6 col-xs-6 my-md-0">
                            <h2 class="right-side-bar-title">|BOOKING INFORMATION</h2>

                            <div class="row">
                                <div class="info-trans-detail-left col-6 ">
                                    <p>Name</p>
                                    <p>Gender</p>
                                    <p>Vaccine Status</p>
                                    <p>Contact Number</p>
                                    <p>Email</p>
                                </div>
                                <div class="info-trans-detail-right col-6 ">
                                    <p id="name">------</p>
                                    <p id="gender">-----</p>
                                    <p id="vac_status">----</p>
                                    <p id="contact_num">-------</p>
                                    <p id="email">-------</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="comp-info-trans-detail-left col-6 ">
                                    <p>Computer Shop</p>
                                    <p>Computer Service</p>
                                    <p>Computer type</p>
                                    <p>Number of Ticket(s)</p>
                                    <p>Arrival Date</p>
                                    <p>Arrival Time</p>
                                    <p>Message</p>
                                </div>
                                <div class="comp-info-trans-detail-right col-6 ">
                                    <p id="comp_shop">-------</p>
                                    <p id="comp_service">------</p>
                                    <p id="comp_type">------</p>
                                    <p id="num_person">------</p>
                                    <p id="date_arrival">-----</p>
                                    <p id="time_arrival">-----</p>
                                    <p class="message-comp" id="message">------------</p>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-around align-items-center ">
                                <div class="info-status col-4 ">
                                    <p>Arrival Status:</p>
                                    <p>Current Time:</p>
                                    <p>Current Date:</p>
                                </div>

                                <div class="info-status-update col-3 ">
                                    <p class="status-color" id="arrival_status">---------</p>
                                    <p class="my-clock"></p>
                                    <p class="date"></p>
                                </div>

                                <div class="info-status-button col-5 d-flex justify-content-end align-items-end">
                                    <Button class="btn pmd-btn-raised pmd-ripple-effect btn-success" id="confirm_booking" style="display:none;">Confirm Booking</Button>    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            
        </div>
        
    </div>

    <script src="assets/js/shopAdminScanQR.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <!-- library for convertime format -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> 
    <script src="assets/js/clock.js"></script>
    <script type="text/javascript">
					var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
					scanner.addListener('scan',function(content){
						//   alert(content);
						//  $("#data").text(content);
						 var res = content.split(",");
					      $("#transaction_id").val(res[0]);
					    //   $("#name").text(res[1]);
					    //   $("#p_number").val(res[2]);
					    //   $("#status").val(res[3]);
					    //   $("#arrival").val(res[4]);
					    //  $("#total").text(res[5]);
					

						// window.location.href=content;
					});
					Instascan.Camera.getCameras().then(function (cameras){
						if(cameras.length>0){
							scanner.start(cameras[0]);
							$('[name="options"]').on('change',function(){
								if($(this).val()==1){
									if(cameras[0]!=""){
										scanner.start(cameras[0]);
									}else{
										alert('No Front camera found!');
									}
								}else if($(this).val()==2){
									if(cameras[1]!=""){
										scanner.start(cameras[1]);
									}else{
										alert('No Back camera found!');
									}
								}
							});
						}else{
							console.error('No cameras found.');
							alert('No cameras found.');
						}
					}).catch(function(e){
						console.error(e);
						alert(e);
					});
</script>

<script>
 
setInterval(function(){
            // alert("hello world");
            //ajax;
			var transaction_id = $("#transaction_id").val();
			var BASE_URL = "<?php echo base_url();?>";
			if(transaction_id != ""){
                //start of ajax
				$.ajax({
					url: BASE_URL+"select-QrScannerFinderBookingTransaction/"+transaction_id,
					type: "GET",
                    cache: false,
                    async: false,
					success: function(data)
					{
                        $("#transaction_status_section").hide();
                        if(data == "no-data"){
                                $("#name").text("------");
                                $("#gender").text("------");
                                $("#vac_status").text("------");
                                $("#contact_num").text("------");
                                $("#email").text("------");
                                $("#comp_service").text("------");
                                $("#comp_shop").text("------");
                                $("#comp_type").text("------");
                                $("#num_person").text("------");
                                $("#date_arrival").text("------");
                                $("#time_arrival").text("------");
                                $("#message").text("------");
                                $("#service_fee").text("-------");
                                $("#payment_status").text("-----------");
                                $('#overthecounter_section').hide();
                                $('#gcash_section').hide();
                                $("#payment-method-logo").removeAttr("src");
                                $("#arrival_status").removeAttr("style");
                                $("#arrival_status").text("-------");
                        }else{
                            //populate data 
                            var result = JSON.parse(data);
                            for(var x = 0 ; x < result.length ; x ++)
                            {
                                $("#name").text(result[x]['firstname']+","+result[x]['lastname']);
                                $("#gender").text(result[x]['gender']);
                                $("#vac_status").text(result[x]['vac_status']);
                                $("#contact_num").text(result[x]['phone_num']);
                                $("#email").text(result[x]['email']);
                                $("#comp_shop").text(result[x]['shop_name']);
                              
                                $("#comp_service").text(result[x]['servicetype']);
                                $("#comp_type").text(result[x]['name']);
                                $("#num_person").text(result[x]['num_ticket']);
                                newdate = dateformat(result[x]['arrival_date']);
                                time = result[x]['arrival_time'];
                                arrival_time = new Date(''+newdate+' '+time+'').toLocaleTimeString().replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
                                $("#date_arrival").text(newdate);
                                $("#time_arrival").text(arrival_time);
                                $("#message").text(result[x]['instruction']);

                                //payment details
                                $("#service_fee").text("₱"+result[x]['service_fee']);
                                $("#payment_status").text(result[x]['payment_status']);
                                    if(result[x]['payment_type'] == "gcash"){
                                        $("#payment-method-logo").removeAttr("src");
                                        $("#payment-method-logo").attr("src","assets/images/gcash.png");

                                        
                                        $('#gcash_section').show();
								        $('#overthecounter_section').hide();
                                        select_paymentDetails(transaction_id);

                                    }else if(result[x]['payment_type'] == "overthecounter"){
                                        $("#payment-method-logo").removeAttr("src");
                                        $("#payment-method-logo").attr("src","assets/images/counter2.png");

                                        $('#overthecounter_section').show();
								        $('#gcash_section').hide();
                                       
                                    }
                                  
                                    if(result[x]['transaction_status'] == "success"){
                                        $("#arrival_status").removeAttr("style");
                                        $("#arrival_status").attr("style","color:#f83f0b");
                                        $("#arrival_status").text("Admitted");
                                        $("#transaction_status").removeAttr("style");
                                        $("#transaction_status").attr("style","color:#f83f0b");
                                        $("#transaction_status").text(result[x]['transaction_status']);
                                        $("#confirm_booking").hide();   
                                        $("#confirm_payment").hide();
                                        $("#cancel_payment").hide();
                                        $("#transaction_status_section").show();
                                      
                                    }else if(result[x]['transaction_status'] == "cancelled"){
                                        $("#arrival_status").removeAttr("style");
                                        $("#arrival_status").attr("style","color:#CC3333");
                                        $("#arrival_status").text("Cancelled");
                                        $("#transaction_status").removeAttr("style");
                                        $("#transaction_status").attr("style","color:#CC3333");
                                        $("#transaction_status").text(result[x]['transaction_status']);
                                        $("#confirm_booking").hide();   
                                        $("#confirm_payment").hide();
                                        $("#cancel_payment").hide();
                                        $("#transaction_status_section").show();

                                    }
                                    else{
                                          checkPaymentStatus();
                                          checkTimeAndDateStatus();
                                    }    



                            }
                              //end of loop
                        
                        }
                        //end of else
					},
                      
				});
                //end of ajax
                
                
               
			}else{
                //else for transaction id is empty
			}
        },1000);

        //return new date format
        function dateformat(arrival_date){
            let date = new Date(arrival_date);
            let d = date.getDate();
            let months = [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
            ];
            let m = months[date.getMonth()];
            let y = date.getFullYear();
            let days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            let weekDay = days[date.getDay()];
            date_format =`${m} ${d},${y} `;
            return date_format;
        } 

        //ajax for select paymentDetails
        function select_paymentDetails(transaction_id){
            
         var BASE_URL = "<?php echo base_url();?>";
     
                $.ajax({
                    url: BASE_URL+"select_GcashpaymentDetails/"+transaction_id,
                    type: "GET",
                    cache: false,
                    async: false,
                    success: function(data)
                    {
                        var result = JSON.parse(data);
                        for(var x = 0 ; x < result.length ; x ++)
                        {
                            $("#reference_num").text(result[x]['reference_num']);
                            newdate = dateformat(result[x]['payment_date']);
                            $("#payment_date").text(newdate);
                            $("#gcash-receipt").removeAttr("src");
                            $("#gcash-receipt").attr("src","assets/upload/finder/gcash-receipt/"+result[x]['receipt_image']);
                           
                        }

                    }
                });
                
        }

        function getTimeAsNumberOfMinutes(time)
        {
            var timeParts = time.split(":");
            // var timeInMinutes = (timeParts[0] * 60) + timeParts[1];
            var timeInMinutes = timeParts[0]+ timeParts[1];
            return timeInMinutes;
        }
 
        function addMinutesToTime(time, minsAdd) {
            function z(n){ 
                return (n<10? '0':'') + n;
                };
            var bits = time.split(':');
            var mins = bits[0]*60 + +bits[1] + +minsAdd;
            return z(mins%(24*60)/60 | 0) + ':' + z(mins%60);  
        }

        function checkTimeAndDateStatus(){// check if finder is LATE/OVERDUE/ONSCHEDULE
            const convertTime12to24 = (time12h) => moment(time12h, 'hh:mm A').format('HH:mm'); // convert time to 24 hr format
                time_arrival = $("#time_arrival").text();
                date_arrival = $("#date_arrival").text();
                
                current_time = $(".my-clock").text();
                current_date = $(".date").text();
                var d1 = new Date(date_arrival);
                var d2 = new Date(current_date);

                 if(d1.getTime() >= d2.getTime()){
                    
                   time_arrivalMin = getTimeAsNumberOfMinutes(convertTime12to24(time_arrival));
                   current_timeMin = getTimeAsNumberOfMinutes(convertTime12to24(current_time));

                   time_arrival30 = addMinutesToTime(convertTime12to24(time_arrival),30);//add 30 mins to 24 hours format time arrival
                   time_arrivalMin30 =  getTimeAsNumberOfMinutes(time_arrival30);

                    if(d1.getTime() === d2.getTime()){//if the arrival date is equal to current date 
                    
                        if(current_timeMin<= time_arrivalMin){
                            $("#arrival_status").removeAttr("style");
                            $("#arrival_status").attr("style","color:#08B64E");
                            $("#arrival_status").text("OnSchedule");
                        }
                        else if(current_timeMin>time_arrivalMin && current_timeMin<=time_arrivalMin30){
                            $("#arrival_status").removeAttr("style");
                            $("#arrival_status").attr("style","color: #ffc107");
                            $("#arrival_status").text("Late");
                        }else{
                            $("#arrival_status").removeAttr("style");
                            $("#arrival_status").attr("style","color:#CC3333");
                            $("#arrival_status").text("Overdue");
                        }
                    
                    }else{
                        $("#arrival_status").removeAttr("style");
                        $("#arrival_status").attr("style","color:#08B64E");
                        $("#arrival_status").text("OnSchedule");
                    }

                    // $("#confirm_payment").show();
                    // $("#cancel_payment").show();
                    // $("#confirm_booking").show(); 

                 }else{
                    $("#arrival_status").removeAttr("style");
                    $("#arrival_status").attr("style","color:#CC3333");
                    $("#arrival_status").text("Overdue");

                    $("#confirm_booking").hide();   
                    $("#confirm_payment").hide();
                    $("#cancel_payment").hide();
                    //ajax for updating trasaction status to fail
                 }
                 
        }
        
        function checkPaymentStatus(){
            payment_Status = $("#payment_status").text();

            if(payment_Status=="paid"){
                $("#confirm_payment").hide();
                $("#cancel_payment").hide();
                $("#confirm_booking").show(); 
            }else if("unpaid"){
                $("#confirm_payment").show();
                $("#cancel_payment").show();
                $("#confirm_booking").hide(); 
            }
        }

        

</script>
<script>
    //update Payment Status
	$(document).on('click','#confirm_payment',function(){ 
		transaction_id = $("#transaction_id").val();	
		var BASE_URL = "<?php echo base_url();?>";
		$.ajax({
          url: BASE_URL+"updatePaymentStatus/"+transaction_id+"/paid",
          type: "POST",
          success: function(data)
          {
         
          }
        });
    });

    //Update transcation status to Success
    $(document).on('click','#confirm_booking',function(){ 
		transaction_id = $("#transaction_id").val();	
		var BASE_URL = "<?php echo base_url();?>";

    
		$.ajax({
          url: BASE_URL+"updateTranscationStatus/"+transaction_id+"/success",
          type: "POST",
          success: function(data)
          {
         
          }
        });

		$.ajax({
          url: BASE_URL+"updateArrivalStatus/"+transaction_id+"/arrived",
          type: "POST",
          success: function(data)
          {
         
          }
        });
      
        
    });

    //cancel Booking Transaction
    $(document).on('click','#cancel_payment',function(){ 
		transaction_id = $("#transaction_id").val();	
		var BASE_URL = "<?php echo base_url();?>";

		$.ajax({
          url: BASE_URL+"updateTranscationStatus/"+transaction_id+"/cancelled",
          type: "POST",
          success: function(data)
          {
         
          }
        });

        $.ajax({
          url: BASE_URL+"updateArrivalStatus/"+transaction_id+"/cancelled",
          type: "POST",
          success: function(data)
          {
         
          }
        });
        
    });
  
</script>
    
</body>
</html>