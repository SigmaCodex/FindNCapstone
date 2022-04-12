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
                                <div class="cam-scanner col-10 col-sm-10 col-xs-10">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="trans-detail col-6 d-flex justify-content-start align-items-center">
                                    <p>Transaction ID</p>
                                </div>
                                <div class="trans-detail col-6 d-flex justify-content-start align-items-start">
                                    <input class="form-control input-sm" type="number" style="text-align:right;" maxlength="7">
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
                                    <p>Junky Dubs</p>
                                    <p>Male</p>
                                    <p>Vaccinated</p>
                                    <p>0977 432 4234</p>
                                    <p>junkydubs@gmail.com</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="comp-info-trans-detail-left col-6 ">
                                    <p>Computer Shop</p>
                                    <p>Computer Service</p>
                                    <p>Number of Ticket(s)</p>
                                    <p>Arrival Date</p>
                                    <p>Arrival Time</p>
                                    <p>Message</p>
                                </div>
                                <div class="comp-info-trans-detail-right col-6 ">
                                    <p>TNC CyberCafe</p>
                                    <p>Computer Booking</p>
                                    <p>1</p>
                                    <p>April 22, 2022</p>
                                    <p>10:00 AM</p>
                                    <p class="message-comp">Kanang duol sa aircon niya kanang dili kaayo init niya dili silaw. adto dapit sa tournament lounge sir.</p>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-around align-items-center ">
                                <div class="info-status col-4 ">
                                    <p>Arrival Staus:</p>
                                    <p>Current Time:</p>
                                </div>

                                <div class="info-status-update col-3 ">
                                    <p class="status-color" style="color:#08B64E">On Schedule</p>
                                    <p>9:55 AM</p>
                                </div>

                                <div class="info-status-button col-5 d-flex justify-content-end align-items-end">
                                    <Button class="btn pmd-btn-raised pmd-ripple-effect btn-success">Confirm Booking</Button>    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            
        </div>
        
    </div>

    <script src="assets/js/shopAdminScanQR.js"></script>

    
</body>
</html>