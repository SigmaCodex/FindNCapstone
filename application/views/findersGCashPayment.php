<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    
    <link rel="stylesheet" href="../assets/css/findersBookings.css" />
    <title>Booking History</title>
  </head>
  <body>

    <div class="transaction-form-wrapper d-flex justify-content-center ">
      <div class="transaction-form p-1 ">
        <div class="header-transaction d-flex justify-content-between p-3 m-0">
          <a href="findersTransactionDetail"> <i class="back-icon fa-solid fa-xmark"></i></a>  
          <h3 class="back-button-title">Transaction Details</h3> <a href="#filter"></a>
        </div>

        <!-- LEGEND END -->
        <div class="transaction-body justify-content-center align-items-center">
          <div class="transaction-content p-4">
              <img src="../assets/images/icon-logo.png" style="width: 50px;">
              <hr>
              
              <div class="content active extra-info p-0" id="all-tab">


                <div class="row d-flex align-items-center justify-content-between">
                  <div class="col-6 m-0 d-flex justify-content-center align-items-center">
                    <p class="payment-info-text-left" style="font-size: 20px; padding-top: 15px;">Payment Overview</p>
                  </div>
                  

                  <div class="col-6 d-flex justify-content-end gcash-logo">
                    <img src="../assets/images/gcash.png" class="gcash-logo-pic">
                  </div>
                </div>

                
              </div>

              <!-- booking details -->
              <div class="booking-info-card">

                <h5 class="shop-title" style="text-align:center; font-size: 20px; padding-bottom: 15px;">TNC CYBERCAFE CEBU </h5>
                <hr>
                <div class="booking-info-card-text ">

                  <div class="row d-flex">
                    <div class="col-4"><h4 class="info-text-left">Computer Type</h4> </div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-6"><p class="payment-info-text-right">VIP</p></div>
                  </div>

                  <div class="row">
                    <div class="col-4"><h4 class="info-text-left">Number of Bookings (Person)</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-6"><p class="payment-info-text-right">1</p></div>
                  </div>

                  <div class="row">
                    <div class="col-4"><h4 class="info-text-left">Name</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-6"><p class="payment-info-text-right">Junky Dubs</p></div>
                  </div>

                  <div class="row">
                    <div class="col-4"><h4 class="info-text-left">Email</h4></div>
                    <div class="col-2"><p class="payment-info-text-middle">:</p></div>
                    <div class="col-6"><p class="payment-info-text-right">abc123@gmail.com</p></div>
                  </div>

                  <div class="row">
                    <div class="col-4"><h4 class="info-text-left">Contact Number</h4></div>
                    <div class="col-2"><p class="info-text-middle">:</p></div>
                    <div class="col-6"><p class="payment-info-text-right">097747332813 
                      <i class="edit-icon fa-solid fa-edit"></i></p>
                    </div>
                  </div>

                  <h6 style="text-align:center; font-size: 15px; font-weight: 800; padding-top: 10px; color: red;"><b>Booking Fee</b> : ₱10</h5>
                  <hr>
                
                                                <!-- Step 1-->
                    <!-- ======================================================================= -->
                  <h6 style="text-align:center; font-size: 15px; font-weight: 700; padding-top: 10px;">Step 1: Pay GCash</h6>
                  <div class="pay-now-div">
                    <button class="pay-now">Pay GCash</button>
                  </div>
                  <h6 style="text-align:center; font-size: 10px; font-weight: 500; padding-top: 10px; color: #022DB8;">Note: You only have to pay the <b>booking fee.</b></h6>
                  <hr>
                  
                  <h6 style="text-align:center; font-size: 15px; font-weight: 700; padding-top: 10px;">Step 2: Upload GCash Receipt</h6>
                  <div class="d-flex justify-content-center"><button class="btn btn-success gcash-receipt">Upload</button>
                  </div>
                  
                  <h6 style="text-align:center; font-size: 10px; font-weight: 500; padding-top: 10px; color: rgb(55, 152, 10);">Note: <b>Gcash Receipt</b> should be on high quality.</h6>
                </div>   
                  
                
              </div>

          </div>
        </div>
      </div>   
    </div>
    


    <script src="../assets/js/findersBookings.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!-- when edit is clicked -->
  <!-- <script type="text/javascript">
     document.getElementById("edit-booking-request").onclick = function () {
      location.href = "booking-request";
  };
    </script> -->
  </body>
</html>
