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
    

    <title>QR Scan Bookings</title> 
</head>
<body>

    <div class="container ">
        <div class="row content-holder mt-5 d-flex align-items-center justify-content-center">
            
            <div class="col-md-12 col-sm-12 col-xs-12 "> 

                <div class="mid-card"> 
                    
                    <div class="row">

                        <!-- LEFT SIDE BAR -->

                        <div class="left-side-bar col-md-6 col-sm-6 col-xs-6 my-md-0">

                            <!-- For camera scanner -->
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="">
                                    <video id="preview" class=""  style="width:100%; border: 4px dashed #bbb; transform: rotateY(180deg);"></video>
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
                                    <p><img class="logo-img-method" src="assets/images/gcash.png" id="payment-method-logo" alt=""></p>
                                    <p style="color: #08B64E;">Paid</p>

                                    <!-- If Over-the-counter -->
                                    <!-- <p><img class="logo-img-method" src="assets/images/counter2.png" id="payment-method-logo" alt=""></p>
                                    <p style="color: #e10404;">Unpaid</p> -->


                                    <p style="color: #e10404;">₱15</p>
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
                            <div class="row">
                                <div class="trans-detail-left col-6 ">
                                    <p>Reference Number</p>
                                    <p>Payment Date</p>
                                    <p>Gcash Payment Receipt</p>
                                </div>
                                <div class="trans-detail-right col-6 ">
                                    <p >700 0556 345 1</p>
                                    <p>April 22, 2022</p>
                                    <p><img class="receipt-img-logo" src="assets/images/Receipt.jpg" id="gcash-receipt" alt=""></p>
                                    
                                </div>

                                <div id="receipt-img" class="receipt-img-modal">
                                    <span class="close-img">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                            </div>  

                            <!-- IF OVER-THE-COUNTER PAYMENT METHOD --> 
                            <!-- <div class="row pt-5">
                                <div class="counter-button col-12 d-flex justify-content-around align-items-center">
                                    <button class="counter-button-cancel">Cancel Booking</button>
                                    <button class="counter-button-confirm">Confirm Payment</button>
                                    
                                </div>
                                <div class="counter-button col-12 d-flex flex-column justify-content-center align-items-center">
                                    
                                </div>
                            </div> -->


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
                                    <p class="message-comp" id="message">Kanang duol sa aircon niya kanang dili kaayo init niya dili silaw. adto dapit sa tournament lounge sir.</p>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-around align-items-center ">
                                <div class="info-status col-4 ">
                                    <p>Arrival Staus:</p>
                                    <p>Current Time:</p>
                                    <p>Current Date:</p>
                                </div>

                                <div class="info-status-update col-3 ">
                                    <p class="status-color" style="color:#08B64E">On Schedule</p>
                                    <p class="my-clock"></p>
                                    <p class="date"></p>
                                </div>

                                <div class="info-status-button col-5 d-flex justify-content-end align-items-end">
                                    <Button>Confirm Booking</Button>    
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
    <script src="assets/js/clock.js"></script>
    <script type="text/javascript">
					var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
					scanner.addListener('scan',function(content){
						  alert(content);
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
					url: BASE_URL+"select-FinderBookingTransaction/"+transaction_id,
					type: "GET",
                    cache: false,
                    async: false,
					success: function(data)
					{
                        if(data == "no-data"){
                                $("#name").text("------");
                                $("#gender").text("------");
                                $("#vac_status").text("------");
                                $("#contact_num").text("------");
                                $("#email").text("------");
                                $("#comp_service").text("------");
                                $("#comp_type").text("------");
                                $("#num_person").text("------");
                                $("#date_arrival").text("------");
                                $("#time_arrival").text("------");
                                $("#message").text("------");
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
                            }

                        }

					},
        
				});
                //end of ajax
			}else{

			
			}
            // arrival_time = "16:15";
            // date = "04/09/2022";
            // // newdate = dateformat(arrival_date);
            // // console.log(newdate);
            // // timeformat(arrival_time);
            // timeformat = new Date(''+date+' '+arrival_time+'').toLocaleTimeString().replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3")
            // console.log(timeformat);
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

        

</script>

<script>
   
</script>
    
</body>
</html>