<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
    <link rel="stylesheet" href="assets/css/shopAdminBookings.css">

    <!-- Modal CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>

    <title>Shop Admin Bookings</title> 
</head>
<body>
<?php date_default_timezone_set("Asia/Bangkok"); ?> 
    <div class="container ">
        <div class="row content-holder">
            <!--Left side column-->
            <div class="col-md-4 col-sm-4 col-xs-4 my-3 my-md-1 pt-4">
                <div class="left-sidebar card shadow"> 
                    
                    <div class="left-sidebar-title d-flex align-items-center justify-content-center p-2">
                        <h6 class="m-0 p-1">BOOKING REQUEST(<span id="bookcount"></span>)</h6>
                    </div>
                    
                    <div class="left-sidebar-padding" id="request-pending-section">
                        
                        <!-- Request Card -->
                        <div class="request-card mt-3">

                            <!-- <div class="card-head-color row p-3 ">
                            </div>
                            <div class="request-card-content">
                                <div class="row mt-3">
                                    <div class="col-3 d-flex justify-content-center align-items-center">
                                        <img class="request-card-logo" src="assets/images/Prof.png" alt="">
                                    </div>
                                    <div class="col-5 mt-1">
                                        <p class="finder-name"><?php echo $br->firstname;?> <?php echo $br->lastname;?></p>
                                        <p class="finder-user text-muted"><?php echo $br->username;?></p>
                                    </div>
                                    <div class="col-4 mt-1 d-flex flex-column justify-content-center align-items-center ">
                                        <p class="finder-date-trans text-muted"><?php echo date("M j, Y", strtotime($br->date_issued));?></p>
                                    </div>
    
                                </div>

                                <div class="row mt-3">
                                    <div class="col-5 d-flex flex-column justify-content-center align-items-center">
                                        <p class="finder-details text-muted">Service</p>
                                        <p class="finder-details-bold"><?php echo $br->servicetype;?></p>
                                    </div>
                                    <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                                        <p class="finder-details text-muted">Access Type</p>
                                        <p class="finder-details-bold"><?php echo $br->name;?></p>
                                    </div>
                                    <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                                        <p class="finder-details text-muted">Tickets</p>
                                        <p class="finder-details-bold"><?php echo $br->num_ticket?></p>
                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="row mt-3">
                                    <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                                        <i class="book-icon fa-solid fa-calendar-alt"></i>
                                    </div>
                                    <div class="col-4 d-flex flex-column justify-content-center align-items-start">
                                        <p class="finder-details-book text-muted">Date:</p>
                                        <p class="finder-details-book text-muted">Time:</p>
                                    </div>
                                    <div class="col-5 d-flex flex-column justify-content-center align-items-end">
                                        <p class="finder-details-bold"><?php echo date("M j, Y", strtotime($br->arrival_date));?></p>
                                        <p class="finder-details-bold"><?php echo date("h:i:a", strtotime($br->arrival_time));?></p>
                                    </div>
                                    
                                </div>

                                <div class="row mt-3 p-2">
                                    <div class="col-4 d-flex flex-column justify-content-center align-items-start">
                                        <p class="finder-details-book text-muted">Message :</p>
                                    </div>
                                    <div class="col-8 d-flex flex-column justify-content-center align-items-end">
                                        <p class="finder-details-bold"> <?php echo $br->instruction;?></p>
                                    </div> 
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6 p-2 d-flex justify-content-center align-items-centers">
                                        <button transac_id="<?php echo $br->transaction_id;?>" user_id="<?php echo $br->user_id_fk?>" class="btn btn-danger p-2 declinebtn">Decline</button>
                                    </div>
                                    <div class="col-6 p-2 d-flex justify-content-center align-items-center">
                                        <button transac_id="<?php echo $br->transaction_id;?>" user_id="<?php echo $br->user_id_fk?>" class="btn btn-success p-2 acceptbtn">Accept</button>
                                    </div> 
                                </div>
                            </div> -->
                            
                        </div>
                        <!-- Request Card -->

                        <!-- <div class="request-card mt-3">

                            <div class="card-head-color row p-3 ">
                            </div>

                            <div class="request-card-content">

                                <div class="row mt-3">
                                    <div class="col-3 d-flex justify-content-center align-items-center">
                                        <img class="request-card-logo" src="assets/images/Prof1.png" alt="">
                                    </div>
                                    <div class="col-5 mt-1">
                                        <p class="finder-name">Dave Delgado</p>
                                        <p class="finder-user text-muted">dabidabidi</p>
                                    </div>
                                    <div class="col-4 mt-1 d-flex flex-column justify-content-center align-items-center ">
                                        <p class="finder-date-trans text-muted">April 25, 2022</p>
                                        <p class="finder-time-trans text-muted">3:00PM GMT+8</p>
                                    </div>
    
                                </div>

                                <div class="row mt-3">
                                    <div class="col-5 d-flex flex-column justify-content-center align-items-center">
                                        <p class="finder-details text-muted">Service</p>
                                        <p class="finder-details-bold">Computer Booking</p>
                                    </div>
                                    <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                                        <p class="finder-details text-muted">Access Type</p>
                                        <p class="finder-details-bold">Regular</p>
                                    </div>
                                    <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                                        <p class="finder-details text-muted">Tickets</p>
                                        <p class="finder-details-bold">1</p>
                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="row mt-3">
                                    <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                                        <i class="book-icon fa-solid fa-calendar-alt"></i>
                                    </div>
                                    <div class="col-4 d-flex flex-column justify-content-center align-items-start">
                                        <p class="finder-details-book text-muted">Date:</p>
                                        <p class="finder-details-book text-muted">Time:</p>
                                    </div>
                                    <div class="col-5 d-flex flex-column justify-content-center align-items-end">
                                        <p class="finder-details-bold">April 22, 2022</p>
                                        <p class="finder-details-bold">4:00 PM(GMT+8)</p>
                                    </div>
                                    
                                </div>

                                <div class="row mt-3 p-2">
                                    <div class="col-4 d-flex flex-column justify-content-center align-items-start">
                                        <p class="finder-details-book text-muted">Message :</p>
                                    </div>
                                    <div class="col-8 d-flex flex-column justify-content-center align-items-end">
                                        <p class="finder-details-bold"> Kanang daghan chix dadi ha.</p>
                                    </div> 
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6 p-2 d-flex justify-content-center align-items-centers">
                                        <button class="btn btn-danger p-2" >Decline</button>
                                    </div>
                                    <div class="col-6 p-2 d-flex justify-content-center align-items-center">
                                        <button class="btn btn-success p-2">Accept</button>
                                    </div> 
                                </div>
                            </div>
                            
                        </div> -->
                        
                    </div>


                </div>
            </div>
            
            <!--Right side column-->
            <div class="right-side col-md-8 col-sm-8 col-xs-8 my-3" id="waitinglistview"> 
                

                <!-- ONGOING BOOKINGS -->
                
                <div class="right-sidebar my-3"> 
                    
                    <div class="right-sidebar-title d-flex align-items-left justify-content-start p-2">
                        <i class="title-icon fa-solid fa-spinner fa-pulse d-flex align-items-center justify-content-center"></i>
                        <h6 class="card-title-text m-0 p-2">WAITING LIST</h6>
                    </div>
                    
                    <div class="right-sidebar-padding">
                        
                        <div class="table-card">

                            <div class="table-card-content">
                                <table class="ongoing-table-bookings">
                                    <tr class="title-table-wait">
                                      <th>Transaction ID</th>
                                      <th>Name</th>
                                      <th>Arrival Date & Time</th>
                                      <th>Payment Status</th>
                                      <th>Payment Method</th>
                                      <th>Status</th>
                                    </tr>
                                    <?php foreach ($acceptedrequest as $ar) {?>
                                        <!-- date and time check if overdue  -->
                                         <?php 
                                                $currentdate = strtotime(date("Y-m-d"));
                                                $arrival_date = strtotime($ar->arrival_date);
                                      
                                        ?>
                                    <tr class="table-row" data-toggle="modal" data-target="#transaction-modal" id_data="<?php echo $ar->transaction_id;?>">
                                      <td><?php echo $ar->transaction_id;?></td>
                                      <td><?php echo $ar->firstname;?> <?php echo $ar->lastname;?></td>

                       
                                      <td>
                                            <?php echo date("M j, Y", strtotime($ar->arrival_date));?>
                                            <?php echo date("h:i A", strtotime($ar->arrival_time));?>
                                      </td>


                                      <td class="status-<?php if($ar->payment_status == "unpaid"){echo "unpaid";} else {echo "paid";} ?>"><?php echo $ar->payment_status;?></td>
                                      <?php if($ar->payment_type == "gcash"){
                                      echo '<td><img class="gcash-logo" src="assets/images/gcash.png" alt=""> </td>';
                                      }
                                      else if($ar->payment_type == "overthecounter"){
                                      echo "<td><i class='fa-solid fa-cash-register' style='font-size: 25px; color: #565151;'></i></td>";
                                      }
                                      else{
                                        echo '<td>-</td>';
                                      }
                                      ?>
                                     <?php if($currentdate>$arrival_date){?>

                                      <td style="color:red; font-size:10px; font-weight:900">
                                         Overdue
                                      </td>
                                      <?php }else{?>
                                        <td class="status-waiting">
                                          waiting
                                      </td>
                                      <?php }?>

                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                            
                        </div>
                       
                    </div>


                </div>
                            
                <!-- LIST OF BOOKINGS -->
                <div class="right-sidebar my-3"> 
                    
                    <div class="right-sidebar-title d-flex align-items-left justify-content-start p-2">
                        <i class="title-icon fa-solid fa-clipboard-list d-flex align-items-center justify-content-center"></i>
                        <h6 class="card-title-text m-0 p-1">LIST OF BOOKINGS</h6>
                    </div>
                    
                    <div class="right-sidebar-padding">
                        
                        <div class="table-card">

                            <div class="table-card-content">

                                <table class="list-table-bookings">
                                    <tr class="title-table-all">
                                      <th>Transaction ID</th>
                                      <th>Name</th>
                                      <th>Service Access Type</th>
                                      <th>Arrival Date & Time</th>
                                      <th>Transaction Status</th>
                                      <th>Payment Status</th>
                                      <th>Tickets</th>
                                      <th>Service Fee</th>
                                    </tr>
                                    <?php foreach($alltransac as $at){?>
                                    <tr class="table-row" data-toggle="modal" data-target="#transaction-modal" id_data="<?php echo $at->transaction_id;?>">
                                      <td><?php echo $at->transaction_id;?></td>
                                      <td><?php echo $at->firstname;?> <?php echo $at->lastname;?></td>
                                      <td class="text-center"><?php echo $at->name;?></td>
                                      
                             
                                      <td><?php echo date("M j, Y", strtotime($at->arrival_date));?>

                                      <?php echo date("h:i A", strtotime($at->arrival_time));?></td>

                                      <td class="status-<?php if($at->transaction_status == "declined"){echo "decline";} else {echo "accepted";}?>"><?php echo $at->transaction_status;?></td>
                                      <td class="status-<?php if($at->payment_status == "unpaid"){echo "unpaid";} else {echo "paid";} ?>"><?php echo $at->payment_status;?></td>
                                      <td><?php echo $at->num_ticket;?></td>
                                      <td class="fee">₱<?php echo $at->service_fee;?></td>
                                    </tr>
                                    <?php }?>
                                </table>  
                            </div>
                        </div>  
                    </div>
                </div>

                
            </div>


            <!-- Modal -->
            <div class="modal fade" id="transaction-modal">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="modal-holder ">
                    <div class="row d-flex justify-content-between">

                        <div class="col-6">
                            <div class="modal-left-card-profile">
                                <div class="modal-user-information d-flex flex-column align-items-center justify-content-center">
                                    <img id="finder_profile" onerror="this.src='assets/images/default.png';" alt="">
                                    <h6 class="modal-user-name" id="finder_name"></h6>
                                    <p class="modal-caption">Finder</p> 

                                <div class="modal-user-info d-flex flex-column align-items-center justify-content-center">
                                    <h5 class="modal-user-info-title user">User Information</h5>
                                    <p class="modal-caption-user" id="email"></p> 
                                    <p class="modal-caption-user" id="contact_num"></p> 
                                    <p class="modal-caption-user" id="vac_status"></p> 
                                    <p class="modal-caption-user" id="gender"></p> 
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                        <div class="modal-right-card-profile">
                            <div class="modal-user-info">
                            <h5 class="modal-user-info-title">Booking Information</h5>
                            <div class="row ">
                                <div class="col-6">
                                <!-- <p class="modal-caption-details-left">Computer Shop:</p>  -->
                                <p class="modal-caption-details-left">Service Type:</p> 
                                <p class="modal-caption-details-left">Access Type:</p> 
                                <p class="modal-caption-details-left">Arrival Date:</p> 
                                <p class="modal-caption-details-left">Arrival Time:</p> 
                                <p class="modal-caption-details-left">Payment Method:</p>
                                <p class="modal-caption-details-left">Payment Status:</p>
                                <p class="modal-caption-details-left"><b>Message:</b> </p>

                                <div class="ticket-fee-total">
                                    <p class="modal-caption-details-left"><b>Tickets:</b> </p>
                                </div>
                                <p class="modal-caption-details-left-total"><b>Total Service Fee:</b> </p>
                                </div>

                                <div class="col-6 modal-data-info-right">
                                <!-- <p class="modal-caption-details-right" id="compshop">sdaasdsa</p>  -->
                                <p class="modal-caption-details-right" id="servicetype"></p> 
                                <p class="modal-caption-details-right" id="accesstype"></p> 
                                <p class="modal-caption-details-right" id="date_arrival"></p> 
                                <p class="modal-caption-details-right" id="time_arrival"></p> 
                                <!-- If Gcash -->
                                <p class="modal-caption-details-right" id="payment-notselected"><img id="payment-method-logo" alt="" style="width:19px;"></p>  
                                <!-- If over-the-counter -->
                                <!-- <p class="modal-caption-details-right-method"><img id="payment-method-logo" alt="" style=""></p>  -->

                                <!-- If paid -->
                                <p class="modal-caption-details-right-status badge" id="pay_status"></p> 
                                <!-- If unpaid -->
                                <!-- <p class="modal-caption-details-right-status badge badge-danger">Unpaid</p>  -->
                                
                                <p class="modal-caption-details-right-message text-muted" id="message"></p> 

                                <div class="ticket-fee-total-right" style="border-bottom: 1px solid #C4C4C4; margin-top: 0;">
                                    <p class="modal-caption-details-left" id="numticket"><b></b> </p>
                                </div>

                                <p class="modal-caption-details-right-total" id="totalfee"><b></b> </p>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        </div>

                    </div>
                    </div>
                </div>

                </div>
            </div>
            </div>

        </div>
        
    </div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/shopAdminBookings.js"></script>
</body>
</html>
 
<!-- list of all bookings table -->
<script>
$(document).on("click",".table-row",function(){
    var Base_URL = "<?php echo base_url();?>";
    var id = $(this).attr("id_data");
        $.ajax({
					url: Base_URL+"viewTransaction/"+id,
					type: "GET",
                    cache: false,
                    async: false,
					success: function(data){
                           var result = JSON.parse(data);
                            for(var x = 0 ; x < result.length ; x ++)
                            {
                                $("#finder_name").text(result[x]['firstname']+","+result[x]['lastname']);
                                $("#email").text(result[x]['email']);
                                $("#gender").text(result[x]['gender']);
                                $("#vac_status").text(result[x]['vac_status']);
                                $("#contact_num").text(result[x]['phone_num']);
                                $("#finder_profile").removeAttr("src");
                                $("#finder_profile").attr("src","assets/upload/finder/"+result[x]['profile_pic']);
                                
                                $("#servicetype").text(result[x]['servicetype']);
                                $("#accesstype").text(result[x]['name']);
                                $("#numticket").text(result[x]['num_ticket']);
                                newdate = dateformat(result[x]['arrival_date']);
                                time = result[x]['arrival_time'];
                                arrival_time = new Date(''+newdate+' '+time+'').toLocaleTimeString().replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
                                $("#date_arrival").text(newdate);
                                $("#time_arrival").text(arrival_time);
                                $("#message").text(result[x]['instruction']);
                                $("#totalfee").text("₱"+result[x]['service_fee']);
                                $("#pay_status").text(result[x]['payment_status']);
                                if(result[x]['payment_status'] == "paid"){
                                    $("#pay_status").removeClass("badge-danger");
                                    $("#pay_status").addClass("badge-success");
                                }
                                else if(result[x]['payment_status'] == "unpaid"){
                                    $("#pay_status").addClass("badge-danger");
                                    $("#pay_status").removeClass("badge-success");
                                }
                                    if(result[x]['payment_type'] == "gcash"){
                                        $("#payment-method-logo").removeAttr("src");
                                        $("#payment-method-logo").attr("src","assets/images/gcash.png");
                                      
                                        $('#gcash_section').show();
								        $('#overthecounter_section').hide();

                                    }else if(result[x]['payment_type'] == "overthecounter"){
                                        $("#payment-method-logo").removeAttr("src");
                                        $("#payment-method-logo").attr("src","assets/images/counter2.png");

                                        $('#overthecounter_section').show();
								        $('#gcash_section').hide();
                                    }else if(result[x]['payment_type'] == "not_selected"){
                                        $("#payment-method-logo").removeAttr("src");
                                    }
                            }
                    }
        
                });
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
                            $("#bookcount").text(data);   
                          }  
                        }
                      }); 
            //ajax;

        },100);
    </script>
<script>
		$(document).on("click",".acceptbtn",function(){
			var Base_URL = "<?php echo base_url();?>";
			var id = $(this).attr("transac_id");
            var user_id = $(this).attr("user_id");
            $.ajax({
            url:Base_URL+"accept-updateBookStatus/"+id+"/"+user_id,
                type: "POST",
                success: function(data)
                {
                    swal({
                            title: "Transaction has been moved to waiting list",
                            text: "",
                            icon: "success",
                            button: "Continue",
                            }).then((value) => {
                            });   
                }
            });
            $(this).parent().parent().parent().parent().addClass('d-none');
		});
</script>
<script>
		$(document).on("click",".declinebtn",function(){
			var Base_URL = "<?php echo base_url();?>";
			var id = $(this).attr("transac_id");
            var user_id = $(this).attr("user_id");
            $.ajax({
            url:Base_URL+"decline-updateBookStatus/"+id+"/"+user_id,
                type: "POST",
                success: function(data)
                {  
                }
            });
			$(this).parent().parent().parent().parent().addClass('d-none');
		});
</script>
<script>
    setInterval(function(){
$( document ).ready(function() {
    var Base_URL = "<?php echo base_url();?>";
    $("#request-pending-section").html("");
    $.ajax({
					url: Base_URL+"showpendinglist",
					type: "GET",
                    cache: false,
                    async: false,
					success: function(data){
                           var result = JSON.parse(data);
                            for(var x = 0 ; x < result.length ; x ++)
                            {
                                time = result[x]['arrival_time'];
                                dateissued = dateformat(result[x]['date_issued']);   
                                arrivaldate = dateformat(result[x]['arrival_date']);  
                                arrival_time = new Date(''+arrivaldate+' '+time+'').toLocaleTimeString().replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
                                $("#request-pending-section").  append("<div class='request-card mt-3'> <div class='card-head-color row p-3'></div> <div class='request-card-content'><div class='row mt-3'> <div class='col-3 d-flex justify-content-center align-items-center'> <img class='request-card-logo' src='assets/upload/finder/"+result[x]['profile_pic']+"' alt='' onerror='this.src="+'"assets/images/default.png"'+";'> </div> <div class='col-5 mt-1'> <p class='finder-name'></p>"+result[x]['firstname']+"<p class='finder-user text-muted'>"+result[x]['username']+"</p> </div> <div class='col-4 mt-1 d-flex flex-column justify-content-center align-items-center'> <p class='finder-date-trans text-muted'>"+dateissued+"</p> </div> </div> <div class='row mt-3'> <div class='col-5 d-flex flex-column justify-content-center align-items-center'> <p class='finder-details text-muted'>Service</p> <p class='finder-details-bold'>"+result[x]['servicetype']+"</p> </div> <div class='col-4 d-flex flex-column justify-content-center align-items-center'> <p class='finder-details text-muted'>Access Type</p> <p class='finder-details-bold'>"+result[x]['name']+"</p> </div> <div class='col-3 d-flex flex-column justify-content-center align-items-center'> <p class='finder-details text-muted'>Tickets</p> <p class='finder-details-bold'>"+result[x]['num_ticket']+"</p> </div> </div> <hr> <div class='row mt-3'> <div class='col-3 d-flex flex-column justify-content-center align-items-center'> <i class='book-icon fa-solid fa-calendar-alt'></i> </div> <div class='col-4 d-flex flex-column justify-content-center align-items-start'> <p class='finder-details-book text-muted'>Date:</p> <p class='finder-details-book text-muted'>Time:</p> </div> <div class='col-5 d-flex flex-column justify-content-center align-items-end'> <p class='finder-details-bold'>"+arrivaldate+"</p> <p class='finder-details-bold'>"+arrival_time+"</p> </div> </div> <div class='row mt-3 p-2'> <div class='col-4 d-flex flex-column justify-content-center align-items-start'> <p class='finder-details-book text-muted'>Message :</p> </div> <div class='col-8 d-flex flex-column justify-content-center align-items-end'> <p class='finder-details-bold'>"+result[x]['instruction']+"</p> </div> </div> <div class='row mt-3'> <div class='col-6 p-2 d-flex justify-content-center align-items-centers'> <button transac_id='"+result[x]['transaction_id']+"' user_id='"+result[x]['user_id_fk']+"' class='btn btn-danger p-2 declinebtn'>Decline</button> </div> <div class='col-6 p-2 d-flex justify-content-center align-items-center'> <button transac_id='"+result[x]['transaction_id']+"' user_id='"+result[x]['user_id_fk']+"' class='btn btn-success p-2 acceptbtn'>Accept</button> </div> </div> </div> </div>");
                                
                            }
                            
                    }

    });
    // end of ajax
});
},1000);
// end of set interval
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
<!-- <script>
    $("#waitinglistview").append("<div class='right-sidebar my-3'> <div class='right-sidebar-title d-flex align-items-left justify-content-start p-2'> <i class='title-icon fa-solid fa-spinner fa-pulse d-flex align-items-center justify-content-center'></i> <h6 class='card-title-text m-0 p-2'>WAITING LIST</h6> </div> <div class='right-sidebar-padding'> <div class='table-card'> <div class='table-card-content'> <table class='ongoing-table-bookings'> <tr class='title-table-wait'> <th>Transaction ID</th> <th>Name</th> <th>Arrival Date & Time</th> <th>Payment Status</th> <th>Payment Method</th> <th>Status</th> </tr> <tr class='table-row' data-toggle='modal' data-target='#transaction-modal' id_data=''> <td id='wvtransactionid'></td> <td id='wvname'></td> <td id='wvarrivaldateandtime'></td> <td class='status-paid'></td>; <td class='wvpaymentstatus'><img class='gcash-logo' src='assets/images/gcash.png' alt=''> </td>; <td class='status-waiting'>waiting</td> </tr> </table> </div> </div> </div> </div>");
</script> -->
