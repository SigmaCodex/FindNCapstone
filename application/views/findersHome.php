<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<!-- <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">     -->
	<!-- My CSS -->
    
	<link rel="stylesheet" href="assets/css/findersHome.css">

	<title>Finder HomePage</title>
</head>
<body>

	<!-- CONTENT -->
	<div class="container"> 

        <div class="content mt-5 mb-5">


            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Cafe" id="search_field">
                <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
                </div>
            </div>

                <div class="row listofshops">
                    <?php foreach($listofshops as $data){?>
                    <div class="col-lg-6 col-sm-6 shops">
                        <!-- Shop CARD -->
                        <div class="content-card mt-5 mb-5">
                            <div class="row">

                                <div class="col-lg-4 col-sm-12 d-flex align-items-center">
                                    <div class="content-card-img">
                                        <img src="assets/upload/shop/<?php echo $data->shop_img_icon?>" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-8 col-sm-12">
                                    <div class="content-card-opening">
                                        <span class="d-flex align-items-center">
                                            <p><?php echo $data->operating_days?></p> 
                                            <p class="pl-5"><?php echo $data->operating_hours?></p>
                                        </span>
                                    </div>
                                    <div class="address d-flex align-items-center">
                                        <i class='addr-icon bx bxs-edit-location'></i>
                                        <p class="addr m-0"><?php echo $data->address?></p>
                                    </div>
                                    
                                    <h5 class="content-card-title"><?php echo $data->shop_name?></h5>
                                    <div class="content-card-desc">
                                        <p class=""><?php echo $data->description?></p>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="content-card-link">
                                                <a href="findersViewShop/<?php echo $data->shop_id?>">View Shop</a>
                                            </div>
                                        </div>
                                        <div class="col-4 ">
                                            <div class="opening-status d-flex align-items-end justify-content-start">
                                                <p  class="m-0">Status:</p>
                                                <p class="stats pl-2 pt-1" <?php if($data->Shop_Status == "Close"){ echo "style='color:red'";}?>><?php echo $data->Shop_Status?> for Booking</p>
                                            </div>
                                        </div>
                                        <div class="col-4 ">
                                            <div class="range d-flex align-items-start justify-content-start">
                                                <p  class="m-0">Range:</p>
                                                <p class="status pl-2 mb-1 pt-1">₱<?php echo $data->minRate?> - ₱<?php echo $data->maxRate?> </p>
                                            </div>
                                            <div class="ratings d-flex align-items-end justify-content-start">
                                                <p class="m-0">Ratings:</p>
                                                <div class="review pl-1 d-flex align-items-center justify-content-center">
                                                    <?php for($i=1; $i<=5 ;$i++){?>
                                                        <?php if($i>$data->avgRatings){?>
                                                        <i class='bx bx-star'></i>
                                                        <?php }else{?>
                                                        <i class='bx bxs-star' ></i>
                                                    <?php }}?>
                                                    <p class="status pl-1"><?php echo $data->avgRatings?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
            </div>
            
        </div>
	</div>
		
	<!-- CONTENT -->
	

	<!-- <script src="assets/js/findersHome"></script> -->
    <script>
    jQuery.expr[':'].contains = function(a, i, m) {
            return jQuery(a).text().toUpperCase()
                .indexOf(m[3].toUpperCase()) >= 0;
    };

    $(document).on('keyup','#search_field', function(){
       filterdata = $(this).val();
       $('.shops').removeClass('d-none');
       $('.shops').children().children().find('.content-card-title:not(:contains("'+filterdata+'"))').parent().parent().parent().parent().addClass('d-none');
  
    });
</script>
</body>
</html>