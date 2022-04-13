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
                        <h6 class="m-0 p-1">(2) BOOKING REQUEST</h6>
                    </div>
                    
                    <div class="left-sidebar-padding">
                        
                        <!-- Request Card -->
                        <?php foreach ($bookingrequest as $br) {?>
                        <div class="request-card mt-3">

                            <div class="card-head-color row p-3 ">
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
                            </div>
                            
                        </div>
                        <?php }?> 
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
            <div class="right-side col-md-8 col-sm-8 col-xs-8 my-3"> 
                

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
                                      <th>Transaction Status</th>
                                      <th>Payment Status</th>
                                      <th>Payment Method</th>
                                      <th>Status</th>
                                    </tr>
                                    <?php foreach ($acceptedrequest as $ar) {?>
                                    <tr class="table-row">
                                      <td><?php echo $ar->transaction_id;?></td>
                                      <td><?php echo $ar->firstname;?> <?php echo $ar->lastname;?></td>
                                      <td class="status-accepted"><?php echo $ar->transaction_status;?></td>
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
                                      <td class="status-waiting">waiting</td>
                                    </tr>
                                    <?php }?>
                                    <!-- <tr>
                                      <td>103645</td>
                                      <td>Helen Bennett</td>
                                      <td class="status-accepted">Accepted</td>
                                      <td class="status-paid">Paid</td>
                                      <td><img class="gcash-logo" src="assets/images/gcash.png" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>103645</td>
                                        <td>Roland Mendel</td>
                                        <td class="status-accepted">Accepted</td>
                                        <td class="status-unpaid">Unpaid</td>
                                        <td><b>Over-the-counter</b></td>
                                    </tr> -->
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
                                    <tr class="table-row">
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

            
        </div>
        
    </div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/shopAdminBookings.js"></script>
</body>
</html>
<script>
		$(document).on("click",".acceptbtn",function(){
			var Base_URL = "<?php echo base_url();?>";
			var id = $(this).attr("transac_id");
            var user_id = $(this).attr("user_id");
            alert(id);
            $.ajax({
            url:Base_URL+"accept-updateBookStatus/"+id+"/"+user_id,
                type: "POST",
                beforeSend : function()
                {
                alert("processing");
                },
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
            
            alert(id);
            $.ajax({
            url:Base_URL+"decline-updateBookStatus/"+id+"/"+user_id,
                type: "POST",
                beforeSend : function()
                {
                alert("processing");
                },
                success: function(data)
                {  
                }
            });
			$(this).parent().parent().parent().parent().addClass('d-none');
		});
</script>