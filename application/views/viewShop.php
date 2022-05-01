<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>View Computer Shop</title>
    
    
    <link rel="stylesheet" href="../assets/css/viewShop.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    

    <div class = "card-wrapper mt-3 mb-5" id="wrap">
      <div class = " row">
        
        <!-- card left -->
        <div class = "shop-imgs col-lg-6 col-sm-12">
          <?php foreach($shopdetails as $row){?>
          <h5 class = "shop-title mt-3">|  <?php echo $row->shop_name?> CyberCafe</h5>
        
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "../assets/images/TNC-1.jpg">
              <img src = "../assets/images/TNC-2.jpg">
              <img src = "../assets/images/TNC-3.jpg">
              <img src = "../assets/images/TNC-4.jpeg">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "../assets/images/TNC-1.jpg">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "../assets/images/TNC-2.jpg ">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "../assets/images/TNC-3.jpg">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "../assets/images/TNC-4.jpeg">
              </a>
            </div>
          </div>
        </div>

        <!-- card right -->
        <div class = "shop-content col-lg-6 col-sm-12">

          <div class = "shop-detail">
            <div class="title-bookmark mt-3">
              <h2>All about <?php echo $row->shop_name?>: </h2>
              <i class = "sus fa-solid fa-bookmark"></i>
            </div>
                <p><?php echo $row->shop_name?>, one of the Philippines’ fastest-growing cyber cafe franchises, in partnership with premium gaming brand Acer Predator officially opened on March 7, 2020 the TNC Cebu Headquarters – the largest cybercafe in Southeast Asia.</p>
              <ul>
                <li> <i class = "fa-solid fa-location-dot"></i>   
                  Address: <span> II Pelaez St. Brgy. Kalubihan Cebu City</span>
                </li>
                <li> <i class="fa-solid fa-clock"></i>Open: <span>Monday-Sunday</span> </li>
                <li> <i class="fa-solid fa-peso-sign"></i>Price Range: <span>₱15 - ₱25</span>
                </li>
                <li><i class="fa-solid fa-rss"></i>Internet Speed: <span>1,000mbps</span>
                </li> 
                <li><i class="fa-solid fa-address-card"></i>Contact Address: <span></span>
                </li>
                <li><i class="fa-solid fa-envelope-open-text"></i>Email Address: <span>abc@gmail.com</span>
                </li>
                <br>
              </ul>
              <div class = "book-now">
                <button type = "button" class = "btn"  data-bs-toggle="modal" data-bs-target="#select_service">
                  Book Now <i class = "fas fa-shopping-cart"></i>
                </button>
                <button type = "button" class = "btn">	
                  View Map  
                </button>
                
              </div>
              <button type="button" class = "btn btn-warning"  data-bs-toggle="modal" data-bs-target="#rate">
                  Rate
                </button>
          </div>
        </div>
      </div>
  
      
  <!-- MESSAGE CONTAINER START-->     
  <br>
  <span class="services">Computer Access Type</span>
  <br>
  <span class="desc"> Providing you high quality equpiment and accessories in such a fair price. </span>
  <hr>
  <!-- MESSAGE CONTAINER END-->    

      <!-- NEW ROW -->
      <div class="row">
          
        <!-- computer type -->
        <?php foreach($computertype_details as $type){?>
        <div class="col-lg-6 col-sm-12">
          <div class = "card-2 ">
            <section class="services">
              
              <div class="services_container container grid">
                <div class="services_card vip-card">
                  <h3 class="services_title"><strong><?php echo $type->name?> Access</strong> </h3>
                  <img class="access-type-img" src="../assets/images/TNC-5.png" >
                  <div class="list">
                    <ul class="list">
                      <li> <i class="fa-solid fa-peso-sign"></i> Price Rate(/hr): <span> ₱<?php echo $type->service_fee?></span>
                      </li>
                      <li><i class="fa-solid fa-microchip"></i>CPU: <span> Intel Core i5-8400 @2.80ghZ(6 CPUs), `2.8Ghz</span>
                      </li> 
                      <li><i class="fa-solid fa-desktop"></i>Computer Slot: <span><?php echo $type->total_units?></span>
                      </li>
                      <li><i class="fa-solid fa-keyboard"></i><span>Predator PC and Predator Accessories</span>
                      </li>
                    </ul>
                  </div>
                  
                  <span class="services_button">
                    See more <i class = "fa-solid fa-arrow-alt-circle-right services-icon"></i>
                  </span>

                    <!-- MODAL START -->
                    <!-- <div class="popup-overlay">
                      <div class="popup-box-container">
                        <div class="check-container">
                          <h3 class="services_title"><strong>VIP Access</strong> </h3>
                          <img class="modal-type-img" src="../assets/images/TNC-5.png" >
                        </div>
                        <div class="popup-message-container">
                          <div class="list">
                            <ul class="list">
                              <li> <i class="fa-solid fa-peso-sign"></i> Price Rate(/hr): <span> ₱20</span>
                              </li>
                              <li><i class="fa-solid fa-microchip"></i>CPU: <span> Intel Core i5-8400 @2.80ghZ(6 CPUs), `2.8Ghz</span>
                              </li> 
                              <li><i class="fa-solid fa-microchip"></i>GPU: <span>NVIDIA GeForce GTX 1070 @ 8GB</span>
                              </li>
                              <li><i class="fa-solid fa-memory"></i>Total RAM: <span>1X16 GB @ 2667 MHz</span>
                              </li>
                              <li><i class="fa-solid fa-windows"></i>OS: <span>Windows 10 Pro 64-bit</span>
                              </li>
                              <li><i class="fa-solid fa-globe"></i>Internet: <span>1,000 mbps</span>
                              </li>
                              <li><i class="fa-solid fa-desktop"></i>Computer Slot: <span>200</span>
                              </li>
                              <li><i class="fa-solid fa-keyboard"></i><span>Predator PC and Predator Accessories</span>
                              </li>
                             
                            </ul>
                          </div>
                        </div>
                        <button class="ok-btn ok-vip-btn">
                          <span>OK</span>
                        </button>
                      </div>
                    </div> -->
                        
                    <!-- MODAL END -->

                </div>
              </div>
            </section>
          </div> 
        </div>
        <?php }?>
        
      </div>
    </div>
    <!-- select services modal -->
    <div  class="modal fade" id="select_service" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
          
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h6 class="text-center mb-5" style="font-size: 20px; font-weight: 600;">Select Service</h6>
                <i class="fa fa-computer"></i>
               <div class="text-center mb-4"><a href="<?php echo base_url();?>finder-ComputerBookingRequest/<?php echo $row->shop_id;?>" class="btn btn-primary w-50 rounded-pill b1">Computer Bookings</a></div> 
               <div class="text-center mb-3"> <button class="btn btn-primary w-50 rounded-pill b1" >Printing Service</button> </div> 
              </div>
         </div>
    </div>


    <div  class="modal fade" id="rate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">

            <div class="header-title d-flex align-items-center justify-content-start">
              <i class="fas fa-arrow-left pr-3"  data-bs-dismiss="modal"></i>
              <h6 class="m-0">Feedback</h6>
            </div>

            <div class="title">
              <h4 class="text-center mt-4 mb-1">Rate your Experience</h4>
            </div>
              <div class="rate-star d-flex flex-column align-items-center justify-content-center mb-1">
                  <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                  </div>
                  
              </div>

                  <div class="modal-details p-3">
                    <div class="text-details text-center">
                      <p class="text-muted">How satisfied are you with the service?</p>
                    </div>
                    <div class="text-details text-left" style="font-size: 12px;">
                      <p>Tell us what we can Improved?</p>
                    </div>

                    <div class="text-card">
                        <textarea name="" id="" cols="51" rows="5" placeholder="Type here..." ></textarea>
                    </div>
                   
                  </div>

              <!-- MODAL CSS INLINE -->
              <style>
                    .fa-arrow-left {
                      cursor: pointer;
                    }
                    .rate {
                        float: left;
                        height: 46px;
                        padding: 0 10px;
                    }
                    .rate:not(:checked) > input {
                        position:absolute;
                        top:-9999px;
                    }
                    .rate:not(:checked) > label {
                        float:right;
                        width:1em;
                        overflow:hidden;
                        white-space:nowrap;
                        cursor:pointer;
                        font-size:50px;
                        color:#ccc;
                    }
                    .rate:not(:checked) > label:before {
                        content: '✯ ';
                    }
                    .rate > input:checked ~ label {
                        color: #F78516;    
                    }
                    .rate:not(:checked) > label:hover,
                    .rate:not(:checked) > label:hover ~ label {
                        color: #F78516;  
                    }
                    .rate > input:checked + label:hover,
                    .rate > input:checked + label:hover ~ label,
                    .rate > input:checked ~ label:hover,
                    .rate > input:checked ~ label:hover ~ label,
                    .rate > label:hover ~ input:checked ~ label {
                        color: #F78516;
                    }
                    .text-card textarea{
                      outline:none;
                      resize:none;
                      border-radius:10px;
                      padding:10px;
                      font-size:15px;
                      border:1px solid #A7A1A1;
                      background-color: #F1F1F1;
                    }
                    .review-but{
                      background-color: #FF5D31;
                      color: #FFFFFF;
                      padding: 10px 100px 10px 100px;
                      outline:none;
                      border:none;
                      border-radius: 5px;
                    }
                    .review-but:hover {
                      background-color: #F53805;
                    }
                    @media (max-width: 400px) {
                        .text-card textarea{
                          width:280px;
                        }
                        .review-but{
                            font-size:12px;
                        }
                    }
              </style>

                    <div class="button d-flex justify-content-center align-items-center">
                      <button class="review-but">Submit Review</button>
                    </div>
          </div>
      </div>
    </div>

    <?php }?><!-- end of foreach shopdetails -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="../assets/js/viewShop.js"></script>
  </body>
</html>

<script>
  $(document).ready(function(){  
 
    
      
  });  
</script>

