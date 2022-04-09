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
    

      <div class="transaction-form-wrapper d-flex justify-content-center mt-1 mb-5">
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
              <button class="btn btn-tab btn-ripple active  shadow-none" data-target-tab="#today">
                Today
              </button>
              <button class="btn btn-tab btn-ripple  shadow-none" data-target-tab="#all-tab">
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
              <i class="clear fa-solid fa-xmark close-search" onclick="document.getElementById('search-transaction').value =''"></i>
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
              <!-- today -->
              <div class="content active" id="today">

              <?php foreach ($listofbookings as $row) {?> 
                <?php date_default_timezone_set("Asia/Bangkok"); 
                  
                  if(date("M j, Y") == date("M j, Y", strtotime($row->arrival_date))){?>  
                <div class="transaction-card ">
                <p class="legendTitle m-0 text-muted d-flex justify-content-start "  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"><?php echo date("M j, Y", strtotime($row->arrival_date));?></p>
                <?php if($row->transaction_status == "pending"){
                    $color = "border-left: 15px solid rgb(233, 220, 36);";
                  }else if($row->transaction_status == "accepted" && $row->payment_status == "paid"){
                    $color = "border-left: 15px solid  rgb(233 97 18);";
                  }
                  else if($row->transaction_status == "accepted"){
                    $color = "border-left: 15px solid rgb(54, 157, 79);";
                  }
                ?>
                
                <div class="card-holder click_transaction" transaction-id="<?php echo $row->transaction_id?>" style="<?php echo $color;?>">

                  <!-- NEW CARD DESIGN -->
                  <div class="row d-flex justify-content-between">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-calendar-plus" style="font-size: 25px; color: rgb(73, 71, 71);"></i><br>
                    </div>
                    <div class="col-5 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 15px; font-weight: 600;"><?php echo $row->shop_name?></h6><hr>
                      <p style="font-size: 11px; font-weight: 400;">Transaction Status :</p>
                      <p style="font-size: 11px; font-weight: 400;">Payment Status:</p>
                    </div>
                    <div class="col-5 booking-list" style="padding-top:10px; text-align:center"> 
                    <h6 style="font-size: 15px; font-weight: 600;"><?php echo $row->name?></h6><hr>
                      <p class ="card-status trans-stat"><?php echo $row->transaction_status?></p>
                      <p class ="card-status pay-stat"><?php echo $row->payment_status?></p>
                    </div>
                  </div>
                </div>
                <hr>
                </div>
      
                <?php   
                }
                }?>  


              </div>



              <!-- all -->
              <div class="content" id="all-tab">

                <?php foreach ($listofbookings as $row) {?> 
                <div class="transaction-card ">
                <p class="legendTitle m-0 text-muted d-flex justify-content-start "  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"><?php echo date("M j, Y", strtotime($row->arrival_date));?></p>
                <?php if($row->transaction_status == "pending"){
                    $color = "border-left: 15px solid rgb(233, 220, 36);";
                  }else if($row->transaction_status == "accepted" && $row->payment_status == "paid"){
                    $color = "border-left: 15px solid  rgb(233 97 18);";
                  }
                  else if($row->transaction_status == "accepted"){
                    $color = "border-left: 15px solid rgb(54, 157, 79);";
                  }
                ?>
                
                <div class="card-holder click_transaction" transaction-id="<?php echo $row->transaction_id?>" style="<?php echo $color;?>">

                  <!-- NEW CARD DESIGN -->
                  <div class="row d-flex justify-content-between">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-calendar-plus" style="font-size: 25px; color: rgb(73, 71, 71);"></i><br>
                    </div>
                    <div class="col-5 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 15px; font-weight: 600;"><?php echo $row->shop_name?></h6><hr>
                      <p style="font-size: 11px; font-weight: 400;">Transaction Status :</p>
                      <p style="font-size: 11px; font-weight: 400;">Payment Status:</p>
                    </div>
                    <div class="col-5 booking-list" style="padding-top:10px; text-align:center"> 
                    <h6 style="font-size: 15px; font-weight: 600;"><?php echo $row->name?></h6><hr>
                      <p class ="card-status trans-stat"><?php echo $row->transaction_status?></p>
                      <p class ="card-status pay-stat"><?php echo $row->payment_status?></p>
                    </div>
                  </div>
                </div>
                <hr>
                </div>
                <?php   
                }?>  

              </div>

              <!-- Pending -->
              <div class="content" id="pending">

                  <?php foreach ($listofbookings as $row){
                      if($row->transaction_status  == "pending"){
                    ?> 
                      <div class="transaction-card ">
                    <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"><?php echo date("M j, Y", strtotime($row->arrival_date));?></p>
                    <div class="card-holder click_transaction" transaction-id="<?php echo $row->transaction_id?>"  style="border-left: 15px solid rgb(233, 220, 36);">

                        
                  <!-- NEW CARD DESIGN -->
                  <div class="row d-flex justify-content-between">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-calendar-plus" style="font-size: 25px; color: rgb(73, 71, 71);"></i><br>
                    </div>
                    <div class="col-5 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 15px; font-weight: 600;"><?php echo $row->shop_name;?></h6><hr>
                      <p style="font-size: 11px; font-weight: 400;">Transaction Status :</p>
                      <p style="font-size: 11px; font-weight: 400;">Payment Status :</p>
                    </div>
                    <div class="col-5 booking-list" style="padding-top:10px; text-align:center"> 
                    <h6 style="font-size: 15px; font-weight: 600;"><?php echo $row->name;?></h6><hr>
                      <p class ="card-status trans-stat"><?php echo $row->transaction_status?></p>
                      <p class ="card-status pay-stat"><?php echo $row->payment_status;?></p>
                    </div>
                  </div>
                  
                    <!-- end of cardholder -->
                      </div>
                      <hr>
                      </div>
                <?php   
                  }
                  }?>  
                
              </div>

              <!-- accepted -->
              <div class="content" id="accepted">
                <?php foreach ($listofbookings as $row){
                  if($row->transaction_status  == "accepted"){
                    ?> 
                      <div class="transaction-card ">
                    <?php if($row->transaction_status == "accepted" && $row->payment_status == "paid"){
                              $color = "border-left: 15px solid  rgb(233 97 18);";
                          }else if($row->transaction_status == "accepted"){
                              $color = "border-left: 15px solid rgb(54, 157, 79);";
                          }
                    
                    ?>
                    <p class="legendTitle m-0 text-muted d-flex justify-content-startd-none"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"><?php echo date("M j, Y", strtotime($row->arrival_date));?></p>
                  
                    <div class="card-holder click_transaction" transaction-id="<?php echo $row->transaction_id?>"  style="<?php echo $color;?>">
                      <!-- <div class="row">
                        <div class="col-3 booking-list pt-3 icon-left"> 
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
                      </div> -->

                      <div class="row d-flex justify-content-between">
                        <div class="col-2 booking-list icon-left"> 
                          <i class="booking-icon fa-solid fa-calendar-plus" style="font-size: 25px; color: rgb(73, 71, 71);"></i><br>
                        </div>
                        <div class="col-5 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                          <h6 style="font-size: 15px; font-weight: 600;"><?php echo $row->shop_name;?></h6><hr>
                          <p style="font-size: 11px; font-weight: 400;">Transaction Status :</p>
                          <p style="font-size: 11px; font-weight: 400;">Payment Status :</p>
                        </div>
                        <div class="col-5 booking-list" style="padding-top:10px; text-align:center"> 
                        <h6 style="font-size: 15px; font-weight: 600;"><?php echo $row->name;?></h6><hr>
                          <p class ="card-status trans-stat"><?php echo $row->transaction_status?></p>
                          <p class ="card-status pay-stat"><?php echo $row->payment_status;?></p>
                        </div>
                      </div>                      



                    </div>
                    <!-- end of cardholder -->
                    <hr>
                    </div>
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
                    window.location = "findersTransactionDetail/"+transaction_id;

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
      <script>
        //for to find uppercase letter
        jQuery.expr[':'].contains = function(a, i, m) {
            return jQuery(a).text().toUpperCase()
                .indexOf(m[3].toUpperCase()) >= 0;
          };
        $('#search-transaction').keyup(function (){
           $('.transaction-card').removeClass('d-none');
           $('.booking-list').removeClass('d-none');
            var filter = $(this).val(); // get the value of the input, which we filter on
            // alert(filter);
            // $('.transcation-body').find('.transaction-card p:not(:contains("'+filter+'"))').parent().parent().addClass('d-none');
            // $('.transaction-content').find('.content .transaction-card p:not(:contains("'+filter+'"))').parent().css({
            //     "color": "green",
            //     "border": "2px solid green"
            // });
            $('.transaction-content').find('.content .transaction-card:not(:contains("'+filter+'"))').addClass('d-none');
            // data = $('.transcation-body').find('.transaction-card p:not(:contains("'+filter+'"))').parent();
            // console.log(data);
        })
        $(".close-search").click(function(){
           $('.transaction-card').removeClass('d-none');
           $('.booking-list').removeClass('d-none');
        });
      </script>
  </body>
</html>
