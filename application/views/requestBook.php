<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Booking Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- jquery plugin -->
  <script src="assets/js/jquery/jquery-1.10.2.min.js"></script>
  <!-- date dropper style sheet -->
  <link rel="stylesheet" href="assets/css/datedropper.css">
  <!-- date dropper js file -->
  <script src="assets/js/datedropper.js"></script>

  <link rel="stylesheet" href="assets/css/requestBook.css">


</head>
<body>

<div class="container">

  <div class="content mt-3">
    <div class="content__inner">
  
      <div class="container overflow-hidden">
        <div class="multisteps-form">
          <!-- START CONTENT -->
          <div class="row">
            <div class="col-12 col-lg-8 m-auto "  id="wrap">
              <h1 class="content__title">Booking Request</h1>
  
              <!-- Progress Bar -->
              <div class="row">
              <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active"  title="User Info">User Info</button>
                  <button class="multisteps-form__progress-btn "  title="Access">Access</button>
                  <button class="multisteps-form__progress-btn"  title="Order Info">Order Info</button>
                  <button class="multisteps-form__progress-btn"  title="Message">Message</button>
                </div>
              </div>
              </div>
                <hr>
  
                <!-- START BOOK FORM -->
                <form class="multisteps-form__form">
  
                  <!-- First Form -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                    <h3 class="multisteps-form__title">Update Profile Information</h3>
                    <label style="color: red; font-size: 12px;">* Note that you can edit profile information during booking. Double check if information reflects <strong style="color:green; font-size:13px;">finders name.</strong> </label>
                    <div class="multisteps-form__content">
                      <div class="form-row mt-4">
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label for="lastname">First Name</label><input class="multisteps-form__input form-control" type="text" placeholder="" value="Junky"/>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label for="lastname">Last Name</label><input class="multisteps-form__input form-control" type="text" placeholder="" value="Dubs"/>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label for="lastname">Birthday</label><input class="multisteps-form__input form-control" type="date" placeholder="" value="1999-07-23"/>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label for="lastname">Gender</label>
                          <select name="gender" class="multisteps-form__input form-control" id="gender" placeholder="">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="female">Other</option>
                          </select>
                        </div>
                        
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label for="lastname">Email</label><input class="multisteps-form__input form-control" type="email" placeholder="" value="abc@example.com"/>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label for="lastname">Phone Number</label><input class="multisteps-form__input form-control" type="text" placeholder="" value="+63 9770195679"/>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-warning ml-auto js-btn-next" style="color: aliceblue;" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
  
                  <!-- Second Form -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                    <h3 class="multisteps-form__title">Access Type</h3>
                    <label style="color: red; font-size: 12px;">* Choose your preferred access type. You only need to
                      <strong style="color:green; font-size:15px;">   pay our booking fee.</strong></label>
                  
                    <div class="multisteps-form__content">
  
                      <!-- First Row -->
                      <div class="row">
  
                        <!-- Regular -->
                        <div class="col-12 col-md-6 mt-2">
                          <div class="card shadow-sm">
                            <div class="card-body" name_comptype = "Regular">
                              <h5 class="card-title" ><b>REGULAR</b></h5>
                              <hr>
                              <div class="list">
                                <ul class="list">
                                  <li> <i class="fa-solid fa-peso-sign"></i> Price Rate(/hr): <span> ₱15</span>
                                  </li>
                                  <li><i class="fa-solid fa-microchip"></i>CPU: <span> Intel Core i3 @3.60ghZ(4 CPUs), `3.6Ghz</span>
                                  </li> 
                                  <li><i class="fa-solid fa-desktop"></i>Computer Slot: <span>200</span>
                                  </li>
                                  <li><i class="fa-solid fa-keyboard"></i><span>Regular</span>
                                  </li>
                                </ul>
                              </div>
                              
                              <div class="d-flex justify-content-end">
                                <span class="fee" style="font-size: 15px; color: green; font-weight: 500;">
                                  <p>
                                    Booking Fee: <strong>₱5</strong> 
                                  </p> 
                                </span>
                              </div>
                              <i class="fa-solid fa-battery-full" style="color: red; padding-top: 10px;"></i> Slots Unavailable
                              <br>
                              
                            </div>
                          </div>
                        </div>
                        <!-- VIP -->
                        <div class="col-12 col-md-6 mt-2">
                          <div class="card shadow-sm">
                            <div class="card-body" name_comptype = "vip">
                              <h5 class="card-title"><b>VIP</b></h5>
                              <HR></HR>
                              <div class="list">
                                <ul class="list">
                                  <li> <i class="fa-solid fa-peso-sign"></i> Price Rate(/hr): <span> ₱20</span>
                                  </li>
                                  <li><i class="fa-solid fa-microchip"></i>CPU: <span> Intel Core i5-8400 @2.80ghZ(6 CPUs), `2.8Ghz</span>
                                  </li> 
                                  <li><i class="fa-solid fa-desktop"></i>Computer Slot: <span>200</span>
                                  </li>
                                  <li><i class="fa-solid fa-keyboard"></i><span>Predator PC and Predator Accessories</span>
                                  </li>   
                                </ul>
                              </div>
                              <div class="d-flex justify-content-end">
                                <span class="fee" style="font-size: 15px; color: green; font-weight: 500;">
                                  <p>
                                    Booking Fee: <strong>₱10</strong> 
                                  </p> 
                                </span>
                              </div>
                              <i class="fa-solid fa-battery-half" style="color: green; padding-top: 10px;"></i> Slots Available
                              <br>
                              
                            </div>
                          </div>
                        </div>
                        
                      </div>
  
                      <!-- Second Row -->
                      <div class="form-row mt-4">
                        <div class="col-md-6 pt-md-0 pt-3">
                          <h6 class="select">Select preferred access type:</h6>     
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                          <select name="" class="multisteps-form__input form-control" id="comp_typeSelect" placeholder="">
                            <option value="vip">VIP</option>
                            <option value="Regular">REGULAR</option>
                          </select>
                        </div>
                      </div>    
                    
                      <!-- Button Row -->
                      <div class="row">
                        <div class="button-row d-flex mt-4 col-12">
                          <button class="btn btn-warning js-btn-prev" style="color: aliceblue;" type="button" title="Prev">Prev</button>
                          <button class="btn btn-warning ml-auto js-btn-next" style="color: aliceblue;" type="button" title="Next">Next</button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Third Form -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
  
                    <h3 class="multisteps-form__title">Booking Information</h3>
                    <label style="color: red; font-size: 12px;">* Make sure to arrive<strong style="color:green; font-size:15px;">  on or before</strong> the date and time you set for your booking.</label> 
                    <div class="multisteps-form__content">
  
                      <div class="form-row mt-4 d-flex justify-content-center">
                        <div class="col-8 col-sm-4 mt-4 mt-sm-0">
                          <label for="person">Number of Person</label><input class="multisteps-form__input form-control text-center" type="number" value="1"/>
                        </div>
                        <div class="col-8 col-sm-4 mt-4 mt-sm-0">
                          <label for="date">Date of Booking</label><input class="multisteps-form__input form-control" type="date" id="date" />
                        </div>
                        <div class="col-8 col-sm-4 mt-4 mt-sm-0">
                          <label for="time">Time of Booking</label><input class="multisteps-form__input form-control" type="time" id="time" />
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-warning js-btn-prev" style="color: aliceblue;" type="button" title="Prev">Prev</button>
                        <button class="btn btn-warning ml-auto js-btn-next" style="color: aliceblue;" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
  
                  <!-- Fourth Form -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                    <h3 class="multisteps-form__title">Additional Message</h3>
                    <label style="color: red; font-size: 12px;">* <strong style="color:green; font-size:15px;"> Specify </strong> any request or questions for the admin.</label> 
                  
                    <div class="multisteps-form__content">
                      <div class="form-row mt-4">
                        <textarea rows="4" cols="50" class="multisteps-form__textarea form-control" placeholder="Additional Request or Questions for the computer cafe admin."></textarea>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-warning js-btn-prev" style="color: aliceblue;" type="button" title="Prev">Prev</button>
                        <button class="btn btn-success ml-auto" style="color: aliceblue;" type="button" title="Send">Submit Booking</button>
                      </div>
                    </div>
                  </div>
  
  
                </form>
                <!-- END BOOK FORM -->
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  
</div>



<script  src="assets/js/requestBook.js"></script>

<script>$('#date').dateDropper();</script>
<!-- <script>$$('#time').timeDropper();</script> -->

<script>
  	$(document).on('click','.card-body',function(){ 
        var name_comptype = $(this).attr("name_comptype");
        // alert(name_comptype);

        $('#comp_typeSelect').val(name_comptype);
    });
</script>



</body>
