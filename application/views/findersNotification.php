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
              <button class="btn btn-tab btn-ripple active shadow-none" data-target-tab="#unseen">
                Unread
              </button>
              <button class="btn btn-tab btn-ripple  shadow-none" data-target-tab="#all-tab">
                All
              </button>

            </div>
          </div>
          

          <br>

          <!-- CONTENT  -->
          <div class="transaction-body justify-content-center">
            <div class="transaction-content">

              <!-- all -->
              <div class="content " id="all-tab">

              <?php foreach ($Notification as $row) {?> 
                <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"></p>
              
                <?php if($row->noti_title == "Message"){?>
                <!-- MESSAGE -->
                <div class="card-holder click_notification mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>" style="border-left: 8px solid #7B7B7C;" data-toggle="modal" data-target="#MessageModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-comment-dots" style="font-size: 35px; color: #7B7B7C;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Message</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b>Message from admin:</b> <?php echo $row->noti_body;?>  <b>-<?php echo $row->shop_name;?> Admin</b></p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>

                <?php if($row->noti_title == "Booking_Successful"){?>
                 <!-- BOOKED SUCCESSFULLY-->
                 <div class="card-holder click_notification mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px solid rgb(5, 134, 29);" data-toggle="modal" data-target="#BookingSuccessfulModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-trophy" style="font-size: 35px; color: rgb(5, 134, 29);"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Booking Successful</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card"><?php echo $row->shop_name;?> </b> booking request transaction <b style="color:green"><?php echo $row->noti_body;?></b> You can now proceed to the intended cafe you booked. Have Fun Finder!</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>
                
                <?php if($row->noti_title == "Success"){?>
                <!-- SUCCESS TO PROCEED PAYMENT -->
                <div class="card-holder click_notification mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px solid rgb(5, 134, 29);" data-toggle="modal" data-target="#SucessModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-check-circle" style="font-size: 35px; color: rgb(5, 134, 29);"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Success</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card"><?php echo $row->shop_name;?></b> booking request transaction was <b style="color:green"><?php echo $row->noti_body;?></b> by the admin. Please proceed to <b style="color:blue">payment</b> options.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>

                <?php if($row->noti_title == "Pending"){?>
                <!-- PENDING -->
                <div class="card-holder click_notification mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px solid #EDD94C;" data-toggle="modal" data-target="#PendingModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-user-clock" style="font-size: 35px; color: #EDD94C; padding-left: 5px;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Pending</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;">Please wait for your <b class="shop-name-card"><?php echo $row->shop_name;?></b> <?php echo $row->noti_body;?>. Status <b style="color:#EDD94C;">pending </b>.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image3.jpg" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>

              
                <?php if($row->noti_title == "Fail"){?>
                    <!-- DENIED-->
                <div class="card-holder click_notification mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px  solid red;" data-target="#FailedModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-circle-xmark" style="font-size: 35px; color: red;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Failed</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card"><?php echo $row->shop_name;?></b> booking request transaction were <b style="color:red">denied</b> by the admin.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image5.jpg" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>

                <?php }?>
              </div>

              <!--Unseen-->
              <div class="content active" id="unseen">

                    <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"></p>
              <?php foreach ($Notification as $row) {
                  if($row->status == "unseen"){  
              ?> 
                <p class="legendTitle m-0 text-muted d-flex justify-content-start"  style="font-size: 12px; padding-bottom: 5px; font-weight: 800;"></p>
              
                <?php if($row->noti_title == "Message"){?>
                <!-- MESSAGE -->
                <div class="card-holder click_notification-unread mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px solid #7B7B7C;" data-toggle="modal" data-target="#MessageModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-comment-dots " style="font-size: 35px; color: #7B7B7C;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Message</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b>Message from admin:</b> <?php echo $row->noti_body;?>  <b>-<?php echo $row->shop_name;?> Admin</b></p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>

                <?php if($row->noti_title == "Booking_Successful"){?>
                 <!-- BOOKED SUCCESSFULLY-->
                 <div class="card-holder click_notification-unread mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px solid rgb(5, 134, 29);" data-toggle="modal" data-target="#BookingSuccessfulModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-trophy" style="font-size: 35px; color: rgb(5, 134, 29);"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Booking Successful</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card"><?php echo $row->shop_name;?> </b> booking request transaction <b style="color:green"><?php echo $row->noti_body;?></b> You can now proceed to the intended cafe you booked. Have Fun Finder!</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>
                
                <?php if($row->noti_title == "Success"){?>
                <!-- SUCCESS TO PROCEED PAYMENT -->
                <div class="card-holder click_notification-unread mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px solid rgb(5, 134, 29);" data-toggle="modal" data-target="#SucessModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-check-circle" style="font-size: 35px; color: rgb(5, 134, 29);"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Success</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card"><?php echo $row->shop_name;?></b> booking request transaction was <b style="color:green"><?php echo $row->noti_body;?></b> by the admin. Please proceed to <b style="color:blue">payment</b> options.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image1.png" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>

                <?php if($row->noti_title == "Pending"){?>
                <!-- PENDING -->
                <div class="card-holder click_notification-unread mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px solid #EDD94C;" data-toggle="modal" data-target="#PendingModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-user-clock" style="font-size: 35px; color: #EDD94C; padding-left: 5px;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Pending</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;">Please wait for your <b class="shop-name-card"><?php echo $row->shop_name;?></b> <?php echo $row->noti_body;?>. Status <b style="color:#EDD94C;">pending </b>.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image3.jpg" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i>
                    </div>
                  </div>
                </div>
                <?php }?>

              
                <?php if($row->noti_title == "Fail"){?>
                    <!-- DENIED-->
                <div class="card-holder click_notification-unread mb-3" status="<?php echo $row->status;?>" notif_id="<?php echo $row->finder_notif_id;?>"  style="border-left: 8px  solid red;" data-target="#FailedModal<?php echo $row->finder_notif_id;?>">
                  <div class="row d-flex justify-content-center">
                    <div class="col-2 booking-list icon-left"> 
                      <i class="booking-icon fa-solid fa-circle-xmark" style="font-size: 35px; color: red;"></i><br>
                    </div>
                    <div class="col-6 booking-list" style="border-left: 1px solid rgb(219, 219, 219);  padding-top:10px; text-align:left"> 
                      <h6 style="font-size: 20px; font-weight: 600;">Failed</h6>
                      <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card"><?php echo $row->shop_name;?></b> booking request transaction were <b style="color:red">denied</b> by the admin.</p>
                    </div>
                    <div class="col-2 booking-list icon-left"> 
                      <img src="assets/images/Image5.jpg" class="shop-image-icon">
                    </div>
                    <div class="col-1 booking-list icon-close"> 
                      <button><i class="booking-icon fa-solid fa-xmark delete-notification" noti_id="<?php echo $row->finder_notif_id;?>" id="close" style="font-size: 15px;"></i></button>
                    </div>
                  </div>
                </div>
                <?php }?>


                <?php }
                }?>
                        

                
              </div>

        
              <!-- Modals -->
            <?php foreach ($Notification as $row) {?> 
              <?php if($row->noti_title == "Message"){?>      
              <!-- Message modal -->
              <div class="modal fade" id="MessageModal<?php echo $row->finder_notif_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
                          <h3>Message</h3> <i class="fa fa-bell"></i>
                          <br>
                          <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b>Message from admin:</b> <?php echo $row->noti_body;?>  <b>-<?php echo $row->shop_name;?> Admin</b></p>
                          <br>
                         
                          <div class="text-center mb-3"> <button class="btn btn-primary w-50 rounded-pill b1" data-dismiss="modal">Close</button> </div> 
                      </div>
                  </div>
              </div>
              <?php }?>
              <?php if($row->noti_title == "Success"){?>  
              <!--success Modal -->
              <div class="modal fade" id="SucessModal<?php echo $row->finder_notif_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content py-md-5 px-md-4 p-sm-5 p-4">
                          <h3>Success</h3> <i class="fa fa-bell"></i>
                          <br>
                          <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card"><?php echo $row->shop_name;?></b> booking request transaction was <b style="color:green"><?php echo $row->noti_body;?></b> by the admin. Please proceed to <b style="color:blue">payment</b> options.</p>
                          <br>
                          <div class="text-center mb-2"><a href="findersTransactionDetail/<?php echo $row->transaction_id;?>" class="btn btn-primary w-50 rounded-pill b1">View Transaction</a></div> 
                          <div class="text-center mb-3"> <button class="btn btn-primary w-50 rounded-pill b1" data-dismiss="modal">Close</button> </div> 
                      </div>
                  </div>
              </div>
              <?php }?>
              <?php if($row->noti_title == "Pending"){?>        
              <!-- pending modal -->
              <div class="modal fade" id="PendingModal<?php echo $row->finder_notif_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
                          <h3>Pending</h3> <i class="fa fa-bell"></i>
                          <br>
                          <p class=" text-muted " style="font-size: 11px; font-weight: 400;">Please wait for your <b class="shop-name-card"><?php echo $row->shop_name;?></b> <?php echo $row->noti_body;?>. Status <b style="color:#EDD94C;">pending </b>.</p>
                          <br>
                          <div class="text-center mb-2"><a href="findersTransactionDetail/<?php echo $row->transaction_id;?>" class="btn btn-primary w-50 rounded-pill b1">View Transaction</a></div> 
                          <div class="text-center mb-3"> <button class="btn btn-primary w-50 rounded-pill b1" data-dismiss="modal">Close</button> </div> 
                      </div>
                  </div>
              </div>
              <?php }?>
              <?php if($row->noti_title == "Booking_Successful"){?> 
              <!--Booking Successful Modal -->
              <div class="modal fade" id="BookingSuccessfulModal<?php echo $row->finder_notif_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
                          <h3>Booking Successful</h3> <i class="fa fa-bell"></i>
                          <br>
                          <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card"><?php echo $row->shop_name;?> </b> booking request transaction <b style="color:green"><?php echo $row->noti_body;?></b> You can now proceed to the intended cafe you booked. Have Fun Finder!</p>
                          <br>
                          <div class="text-center mb-2"><a href="findersTransactionDetail/<?php echo $row->transaction_id;?>" class="btn btn-primary w-50 rounded-pill b1">View Transaction</a></div> 
                          <div class="text-center mb-3"> <button class="btn btn-primary w-50 rounded-pill b1" data-dismiss="modal">Close</button> </div> 
                      </div>
                  </div>
              </div>
              <?php }?>
              <?php if($row->noti_title == "Fail"){?>
              <!--Failed -->
              <div class="modal fade" id="FailedModal<?php echo $row->finder_notif_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
                          <h3>Failed</h3> <i class="fa fa-bell"></i>
                          <br>
                          <p class=" text-muted " style="font-size: 11px; font-weight: 400;"><b class="shop-name-card">G-7 </b> booking request transaction were <b style="color:red">denied</b> by the admin.</p>
                          <br>
                          <div class="text-center mb-4"><a href="findersTransactionDetail/<?php echo $row->transaction_id;?>" class="btn btn-primary w-50 rounded-pill b1">View Transaction</a></div> 
                          <div class="text-center mb-3"> <button class="btn btn-primary w-50 rounded-pill b1" data-dismiss="modal">Close</button> </div> 
                      </div>
                  </div>
              </div>
              <?php }?>   
              <?php }?>                               
              <!--modals -->

              </div>
            </div>
          </div>
        </div>
      </div>

        <script src="assets/js/findersNotification.js" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
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
$(document).on('click','.delete-notification',function(){ 
  // $(".modal").hide()
    noti_id = $(this).attr("noti_id");
    BASE_URL = "<?php echo base_url();?>";
 
    $(this).parent().parent().parent().addClass('d-none');
    $(this).parent().parent().parent().removeAttr("data-target");
    $.ajax({
          url: BASE_URL+"deleteNotification/"+noti_id,
          type: "POST",
          data:{},
          success: function(data)
          {
           
          }
        });
});
</script>

<script>
$(document).on('click','.click_notification-unread',function(){ 
    noti_id = $(this).attr("notif_id");
    BASE_URL = "<?php echo base_url();?>";
    status = $(this).attr("status");
    if(status=="unseen"){
      $(this).addClass('d-none');
      // $(".click_notification[notif_id='"+noti_id+"']").addClass('d-none');
        $.ajax({
              url: BASE_URL+"updateNotificationStatus/"+noti_id,
              type: "POST",
              data:{},
              success: function(data)
              {
              
              }
            });
    }
  
});

$(document).on('click','.click_notification',function(){ 
    noti_id = $(this).attr("notif_id");
    BASE_URL = "<?php echo base_url();?>";
    status = $(this).attr("status");
 

    if(status=="unseen"){
      $(".click_notification-unread[notif_id='"+noti_id+"']").addClass('d-none');
      
        $.ajax({
              url: BASE_URL+"updateNotificationStatus/"+noti_id,
              type: "POST",
              data:{},
              success: function(data)
              {
              
              }
            });
    }
  
});
</script>

  </body>
</html>
