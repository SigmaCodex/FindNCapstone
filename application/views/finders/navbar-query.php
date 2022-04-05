<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="../assets/images/Logo1.png">
    <title>FindN</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
</head>
<body>
    


    <!-- HEADER -->
    <header class="header" id="header ">
        <nav class="nav container-nav ">
        <a href="findershomepage"> <img src="../assets/images/icon-logo.png" class="nav__logo" style="width: 100px; padding-left: 10px;"></a>

            <div class="nav__menu" id="nav-menu ">
                <ul class="nav__list">
                    <!-- Home -->
                    <li class="nav__item">
                        <a href="<?php echo base_url();?>findershomepage" class="nav__link">
                            <i class='bx bx-home-alt nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </li>
                    <!-- Search -->
                    <li class="nav__item">
                        <a href="<?php echo base_url();?>viewMap" class="nav__link">
                            <i class='bx bx-search-alt nav__icon'></i>
                            <span class="nav__name">Map</span>
                        </a>
                    </li>
                    <!-- Bookings -->
                    <li class="nav__item">
                        <a href="<?php echo base_url();?>finderBookingList" class="nav__link">
                            <i class='bx bx-book-alt nav__icon'></i>
                            <span class="nav__name">Bookings</span>
                        </a>
                    </li>
                    <!-- Notification -->
                    <li class="nav__item">
                        <a href="<?php echo base_url();?>findersNotification" class="nav__link">
                            <i class='bx bx-bell nav__icon'></i>
                            <div class="notif-bar d-flex">
                            <span class="nav__name">Notifications</span>
                            <span class="badge">3</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

            <ul id="dropdown">
				<li class="nr_li dd_main">
                <div class="profile-dropdown d-flex">
                <img src="../assets/images/Prof.png" class="nav__img">  
                <h6 class="username" style="padding-left:4px;"></h6>  <i class="down-arrow fa-solid fa-caret-down"></i>
                </div>
                    <div class="drop-wrap pt-1">
                    <div class="dd_menu">
						<div class="dd_right">
							<ul class="p-0">
                                <li>    
                                    <h6 class="name-user"  style="text-align:center">Junky</h6>
                                
                                </li>
								<li>    
                                    <a class="profile-settings d-flex" href="<?php echo base_url();?>accountSettings"><i class="fa-solid fa-house-user" style="padding-top:3px; padding-right:5px"></i>Profile</a>
                               
                                </li>
								<li>
                                    <a class="logout-settings d-flex"href="<?php echo base_url();?>user-logout"><i class="fa-solid fa-sign-out" style="padding-top:4px; padding-right:5px"></i>Logout</a>
                                </li>
							</ul>
						</div>
					</div>
                    </div>
					
				</li>
		    </ul>
        
        </nav>
    </header>

    <script src="../assets/js/navbar.js"></script>