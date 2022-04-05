<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    
    <link rel="stylesheet" href="assets/css/findersNotification.css" />
    
    <title>FindN</title>
  </head>
  <body>

      <div class="transaction-form-wrapper d-flex justify-content-center mt-1 mb-5">
        <div class="transaction-form p-2 " style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
          
          <h3 class="back-button-title mt-3">Notifications</h3> 
          <div class="menu">
            <div class="menu-tab">
              <button class="btn btn-tab btn-ripple active shadow-none" data-target-tab="#all-tab">
                All
              </button>
              <button class="btn btn-tab btn-ripple shadow-none" data-target-tab="#pending">
                Unread
              </button>
            </div>
          </div>
          
          <!-- <div class="menu-search">
            <div class="menu-tab-search m-auto justify-content-between px-4">
              <div class="d-flex">
                <i class="search-icon fa-solid fa-search"></i>
                <input class="search-input" type="text" name="" id="search-transaction" placeholder="Search...">  
              </div>
              <i class="clear fa-solid fa-xmark" onclick="document.getElementById('search-transaction').value =''"></i>
            </div>
          </div> -->
          <br>

          <!-- CONTENT  -->
          <div class="transaction-body justify-content-center">
            <div class="transaction-content">

              <!-- all -->
              <div class="content active " id="all-tab">

                <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"></p>
              
                <!-- MESSAGE -->
                <div class="card-holder click_transaction mb-3" style="border-left: 8px solid #7B7B7C;">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-comment-dots" style="font-size: 35px; color: #7B7B7C;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Message</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b>Message from admin:</b>  Please be on time and dont be late for 20 mins. Thank you!! -TNC Admin</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>

                 <!-- BOOKED SUCCESSFULLY-->
                 <div class="card-holder click_transaction mb-3" style="border-left: 8px solid rgb(5, 134, 29);">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-trophy" style="font-size: 35px; color: rgb(5, 134, 29);"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Booking Successful</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card">TNC </b> booking request transaction <b style="color:green">successfully</b> booked. You can now proceed to the intended cafe you booked. Have Fun Finder!</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                
                <!-- SUCCESS TO PROCEED PAYMENT -->
                <div class="card-holder click_transaction mb-3" style="border-left: 8px solid rgb(5, 134, 29);">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-check-circle" style="font-size: 35px; color: rgb(5, 134, 29);"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Success</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card">TNC </b> booking request transaction was <b style="color:green">accepted</b> by the admin. Please proceed to <b style="color:blue">payment</b> options.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>

                <!-- PENDING -->
                <div class="card-holder click_transaction mb-3" style="border-left: 8px solid #EDD94C;">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-user-clock" style="font-size: 35px; color: #EDD94C; padding-left: 5px;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Pending</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;">Please wait for your <b class="shop-name-card">Voyager </b> booking request to be accepted by the admin. Status <b style="color:#EDD94C;">pending </b>.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image3.jpg" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>

                <!-- SUCCESS MARKED READ-->
                <div class="card-holder-read click_transaction mb-3" style="border-left: 8px  solid rgb(5, 134, 29);">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-check-circle" style="font-size: 35px; color: rgb(5, 134, 29);"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Success</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card">GameCity </b> booking request transaction was <b style="color:green">accepted</b> by the admin. Please proceed to <b style="color:blue">payment</b> options.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image2.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>

                <!-- DENIED-->
                <div class="card-holder click_transaction mb-3" style="border-left: 8px  solid red;">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-circle-xmark" style="font-size: 35px; color: red;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Failed</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card">Level Cap </b> booking request transaction were <b style="color:red">denied</b> by the admin.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image5.jpg" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>

                <!-- MARKED READ -->
                <div class="card-holder-read click_transaction mb-3" style="border-left: 8px  solid red;">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-circle-xmark" style="font-size: 35px; color: red;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Failed</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card">G-7 </b> booking request transaction were <b style="color:red">denied</b> by the admin.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image3.jpg" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>

              </div>

              <!-- Pending -->
              <div class="content" id="pending">

                    
                    <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"></p>
                    
                  <!-- SUCCESS MARKED READ-->
                <div class="card-holder-read click_transaction mb-3" style="border-left: 8px  solid rgb(5, 134, 29);">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-check-circle" style="font-size: 35px; color: rgb(5, 134, 29);"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Success</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card">GameCity </b> booking request transaction was <b style="color:green">accepted</b> by the admin.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image2.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                    
                    <!-- MARKED READ -->
                <div class="card-holder-read click_transaction mb-3" style="border-left: 8px  solid red;">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-circle-xmark" style="font-size: 35px; color: red;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Failed</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card">G-7 </b> booking request transaction were <b style="color:red">denied</b> by the admin.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image3.jpg" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                        

                
              </div>

              </div>
            </div>
          </div>
        </div>
      </div>

        <script src="assets/js/findersNotification.js" ></script>
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


                });
          </script>


  </body>
</html>
