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
    

      <div class="transaction-form-wrapper d-flex justify-content-center mt-1">
        <div class="transaction-form p-2 " style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
          <div class=" d-flex justify-content-between p-3 m-0">
              <a href="findershomepage"> 
                <!-- <i class="back-icon fa-solid fa-chevron-left"></i> -->
              </a>  
              <h3 class="back-button-title">Bookings</h3> 
              <a href="#filter">
                <!-- <i class="filter-icon fa-solid fa-stream"></i>  -->
              </a>
          </div>
          <div class="menu">
            <div class="menu-tab">
              <button class="btn btn-tab btn-ripple active shadow-none" data-target-tab="#all-tab">
                All
              </button>
              <button class="btn btn-tab btn-ripple shadow-none" data-target-tab="#pending">
                Pending
              </button>
              <button class="btn btn-tab btn-ripple shadow-none" data-target-tab="#accepted">
                Accepted
              </button>
            </div>
          </div>
          
          <div class="menu-search">
            <div class="menu-tab-search m-auto justify-content-between px-4">
              <div class="d-flex">
                <i class="search-icon fa-solid fa-search"></i>
                <input class="search-input" type="text" name="" id="search-transaction" placeholder="Search...">  
              </div>
              <i class="clear fa-solid fa-xmark" onclick="document.getElementById('search-transaction').value =''"></i>
            </div>
          </div>
          <br>
          <!-- LEGEND -->
            <div class="legend d-flex justify-content-between align-items-center my-2 mx-3">
              <p class="legendTitle m-0 text-muted">Legend:</p>
              <div class="legend-wrap d-flex align-items-center justify-content-end flex-wrap">
                <div class="legend legend1 py-2 px-3 mx-1">
                  <p class="legendText p-0 m-0" >Sucessful</p>
                </div>
                <div class="legend legend2 py-2 px-3 mx-1">
                  <p class="legendText p-0 m-0">Accepted</p>
                </div>
                <div class="legend legend3 py-2 px-3 mx-1">
                  <p class="legendText p-0 m-0">Pending</p>
                </div>
              </div>
              
            </div>

          <!-- LEGEND END -->
          <div class="transaction-body justify-content-center">
            <div class="transaction-content">

              <!-- all -->
              <div class="content active" id="all-tab">

                <?php foreach ($listofbookings as $row) {?> 

                <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"><?php echo date("M j, Y", strtotime($row->arrival_date));?></p>
                <?php if($row->transaction_status == "pending"){
                    $color = "border-left: 10px solid rgb(233, 220, 36);";
                  }else if($row->transaction_status == "accepted" && $row->payment_status == "paid"){
                    $color = "border-left: 10px solid  rgb(233 97 18);";
                  }
                  else if($row->transaction_status == "accepted"){
                    $color = "border-left: 10px solid rgb(54, 157, 79);";
                  }
                ?>
                
                <div class="card-holder click_transaction" transaction-id="<?php echo $row->transaction_id?>" style="<?php echo $color;?>">
                  <div class="row">
                    <div class="col-3 booking-list pt-3 align-items-center"> 
                      <h6 style="font-size: 15px; font-weight: 600;">Request</h6>
                      <i class="booking-icon fa-solid fa-calendar-plus" style="font-size: 25px; color: rgb(73, 71, 71);"></i><br>
                    </div>
                    <div class="col-3 booking-list pt-3" style="border-left: 1px solid rgb(219, 219, 219)"> 
                      <h6 style="font-size: 15px; font-weight: 600;">Cafe Name</h6>
                      <p style="font-size:12px"><?php echo $row->shop_name?></p>
                    </div>
                    <div class="col-3 booking-list pt-3" > 
                      <h6 style="font-size: 15px; font-weight: 600;">Payment Status</h6>
                      <p style="font-size:12px"><?php echo $row->payment_status?></p>
                    </div>
                    <div class="col-3 booking-list pt-3"> 
                      <h6 style="font-size: 15px; font-weight: 600;">Booking Status</h6>
                      <p style="font-size:12px"><?php echo $row->transaction_status?></p>
                    </div>
                  </div>
                </div>
                <hr>

                <?php   
                }?>  

              </div>

              <!-- Pending -->
              <div class="content" id="pending">

                  <?php foreach ($listofbookings as $row){
                      if($row->transaction_status  == "pending"){
                    ?> 
                    
                    <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"><?php echo date("M j, Y", strtotime($row->arrival_date));?></p>
                    <div class="card-holder click_transaction" transaction-id="<?php echo $row->transaction_id?>"  style="border-left: 10px solid rgb(233, 220, 36);">
                      <div class="row">
                        <div class="col-3 booking-list pt-3 align-items-center"> 
                          <h6 style="font-size: 15px; font-weight: 600;">Request</h6>
                          <i class="booking-icon fa-solid fa-calendar-plus" style="font-size: 25px; color: rgb(73, 71, 71);"></i><br>
                        </div>
                        <div class="col-3 booking-list pt-3" style="border-left: 1px solid rgb(219, 219, 219)"> 
                          <h6 style="font-size: 15px; font-weight: 600;">Cafe Name</h6>
                          <p style="font-size:12px"><?php echo $row->shop_name;?></p>
                        </div>
                        <div class="col-3 booking-list pt-3" > 
                          <h6 style="font-size: 15px; font-weight: 600;">Payment Status</h6>
                          <p style="font-size:12px"><?php echo $row->payment_status;?></p>
                        </div>
                        <div class="col-3 booking-list pt-3"> 
                          <h6 style="font-size: 15px; font-weight: 600;">Booking Status</h6>
                          <p style="font-size:12px"><?php echo $row->transaction_status?></p>
                        </div>
                      </div>
                    </div>
                    <!-- end of cardholder -->
                    <hr>
              
                <?php   
                  }
                  }?>  
                
              </div>

              <!-- accepted -->
              <div class="content" id="accepted">
                <?php foreach ($listofbookings as $row){
                  if($row->transaction_status  == "accepted"){
                    ?> 
                    
                    <?php if($row->transaction_status == "accepted" && $row->payment_status == "paid"){
                              $color = "border-left: 10px solid  rgb(233 97 18);";
                          }else if($row->transaction_status == "accepted"){
                              $color = "border-left: 10px solid rgb(54, 157, 79);";
                          }
                    
                    ?>
                    <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"><?php echo date("M j, Y", strtotime($row->arrival_date));?></p>
                  
                    <div class="card-holder click_transaction" transaction-id="<?php echo $row->transaction_id?>"  style="<?php echo $color;?>">
                      <div class="row">
                        <div class="col-3 booking-list pt-3 align-items-center"> 
                          <h6 style="font-size: 15px; font-weight: 600;">Request</h6>
                          <i class="booking-icon fa-solid fa-calendar-plus" style="font-size: 25px; color: rgb(73, 71, 71);"></i><br>
                        </div>
                        <div class="col-3 booking-list pt-3" style="border-left: 1px solid rgb(219, 219, 219)"> 
                          <h6 style="font-size: 15px; font-weight: 600;">Cafe Name</h6>
                          <p style="font-size:12px"><?php echo $row->shop_name;?></p>
                        </div>
                        <div class="col-3 booking-list pt-3" > 
                          <h6 style="font-size: 15px; font-weight: 600;">Payment Status</h6>
                          <p style="font-size:12px"><?php echo $row->payment_status;?></p>
                        </div>
                        <div class="col-3 booking-list pt-3"> 
                          <h6 style="font-size: 15px; font-weight: 600;">Booking Status</h6>
                          <p style="font-size:12px"><?php echo $row->transaction_status?></p>
                        </div>
                      </div>
                    </div>
                    <!-- end of cardholder -->
                    <hr>

                <?php   
                  }
                  }?>  
              </div>
            </div>
          </div>
        </div>
      </div>

        <script src="assets/js/findersBookings.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script>
            
              $('.search-input').keyup(function(){
                var typed = $(this).val();
              if(typed === "") {
                $(".clear").css("display", "none");
              }
              else{
                $(".clear").css("display", "block");
              }
              });

              $('.clear').click(function(){
                $(this).hide();
              });

          </script>

          <script>
                $(document).on('click','.click_transaction',function(){ 
                    var transaction_id = $(this).attr("transaction-id");
                    window.location = "findersTransactionDetail";

                    // $.ajax({
                    // url:"sendVerificationCodeToEmail",
                    // method: "POST",
                    // data: {email:emailaddress},
                    // success: function (data) {
                    //             alert(data);
                    //         },
                    // });	

                });
          </script>


  </body>
</html>
