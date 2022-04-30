<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <title>FindN Admin Panel</title>  

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/adminHeader.css">
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  </head>
    <!-- Bootstrap CDN -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</head>

  <body>
  <?php foreach($shop_details as $data){?>
   <section class="header-top ">
      <div class="top">
         <a id="show-sidebar" href="#"><i class="fas fa-bars"></i></a>
          <h4 class="shop_name"><?php echo $data->shop_name;?> CYBERCAFE ADMIN PANEL</h4>
          <div class="profile-img-name">
            <div class="notification-div d-flex">
               <i class="icon-notif fa-solid fa-bell btn" data-toggle="dropdown"></i>
               <span class="notif-badge badge-pill badge-danger" id="count_notif"></span>
               <div class="dropdown-menu dropdown-menu-right" id="notif_details">
                  <!-- <div class="dropdown-item d-flex align-items-center justify-content-between p-2 pl-3 pr-3">
                     <i class="close-notif fa-solid fa-trash-alt"></i>
                     <img class="profile-img-dropdown" src="assets/images/Prof.png">
                     <div class="d-flex flex-column">
                        <p class="dropdown-message" type="text" style="color:#fd7238">Requesting to Book</p>
                        <p class="dropdown-name text-muted" type="text">John Ken Dublin</p>
                     </div>
                     
                  </div>
                  <div class="dropdown-item d-flex align-items-center justify-content-start p-2 pl-3 pr-3">
                     <i class="close-notif fa-solid fa-trash-alt"></i>
                     <img class="profile-img-dropdown" src="assets/images/Prof1.png">
                     <div class="d-flex flex-column">
                        <p class="dropdown-message" type="text" style="color:#28a745">Payment Successful</p>
                        <p class="dropdown-name text-muted" type="text">John Dave Delgado</p>
                     </div> 
                  </div> -->
                  <!-- <div class="dropdown-item d-flex align-items-center justify-content-start p-2 pl-3 pr-3">
                     <i class="close-notif fa-solid fa-trash-alt"></i>
                     <img class="profile-img-dropdown" src="assets/images/">
                     <div class="d-flex flex-column">
                        <p class="dropdown-message" type="text" style="color:<?php if($nd->noti_body=="Request"){echo "#fd7238";}else if($nd->noti_body=="PaymentSuccess"){echo "#28a745";}?>"><?php echo $nd->noti_body;?></p>
                        <p class="dropdown-name text-muted" type="text"><?php echo $nd->firstname;?>,<?php echo $nd->lastname;?><br><?php echo $nd->transaction_id;?><br><?php echo $nd->noti_created;?></p>
                     </div>
                  </div> -->
               </div>

            </div>
                
             <span class="admin_name text-center" >Hello, <?php echo $admin_name?></span>
               <img class="profile-img" src="assets/upload/shop/admin/<?php echo $profile_pic?>"  onerror="this.src='assets/images/default.png';" alt="">
               
               <div class="dropdown ">
               <i class="icon-dropdown fa-solid fa-caret-down btn-sm"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <div class="account-set d-flex align-items-center justify-content-center">
                        <a class="dropdown-item" href="shopAdminAccountSettings"><i class="fa-solid fa-user"></i>Account Settings</a>
                     </div>
                     <div class="account-set d-flex align-items-center justify-content-center">
                        <a class="dropdown-item" href="adminlogin"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                     </div>
                  </div>
               </div>

               
               
               
         
            </div>
         </div>
      </div>

   </section>
   
      <!-- Sidebar Menu HTML -->
   <div class="page-wrapper chiller-theme toggled">
  
      <nav id="sidebar" class="sidebar-wrapper">
         <div class="sidebar-content">
            <div class="sidebar-brand">
               <img src="assets/images/Official_Logo.png" alt="">
               <h5>FindN</h5>
               <div id="close-sidebar">
                  <i class="fas fa-square-xmark" style="font-size: 25px;"></i>
               </div>
            </div>

            <div class="sidebar-header">
               <div class="user-pic">
                   <img class="logo-img" src="assets/upload/shop/<?php echo $data->shop_img_icon;?>" onerror="this.src='assets/upload/shop/defaultshopimg.png';" alt="">
                  <!-- <img class="logo-img" src="assets/images/Image1.png" alt=""> -->
               </div>
               <div class="user-info">
                  <span class="user-name"><?php echo $admin_name;?></span>
                 
                  <span class="user-role"><?php echo $data->shop_name;?> Administrator</span>
                  <div class="user-status d-flex align-items-center justify-content-start">

                     <!-- If Online -->
                     <!-- <i class="fa fa-circle" style="color:green"></i>
                     <p class="user-status-update">Online</p>   -->

                     <!-- If Offline -->
                     <i class="stat-circ fa fa-circle"></i>
                     <p class="user-status-update"><?php echo $data->Shop_Status;?></p>  
                     <?php }?>
                  </div>
               </div>
            </div>
            
            <!-- sidebar-header  -->
            <!-- <div class="sidebar-search">
               <div>
                  <div class="input-group">
                     <input type="text" class="form-control search-menu" placeholder="Search...">
                     <div class="input-group-append">
                        <span class="input-group-text">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- sidebar-search  -->

            <div class="sidebar-menu">
               <ul>
                  <li class="header-menu">
                        <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                           <div class="no-dropdown">
                              <a href="shopAdminDashboard">
                                 <i class="fa fa-store"></i>
                                 <span>Dashboard</span>
                                 <!-- <span class="badge badge-pill badge-warning">New</span> -->
                                 </a>
                           </div>
                        </li>
                        <li class="sidebar-dropdown">
                           <div class="no-dropdown">
                              <a href="shopAdminScanQR">
                                 <i class="fa fa-qrcode"></i>
                                 <span>Booking Scanner</span>
                                 <!-- <span class="badge badge-pill badge-warning">New</span> -->
                                 </a>
                           </div>
                        </li>
                        <li class="sidebar-dropdown">
                           <a href="#">
                           <i class="fa fa-calendar"></i>
                           <span>Bookings</span>
                           <span class="badge badge-pill badge-danger" id="header_bookcount"></span>
                           </a>
                           <div class="sidebar-submenu">
                              <ul>
                                 <li>
                                    <a href="shopAdminBookings">Requests
                                       <span class="badge badge-pill badge-danger" id="header2_bookcount"></span>
                                    </a>
                                    <a href="shopAdminBookings">List Of all Bookings
                                    </a>
                                    
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="sidebar-dropdown">
                           <a href="#">
                           <i class="fa fa-chart-line"></i>
                           <span>Reports</span>
                           </a>
                           <div class="sidebar-submenu">
                              <ul>
                                 <li>
                                    <a href="#">Total Bookings</a>
                                 </li>
                                 <li>
                                    <a href="#">Financial Reports</a>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="sidebar-dropdown">
                           <a href="#">
                           <i class="fa fa-id-card-alt"></i>
                           <span>Shop Profile</span>
                           </a>
                           <div class="sidebar-submenu">
                              <ul>
                                 <li>
                                    <a href="shopAdminFeed">Shop Profile Feed</a>
                                 </li>
                                 <li>
                                    <a href="shopAdminEditProfile">Edit Shop Details</a>
                                 </li>
                                 <li>
                                    <a href="shopAdminComputerType">Computer Type</a>
                                 </li>
                              </ul>
                           </div>
                        </li>

                        <li class="sidebar-dropdown">
                           <div class="no-dropdown d-flex align-items-center justify-content-between">
                              <a href="#">
                                 <i class="fa fa-store-alt"></i>
                                 <span>Shop Status</span>
                                 <?php foreach($shop_details as $data){?>
                                    <label class="switch"><input id="offline" type="checkbox" <?php if($data->Shop_Status == "Open"){echo "checked";}?>><span class="slider round"></span>
                                    </label>
                                 <?php }?>
                                 </a>
                           </div>
                        </li>


                        <span class="acc-sett">Account</span>
                        <li class="sidebar-dropdown">
                           <div class="no-dropdown">
                              <a href="shopAdminAccountSettings">
                                 <i class="fa fa-cog fa-spin"></i>
                                 <span>Account Settings</span>
                                 </a>
                           </div>
                        </li>

                        <li class="sidebar-dropdown">
                           <div class="no-dropdown">
                              <a href="Adminlogout_user">
                                 <i class="fa fa-right-from-bracket"></i>
                                 <span>Logout</span>
                                 </a>
                           </div>
                        </li>
                        
               </ul>
            </div>
         </div>

         <div class="sidebar-footer">
            <p style="padding: 10px; font-family: 'Poppins', sans-serif; font-size: 10px; text-align: right;">Developed by FindN </p>
         </div>
      </nav>

   </div>
<script src="assets/js/adminHeader.js"></script>
    <script>
            $(document).on("change", '#offline', function() {      
               var stat = "";
               var Base_URL = "<?php echo base_url();?>";

            if ($(this).is(':checked')) {
               stat="Open";
              // To verify
               }
            else {
               stat="Close";
               // To verify
            }
                  $.ajax({
                     url: Base_URL+"updateShopStatus/"+stat,
                     type: "POST",
                     success: function(data)
                     {

                        // alert("Status Updated!");
                        swal("Shop is "+stat, {
									icon: "success",
								}).then((value) => {
                           location.reload();
							}); 
                       
                     }
                  });
         });
    </script>
<script>
   setInterval(function(){
         BASE_URL = "<?php echo base_url();?>";
            $.ajax({
                        url:BASE_URL+"countPendingBook",
                        method:"GET", 
                        // data:{},
                        cache: false, 
                        success:function(data)
                        {
                          if(data>=0){
                            $("#header_bookcount").text(data);
                            $("#header2_bookcount").text(data);      
                          }  
                        }
                      }); 
   },100);
            //ajax;
    </script>
<script>
   setInterval(function(){
         BASE_URL = "<?php echo base_url();?>";
            $.ajax({
                        url:BASE_URL+"countNotifications",
                        method:"GET", 
                        // data:{},
                        cache: false, 
                        success:function(data)
                        {
                          if(data==0){
                           $(".notif-badge").css('display','none');
                          }
                          if(data>=0){
                            $("#count_notif").text(data);  
                          }
                        }
                      }); 
            //ajax;
   },100);
</script>
<script>
setInterval(function(){
$( document ).ready(function() {
    var Base_URL = "<?php echo base_url();?>";
    $("#notif_details").html("");
    $.ajax({
					url: Base_URL+"viewadminNotif",
					type: "GET",
               cache: false,
               async: false,
					success: function(data){
                           var result = JSON.parse(data);
                            for(var x = 0 ; x < result.length ; x ++)
                            {
                                 if(result[x]['noti_body'] == "Request"){
                                 $('#noti-body').css('color','#28a745');
                            }
                                notif_created = dateformat(result[x]['noti_created']);   
                                $("#notif_details").append("<div class='dropdown-item d-flex align-items-center justify-content-start p-2 pl-3 pr-3'> <i id='noti_id' class='close-notif fa-solid fa-trash-alt' notifid='"+result[x]['cp_noti_id']+"'></i> <img class='profile-img-dropdown' src='assets/upload/finder/"+result[x]['profile_pic']+"'> <div class='d-flex flex-column'> <p class='dropdown-message' id='noti-body' style='color: #fd7238;'>"+result[x]['noti_body']+"</p> <p class='dropdown-name text-muted' type='text'>"+result[x]['firstname']+" "+result[x]['lastname']+"<br>Transaction ID:"+result[x]['transaction_id']+"<br>"+notif_created+"</p> </div> </div>");
                            }
               }
    });
    // end of ajax
});
},1000);
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
   $(document).on("click",".close-notif",function(){
      var Base_URL = "<?php echo base_url();?>";
      var notif_id = $(this).attr("notifid");
      $.ajax({
            url:Base_URL+"deleteNotif/"+notif_id,
                type: "POST",
                success: function(data)
                {  
                }
            });
   });
</script>
  </body>
</html>