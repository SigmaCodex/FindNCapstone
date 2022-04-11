<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="assets/images/Logo1.png">
    <title>FindN</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
</head>
<body>
    <!-- HEADER -->
    <header class="header" id="header ">
        <nav class="nav container-nav d-flex align-items-center">

			<a href="findershomepage"><img src="assets/images/icon-logo.png" class="nav__logo" style="width: 100px; padding-left: 10px;"></a>


            <div class="nav__menu" id="nav-menu ">
                <ul class="nav__list">
                    <!-- Home -->
                    <li class="nav__item">
                        <a href="findershomepage" class="nav__link ">
                            <i class='bx bx-home-alt nav__icon id="icon-logo-id'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </li>
                    <!-- Search -->
                    <li class="nav__item">
                        <a href="viewMap" class="nav__link">
                            <i class='bx bx-map nav__icon id="icon-logo-id'></i>
                            <span class="nav__name">Map</span>
                        </a>
                    </li>
                    <!-- Bookings -->
                    <li class="nav__item">
                        <a href="finderBookingList" class="nav__link">
                            <i class='bx bx-book-alt nav__icon id="icon-logo-id'></i>
                            <span class="nav__name">Bookings</span>
                        </a>
                    </li>
                    <!-- Notification -->
                    <li class="nav__item d-flex" >
                        <a href="findersNotification" class="nav__link">
                            <i class='bx bx-bell nav__icon' id="icon-logo-id"></i>
                            <div class="notif-bar d-flex">
                            <span class="nav__name">Notifications</span>
                            <span class="badge" id="count_noti"></span>
                            </div>
                            
                        </a>
                    </li>

                </ul>
            </div>

            <ul id="dropdown">
				<li class="nr_li dd_main">
                <div class="profile-dropdown d-flex">
                <img src="assets/upload/finder/dave.jpg" alt="assets/images/Prof.png" class="nav__img">  
                <h6 class="username" style="padding-left:4px;"></h6>  <i class="down-arrow fa-solid fa-caret-down" style="font-size:15px;"></i>
                </div>
                    <div class="drop-wrap pt-1">
                    <div class="dd_menu">
						<div class="dd_right">
							<ul class="p-0">
                                <li>    
                                    <h6 class="name-user"  style="text-align:center"><?php echo $user_name;?></h6>
                                
                                </li>
								<li>    
                                    <a class="profile-settings d-flex" href="accountSettings"><i class="fa-solid fa-house-user" style="padding-top:3px; padding-right:5px"></i>Profile</a>
                               
                                </li>
								<li>
                                    <a class="logout-settings d-flex"href="user-logout"><i class="fa-solid fa-sign-out" style="padding-top:4px; padding-right:5px"></i>Logout</a>
                                </li>
							</ul>
						</div>
					</div>
                    </div>
					
				</li>
		    </ul>
            
        </nav>
    </header>

    <script src="assets/js/navbar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        setInterval(function(){
            // alert("hello world");
           
            $.ajax({
                        url:"Countfindernotification",
                        method:"GET",
                        cache: false, 
                        // data:{},
                        success:function(data)
                        {
                          if(data>0){
                            $("#count_noti").text(data);  
                            $("#count_noti").css("display", "block");
                          
                          } else{
                        
                            $("#count_noti").css("display", "none");
                          }
                          
                            
                        }
                      }); 
            //ajax;

        },10);
    </script>


            