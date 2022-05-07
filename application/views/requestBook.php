<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Booking Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- jquery plugin -->
  <script src="../assets/js/jquery/jquery-1.10.2.min.js"></script>
  <!-- date dropper style sheet -->
  <link rel="stylesheet" href="../assets/css/datedropper.css">
  <!-- date dropper js file -->
  <script src="../assets/js/datedropper.js"></script>

  <link rel="stylesheet" href="../assets/css/requestBook.css">


</head>
<body>

<div class="container">

  <div class="content mt-3 mb-5">
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
                    <div class="d-flex align-items-center justify-content-end pt-2">
                      <div class="btn btn-info" id="edit-personal_info">Edit info<i class='bx bx-edit-alt' style="padding-left:5px;font-size:15px; cursor:pointer;"></i></div>
                    </div>
                  
                 
                
                    <div class="multisteps-form__content">
                     <?php foreach ($findersPersonalDetails as $s) {?> <!--Populate user details-->
                      <div class="form-row mt-4">
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label >First Name</label><input class="multisteps-form__input form-control" type="text" id="fname" placeholder="" value="<?php echo $s->firstname; ?>" disabled/>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label>Last Name</label><input class="multisteps-form__input form-control" type="text" id="lname" placeholder="" value="<?php echo $s->lastname; ?>" disabled/>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label >Birthday</label><input class="multisteps-form__input form-control" type="date" id="bdate" placeholder="" value="<?php echo $s->birthdate;?>" disabled/>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
        
                          <label >Gender</label>
                          <!-- <input class="multisteps-form__input form-control" type="text" id="" placeholder="" value="<?php echo $s->gender;?>" disabled/> -->
                          <select class="multisteps-form__input form-control" name="" id="gender" disabled>
                            <option value="male" <?php if($s->gender == "male"){echo "selected";}?>>Male</option>
                            <option value="female" <?php if($s->gender == "female"){echo "selected";}?>>Female</option>
                          </select>
                        </div>
                        
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label >Email</label><input class="multisteps-form__input form-control" type="email" placeholder="" id="email" value="<?php echo $s->email;?>" disabled/>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                          <label >Phone Number</label><input class="multisteps-form__input form-control" type="text" placeholder="" id="pnum" value="<?php echo $s->phone_num;?>" disabled/>
                        </div>
                      </div>
                      <?php }?>    <!--end of populate user details-->
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-warning ml-auto js-btn-next" style="color: aliceblue;" type="button" title="Next" id="p_info_nextBtn" >Next</button>
                        <button class="btn btn-warning ml-auto d-none" style="color: aliceblue;" type="button" title="Next" id="update_personalInfoBtn" >Update</button>
                      </div>
                    </div>
                  </div>
  
                  <!-- Second Form -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                   
                    <?php foreach ($shopdetails as $shop) {?>
                      <p id="shop_id" style="display:none;"><?php echo $shop->shop_id;?></p>

                      <div class="d-flex align-items-center jutify-content-start pb-2">
                        <img src="../assets/upload/shop/<?php echo $shop->shop_img_icon;?>" onerror="this.src='../assets/upload/shop/defaultshopimg.png';" style="width: 50px;border-radius: 50%;">  
                        <h3 class="multisteps-form__title pl-2" ><?php echo $shop->shop_name;?></h3>
                      </div>

                    <?php }?>
                    <!-- <div id="shop_id"><?php if(isset($shop_id)){ echo $shop_id;}?></div> -->
                    <label style="color: red; font-size: 12px;">* Choose your preferred access type. You only need to
                      <strong style="color:green; font-size:15px;">   pay our booking fee.</strong></label>
                      <h3 class="multisteps-form__title text-center pt-2">Access Type</h3>
                  
                    <div class="multisteps-form__content">
  
                      <!-- First Row -->
                      <div class="row">
                      <?php foreach ($computertype_details as $c) {?> <!--Populate computer type-->
                        <!-- Computer Type Card -->
                        <div class="col-12 col-md-6 mt-2">
                          <div class="card shadow-sm">
                            <div class="card-body" service_fee = "<?php echo $c->service_fee;?>" comptype_id = "<?php echo $c->Ctype_id;?>" comptype_status ="<?php echo $c->status;?>">
                              <h5 class="card-title" ><b><?php echo $c->name;?></b></h5>
                              <hr>
                              <div class="list">
                                <ul class="list">
                                  <li> <i class="fa-solid fa-peso-sign"></i> Price Rate(/hr): <span> ₱<?php echo $c->rate;?></span>
                                  </li>
                                  <li><i class="fa-solid fa-microchip"></i>Specs: <span><?php echo $c->specs;?></span>
                                  </li> 
                                  <li><i class="fa-solid fa-desktop"></i>Computer Slot: <span><?php echo $c->total_units;?></span>
                                  </li>
                                  <li><i class="fa-solid fa-keyboard"></i><span></span>
                                  </li>
                                </ul>
                              </div>
                              
                              <div class="d-flex justify-content-end">
                                <span class="fee" style="font-size: 15px; color: green; font-weight: 500;">
                                  <p>
                                    Booking Fee: <strong>₱<?php echo $c->service_fee;?></strong> 
                                  </p> 
                                </span>
                              </div>
                                <?php if($c->status == "Available"){
                                    $color = "green";
                                }else{
                                    $color = "red";
                                }
                                ?>
                               <i class="fa-solid fa-battery-full" style="color: <?php echo $color;?>; padding-top: 10px;"></i> <?php echo $c->status;?>
                      
                              <br>
                              
                            </div>
                          </div>
                        </div>
                        <?php }?> <!--end of Populate  computer type-->
   
                      </div>
  
                      <!-- Second Row -->
                      <div class="form-row mt-4">
                        <div class="col-md-6 pt-md-0 pt-3">
                          <h6 class="select">Selected Computer access type:</h6>   
                          <input type="text" class="multisteps-form__input form-control d-none" id="service_fee" value="15" disabled>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">

                        
                          <select name="" class="multisteps-form__input form-control " id="comp_typeSelect" placeholder="" disabled>
                          <option value="not_selected">select accestype</option>
                          <?php foreach ($computertype_details as $cm) {?>
                            <?php if($cm->status == "Available") {?>
                              <option value="<?php echo $cm->Ctype_id;?>"><?php echo $cm->name;?></option>
                         
                          <?php }
                          }
                          ?> 
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
                          <label for="person">Number of Person</label><input id="num-person" class="multisteps-form__input form-control text-center" type="number" value="1" min="1" max="10"/>
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
                        <textarea id="message" rows="4" cols="50" class="multisteps-form__textarea form-control" placeholder="Additional Request or Questions for the computer cafe admin."></textarea>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-warning js-btn-prev" style="color: aliceblue;" type="button" title="Prev">Prev</button>
                        <button class="btn btn-success ml-auto" id="submit-booking" style="color: aliceblue;" type="button" title="Send">Submit Booking</button>
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



<script  src="../assets/js/requestBook.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>$('#date').dateDropper();</script>
<!-- <script>$$('#time').timeDropper();</script> -->

<script>
  	$(document).on('click','.card-body',function(){ 
        var name_comptype = $(this).attr("comptype_id");
        var status = $(this).attr("comptype_status");
        if(status == "Available"){
          $('#comp_typeSelect').val(name_comptype);
          service_fee = $(this).attr("service_fee");
          $("#service_fee").val(service_fee);
     
        }else{
          swal(
							'Not Available!',
							'This Computer Type is Closed For booking.Please Select Another Computer Type',
							'error'
						)
        }
    });
</script>

<!-- computertype populate if selected -->
<script>
    $(document).on('click','#submit-booking',function(){ 
         shop_id       = $('#shop_id').text();
         numperson     = $('#num-person').val();
         date_arrival  = $('#date').val();
         time_arrival  = $('#time').val();
         message       = $('#message').val();
         computer_type = $('#comp_typeSelect').val();
         servicefee    = $('#service_fee').val();

         var BASE_URL = "<?php echo base_url();?>";

         if(computer_type == "not_selected" || time_arrival == "" || date_arrival == "" || numperson == ""){
          swal(
              'Missing Information',
              'Please Check Your Booking Information',
              'warning'
		        	)
         }else{
         //ajax for submiting CompBooking Request
          $.ajax({
            url: BASE_URL+"submit-CompBooking-Request",
            type: "POST",
            data:{s_id:shop_id,num_person:numperson,arrival_date:date_arrival,arrival_time:time_arrival,addtional_message:message,comp_type:computer_type,service_fee:servicefee},
            beforeSend : function()
            {
              alert("processing");
            },
            success: function(data)
            {
                swal({
                  title: "Your Booking Request is send!",
                  text: "Wait for the Respond",
                  icon: "success",
                  button: "Continue",
                }).then((value) => {
                  window.location = BASE_URL+"findersTransactionDetail/"+data;
                      
                });           
            }
          });
        }

    });
</script>

<!-- time validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> 
<script>

  $(document).on('change','#time',function(){ 
    time = $(this).val();
    time_selected = getTimeAsNumberOfMinutes(time);
  
    //To DO need to depend of the date selected value 

    const convertTime12to24 = (time12h) => moment(time12h, 'hh:mm A').format('HH:mm');
    current_time = showTime();//get the currenttime
    current_timeMin = getTimeAsNumberOfMinutes(convertTime12to24(current_time));
    
    if(time_selected<=current_timeMin){

      swal(
							'Invalid Time',
							'Your Time Must Be Correct',
							'error'
						) 
      $(this).val("");      
    }

  });

  //date validation
  $(document).on('change','#date',function(){ 
    date = $(this).val();
    cur_date = showCurrentDate();
    var date_selected = new Date(date);
    var current_date = new Date(cur_date);

   
    if(date_selected.getTime()<current_date.getTime()){
      swal(
							'Invalid Date',
							'Your Date Must Be Correct',
							'error'
						) 

      $(this).val("");  
      $('#time').val("");
    }
  });

  //number of person validation
  $(document).on('change','#num-person',function(){ 
    num_person = $(this).val();
    if(num_person<1 || num_person > 10){
      swal(
							'Invalid Number Of Person',
							'Maximum Number Of person is 10 and Minimum of 1',
							'error'
						) 
            $(this).val(""); 
    }
  });





  function getTimeAsNumberOfMinutes(time)
  {
    var timeParts = time.split(":");
    // var timeInMinutes = (timeParts[0] * 60) + timeParts[1];
    var timeInMinutes = timeParts[0]+ timeParts[1];
    return timeInMinutes;
  }

  function showTime() {
    let date = new Date();
    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();
    let amPm = "AM";
  
    if (h === 0) {
      h = 12;
    }
  
    if (h > 12) {
      h = h - 12;
      amPm = "PM";
    }
  
    if (h < 10) {
      h = `0${h}`;
    }
  
    if (m < 10) {
      m = `0${m}`;
    }
  
    if (s < 10) {
      s = `0${s}`;
    }
  
    // let clock = document.querySelector(".my-clock");
  
    // clock.innerHTML = `${h}:${m} ${amPm}`;
    currenttime = `${h}:${m} ${amPm}`;
    // setTimeout(showTime, 1000);
    return currenttime;
  }

  function showCurrentDate() {
    let date = new Date();
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
    // let currentDate = document.querySelector(".date");
  
     currentDate = `${m} ${d},${y}`;
    return currentDate;
  }

</script>


<!-- <script>
$(document).on('click','.star',function(){ 
   var rating = $(this).val();
   $("#submit_review").attr('rating',rating);

});

$(document).on('click','#submit_review',function(){ 
   var shop_id = $('#shop_id').text();
   var rating = $(this).attr('rating');
   var review = $('#review').val();
   var BASE_URL = "<?php echo base_url();?>";

   $.ajax({
			url: BASE_URL+"addRate/"+shop_id,
			method: "POST",
			data:{score: rating,rate_review:review},
			success: function (data) {
        // location.reload();

          swal({
            title: "Thank You",
            text: "Your FeedBack Was Succesfully Submitted",
            icon: "success",
            button: "Continue",
          }).then((value) => {
                location.reload();
          });


			},
		});
 


  
});
</script> -->

<!-- edit personal information js -->
<script>
$(document).on('click','#edit-personal_info',function(){ 

status = $(this).attr("status");
if(status == "active"){
  location.reload();  
}

$(this).removeClass('btn-info');
$(this).addClass('btn-danger');
$(this).text('Cancel');
$(this).append("<i class='bx bx-x-circle' style='padding-left:5px;font-size:15px; cursor:pointer;'></i>");
// $(this).find("i").removeClass("bx-edit-alt");
// $(this).find("i").addClass("bx-x-circle");

$(this).attr("status","active");
// $('#disabledCheckboxes').prop("disabled", true);
$('#fname').removeAttr("disabled");
$('#lname').removeAttr("disabled");
$('#bdate').removeAttr("disabled");
$('#gender').removeAttr("disabled");
$('#email').removeAttr("disabled");
$('#pnum').removeAttr("disabled");

$('#p_info_nextBtn').addClass("d-none");
$("#update_personalInfoBtn").removeClass('d-none');

});


// update personal information
$(document).on('click','#update_personalInfoBtn',function(){ 
  fname =  $('#fname').val();
  lname =   $('#lname').val();
  bdate =  $('#bdate').val();
  gender =   $('#gender').val();
  email =   $('#email').val();
  pnum =  $('#pnum').val();

  if(checkValidation()&&BDateValidator()&&checkInputIsEmpty()){

    $.ajax({
			url: BASE_URL+"updatefinderInfo",
			method: "POST",
			data:{firstname:fname,lastname:lname,b_date:bdate,gen:gender,email_add:email,p_number:pnum},
			success: function (data) {
   
          swal({
            title: "Personal Infomation Updated",
            text: "",
            icon: "success",
            button: "Continue",
          }).then((value) => {
                location.reload();
          });

			},
		});

  }


});


//-----Input Validation for personal informatiom--
function checkInputIsEmpty(){
  fname =  $('#fname').val();
  lname =   $('#lname').val();
  bdate =  $('#bdate').val();
  email =   $('#email').val();
  pnum =  $('#pnum').val();

  if(fname == ""){
    $("#fname").css({"border-color": "#fd0033", 
                "border-width":"1px", 
                "border-style":"solid"});
    return false;            
  }
  if(lname == ""){
    $("#lname").css({"border-color": "#fd0033", 
                "border-width":"1px", 
                "border-style":"solid"});
    return false;            
  }
  if(bdate == ""){
    $("#bdate").css({"border-color": "#fd0033", 
                "border-width":"1px", 
                "border-style":"solid"});
    return false;            
  }
  if(email == ""){
    $("#email").css({"border-color": "#fd0033", 
                "border-width":"1px", 
                "border-style":"solid"});
    return false;            
  }
  if(pnum == ""){
    $("#pnum").css({"border-color": "#fd0033", 
                "border-width":"1px", 
                "border-style":"solid"});
    return false;            
  }

  return true;
}

function checkValidation(){
            email = $("#email").val();
            firstname = $("#fname").val();
            lname    = $("#lname").val();
            phone_num = $("#pnum").val();

        
            if(IsEmail(email)){
                $("#email").css({"border-color": "#fd0033", 
                "border-width":"1px", 
                "border-style":"solid"});
                swal('Invalid Email Address','Check your Email Address','error');
                return false;
            }
            if (checkName(firstname)){
                $("#fname").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
                return false;

            }
            if (checkName(lname)){
                $("#lname").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
                return false;
            }
            if(phone_num == "" || phone_num.length <10 || phone_num.length>10){
                $("#pnum").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
                swal('Invalid Phone Number','Check your phone number correctly','error');
                return false;
            }
        return true;
}


function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return true;
  }else{
    return false;
  }
}

function checkName(name)
{
    var regex = /^([^0-9]*)$/;
    if(regex.test(name))
    {
        return false;
    } else{return true;}
}

function BDateValidator() {
  var birthday = document.getElementById("bdate").value; // Don't get Date yet...
  var regexVar = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/; // add anchors; use literal
  var regexVarTest = regexVar.test(birthday); // pass the string, not the Date
  var userBirthDate = new Date(birthday.replace(regexVar, "$3-$2-$1")); // Use YYYY-MM-DD format
  var todayYear = (new Date()).getFullYear(); // Always use FullYear!!
  var cutOff19 = new Date(); // should be a Date
  cutOff19.setFullYear(todayYear - 16); // ...
  var cutOff95 = new Date();
  cutOff95.setFullYear(todayYear - 60);
   if (isNaN(userBirthDate)) {
    
    swal( 'Invalid Birthdate','','error');
    $("#bdate").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
    return false;
  } else if (userBirthDate > cutOff19) {
    // alert("you have to be older than 16");
    swal( 'Invalid Birthdate','you have to be older than 16','error');
    $("#bdate").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
    return false;
  } else if (userBirthDate < cutOff95) {
    // alert("you have to be younger than 95");
    swal( 'Invalid Birthdate','you have to be younger than 60','error');
    $("#bdate").css({"border-color": "#fd0033", 
                 "border-width":"1px", 
                "border-style":"solid"});
    return false;
  } 
  return true; // Return the date instead of an undefined variable
}  

</script>

</body>
