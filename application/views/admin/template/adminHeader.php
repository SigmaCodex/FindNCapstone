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

  </head>
  <body>

   <section class="header-top ">
      <div class="top">
         <a id="show-sidebar" href="#"><i class="fas fa-bars"></i></a>
          <h4 class="shop_name">TNC CYBERCAFE ADMIN PANEL</h4>
          <div class="profile-img-name">
             <div class="notification-div d-flex">
               <i class="icon-notif fa-solid fa-bell"></i>
               <span class="notif-badge  badge-pill badge-danger">3</span>
             </div>
            
               <span class="admin_name text-center" >Hello Admin</span>
              <img class="profile-img" src="assets/images/Prof.png" alt="">
              <i class="icon-dropdown fa-solid fa-caret-down"></i>
              
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
                  <img class="logo-img" src="assets/images/Image1.png" alt="">
               </div>
               <div class="user-info">
                  <span class="user-name">Dave Delgado</span>
                  <span class="user-role">TNC Administrator</span>
                  <div class="user-status d-flex align-items-center justify-content-start">

                     <!-- If Online -->
                     <!-- <i class="fa fa-circle" style="color:green"></i>
                     <p class="user-status-update">Online</p>   -->

                     <!-- If Offline -->
                     <i class="stat-circ fa fa-circle"></i>
                     <p class="user-status-update">Offline</p>  
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
                           <span class="badge badge-pill badge-danger">3</span>
                           </a>
                           <div class="sidebar-submenu">
                              <ul>
                                 <li>
                                    <a href="shopAdminBookings">Requests
                                       <span class="badge badge-pill badge-danger">3</span>
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
                                    <a href="#">Successful Bookings</a>
                                 </li>
                                 <li>
                                    <a href="#">Cancelled Bookings</a>
                                 </li>
                                 <li>
                                    <a href="#">Total Revenue</a>
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
                                    <a href="#">Edit Shop Details</a>
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
                                 <label class="switch"><input id="offline" type="checkbox"><span class="slider round"></span>
                                 </label>
                                 </a>
                           </div>
                        </li>


                        <span class="acc-sett">Account</span>
                        <li class="sidebar-dropdown">
                           <div class="no-dropdown">
                              <a href="#">
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
  </body>
</html>