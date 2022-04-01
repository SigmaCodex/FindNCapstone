<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    
    <link rel="stylesheet" href="assets/css/findersBookings.css" />
    <title>Booking History</title>
  </head>
  <body>

    <div class="transaction-form-wrapper d-flex justify-content-center m-3">
    <div class="transaction-form ">
      <div class="header-transaction d-flex justify-content-between p-3 m-0">
        <a href="finderBookingList"> <i class="back-icon fa-solid fa-chevron-left"></i></a>  
        <h3 class="back-button-title">Transaction Details</h3> <a href="#filter"><i class="filter-icon fa-solid fa-stream"></i> </a>
      </div>

      <!-- LEGEND END -->
      <div class="transaction-body justify-content-center align-items-center">
        <div class="transaction-content">
            <img src="assets/images/icon-logo.png" style="width: 50px;">
            <hr>
            <!-- sign in -->
            <div class="content active extra-info p-0" id="all-tab">


              <div class="row d-flex align-items-center justify-content-between">
                <div class="col-2">
                  <i class="booking-icon fa-solid fa-calendar-plus" style="font-size: 20px; color: rgb(30, 110, 21);"></i>
                </div>
                <div class="col-6 m-0 d-flex justify-content-center align-items-center">
                  <p class="info-text-left" style="font-size: 15px; padding-top: 15px;">Booking Request</p>
                </div>
                

                <div class="col-4 ">
                  <p class="request-date m-0 text-muted"style="font-size: 12px;">March 31, 2022</p>
                  <p class="request-date m-0 text-muted"style="font-size: 10px;">10:00 AM (GMT +8)</p>
                </div>
              </div>

              
            </div>

            <div class="booking-info-card">

                            <!-- Edit Button if Transaction Status is PENDING -->
              <!-- ======================================================================= -->
              <div class="row py-2">
                <div class="col-10">
                  <h6 style="text-align:left; font-size: 12px; padding-bottom: 10px; color: rgb(204, 3, 3);">You can still edit this booking request.</h6>
                  
                </div>
                <div class="col-2 edit-link" id="edit-booking-request">
                  <h6 style="font-size: 12px;">Edit 
                    <i class="fa-solid fa-edit"></i>
                  </h6>
                </div>
              </div>


                          <!-- if Transaction Status is Accepted or Paid -->
              <!-- ======================================================================= -->
              <!-- <h6 style="text-align:center; font-size: 12px; padding-bottom: 15px;">Booking Transaction Details </h6> -->
              
              <div class="booking-info-card-text ">

                <div class="row">
                  <div class="col-6"><h4 class="info-text-left">Transaction Number:</h4> </div>
                  <div class="col-2"><p class="info-text-middle">:</p></div>
                  <div class="col-4"><p class="info-text-right">091-34235</p></div>
                </div>

                <div class="row">
                  <div class="col-6"><h4 class="info-text-left">Computer Shop Name:</h4></div>
                  <div class="col-2"><p class="info-text-middle">:</p></div>
                  <div class="col-4"><p class="info-text-right">TNC CyberCafe</p></div>
                </div>

                <div class="row">
                  <div class="col-6"><h4 class="info-text-left">Transaction Status:</h4></div>
                  <div class="col-2"><p class="info-text-middle">:</p></div>
                  <div class="col-4">
                    <p class="legend legend3 legendText p-1">Pending</p>
                    <!-- <p class="legend legend2 legendText p-1">Accepted</p> -->
                  </div>
                </div>

              </div>
              
              <!-- SEE MORE -->
              <div>
                <span id="text" style="font-size: 10px;">

                  <div class="row">
                    <div class="col-6"><h4 class="info-text-left">Arrival Date:</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4"><p class="info-text-right">April 2, 2022</p></div>
                  </div>

                  <div class="row">
                    <div class="col-6"><h4 class="info-text-left">Arrival Time:</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4"><p class="info-text-right">2:00 PM</p></div>
                  </div>

                  <div class="row">
                    <div class="col-6"><h4 class="info-text-left">Computer Access Type:</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4"><p class="info-text-right">VIP</p></div>
                  </div>

                  <div class="row">
                    <div class="col-6"><h4 class="info-text-left">Booking Fee:</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4"><p class="info-text-right" style="color: green; font-weight: 700;">₱10</p></div>
                  </div>

                  <div class="row">
                    <div class="col-6"><h4 class="info-text-left">Payment Status:</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4">
                      <p class="legend legend1 legendText p-1">Unpaid</p>
                        <!-- <p class="legend legend4 legendText p-1">Paid</p> -->
                    </div>                 
                  </div>

                                        <!-- IF Pending & Unpaid -->
                      <!-- ======================================================================= -->
                  <!-- <div class="row">
                    <div class="col-6"><h4 class="info-text-left">Payment Method:</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4"> -->

                                          <!-- IF Payment Method is GCash -->
                      <!-- ======================================================================= -->
                      <!-- <p class="info-text-right" style="padding-right:36px; font-weight: 700;">GCash</p> -->

                                    <!-- IF Payment Method is Over-the-Counter -->
                      <!-- ======================================================================= -->                    
                      <!-- <p class="info-text-right" style=" font-weight: 700;">Over-the-Counter</p> -->
                  



                                      <!-- IF Payment Method is Over-the-Counter -->
                  <!-- ======================================================================= -->
                  <!-- <h6 style="text-align:center; font-size: 10px; font-weight: 500; padding-top: 5px; color: rgb(55, 152, 10);">Note: <b>Booking Fee</b> shall be paid over-the-counter before using the computer.</h6> -->


                                      <!-- IF Payment Method is GCash -->
                  <!-- ======================================================================= -->
                  <!-- <h6 style="text-align:center; font-size: 15px; font-weight: 700; padding-top: 20px;">GCASH Payment Receipt </h6>
                  <hr> -->

                  <!-- GCASH Details -->
                  <!-- <div class="row">
                    <div class="col-6"><h4 class="info-text-left">Reference Number:</h4> </div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4"><p class="info-text-right">7004 8043 8574 9</p></div>
                  </div>
                  
                  <div class="row">
                    <div class="col-6"><h4 class="info-text-left">Payment Date </h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4"><p class="info-text-right">March 31, 2022</p></div>
                  </div>
                  <div class="row">
                    <div class="col-6"><h4 class="info-text-left">GCASH Receipt Screenshot</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-4"><img src="assets/images/receipt.jpg" style="width: 30px;">      
                    </div>
                  </div> -->
                  

                                          <!-- Pending & Unpaid -->
                  <!-- ======================================================================= -->
                  <!-- <h6 style="text-align:center; font-size: 15px; font-weight: 700; padding-top: 20px;">Select Payment Method </h6>
                  <hr>  -->

                  <!-- Payment method Select -->
                   <!-- <div class="row d-flex align-items-center justify-content-between p-3">

                    <div class="col-5 info-text-left-card ">
                      <i class="fa-solid fa-cash-register" style="font-size: 40px; color: rgb(61, 58, 55);"></i>
                      <h6 class="info-text-left-card-title" style="font-size: 10px; font-weight: 600; padding-top: 7px;  color: rgb(38, 22, 2)">Over-the-Counter</h6> 
                    </div>

                    <div class="col-1 info-text-left-mid">
                    </div>

                    <div class="col-5 info-text-right-card" id="gcash">
                      <img src="assets/images/gcash.png" style="width: 100px;">
                    </div>
                   
                  </div>

                  <div class="row d-flex align-items-center justify-content-between">

                    <div class="col-5 info-text-left-card-text ">
                      <p>Select over-the-counter method</p> 
                    </div>

                    <div class="col-1 info-text-left-mid">
                      
                    </div>

                    <div class="col-5 info-text-right-card-text">
                      <p>Select GCash payment method</p> 
                    </div>
                   
                  </div>
                  <br> -->


                                         <!-- Show when Paid or Accepted -->
                  <!-- ======================================================================= -->
                  
                  <!-- <span class="source"  style="font-size:13px; font-weight: 700;">View Ticket Now : 
                  </span>
                    <a href="findershomepage" style="font-size:13px"> Ticket</a> -->


                </span>
                
              </div>
              <hr>

              <div class="btn-container">
              <button id="toggle">Show More</button>
              </div>
            </div>
        </div>
      </div>
    </div>
    </div>
   


    <script src="assets/js/findersBookings.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- when card is clicked -->
  <script type="text/javascript">
  document.getElementById("red").onclick = function () {
      location.href = "findersTransactionDetail";
  };

 
  </script>

  <!-- when edit is clicked -->
  <script type="text/javascript">
     document.getElementById("edit-booking-request").onclick = function () {
      location.href = "booking-request";
  };
    </script>

   <!-- when gcash is clicked -->
<script type="text/javascript">
  document.getElementById("gcash").onclick = function () {
   location.href = "findersGCashPayment";
};
 </script>
  </body>
</html>
