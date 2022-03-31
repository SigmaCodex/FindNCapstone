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
                        <a href="#bookings" class="nav__link">
                            <i class='bx bx-book-alt nav__icon'></i>
                            <span class="nav__name">Bookings</span>
                        </a>
                    </li>
                    <!-- Notification -->
                    <li class="nav__item">
                        <a href="#notifications" class="nav__link">
                            <i class='bx bx-bell nav__icon'></i>
                            <span class="nav__name">Notifications</span>
                        </a>
                    </li>

                </ul>
            </div>

            <a href="accountSettings" class="username"><img src="../assets/images/Prof.png" class="nav__img">  Junky  <i class="fa-solid fa-caret-right"></i> </a>
        </nav>
    </header>

    <script src="assets/js/navbar.js"></script>