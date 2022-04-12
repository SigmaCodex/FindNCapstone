<!doctype html>
<html lang="en">
  <head>
  	<title>Super Admin List Of Computer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/reports.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
 	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	 

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="assets/admin/vendor/jquery/jquery.min.js"></script>
  	<script src="assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  	<!-- <script src="assets/js/adminlist.js"></script> -->
  	<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="assets/css/register.css">


	</head>
	<body>
		<nav>
        <ul class="menu">
			<!-- <li class="logo"><a href="" id="Back">Back</a></li> -->
            <li class="logo"><a href="#">FindN</a></li>
            <li class="item button secondary"><a href="pdf" class="print">Print</a></li>
			      <li class="item button secondary"><a href="user-logout">Log out</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    	</nav>
		<div class="container">
		 <div class='row dashboard-cards'>
      <div class='card col-md-4'>
        <?php foreach ($totalSalesAndBooks as $tS) {?> 
        <div class='card-title'>
          <h2>
            Computer bookings
          </h2>
      <!-- <div class='task-count'>
        14
      </div> -->
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
          <li>
          Total succesful books
            <span><?php echo $tS->totalBooks;?></span>
          </li>
          <?php   }
            foreach ($totalGcashBooks as $gcash) {
          ?>
          <li>
            Total GCash Books
            <span><?php echo $gcash->GcashBooks;?></span>
          </li>
          <?php }
            foreach($totalOTCBooks as $OTC) {
          ?>
          <li>
            Total Over the counter Books
            <span><?php echo $OTC->OTCbooks;?></span>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Monthly Booking sales
        <!-- <small>You have 101 pending tasks</small> -->
      </h2>
      <!-- <div class='task-count'>
        101
      </div> -->
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>

          <!-- php code for total monthly sales -->
        <?php $monthFee = array(array("Jan",0), array("Feb",0), array("Mar",0), array("Apr",0), array("May",0), array("Jun",0), array("July",0), array("Aug",0), array("Sep",0), array("Oct",0), array("Nov",0), array("Dec",0));?>
        <?php foreach ($monthly as $month) {?> 
          <?php $curmonth = date("M", strtotime($month->date_issued)); ?>
            <?php for($x=0; $x<12; $x++){
              if($curmonth == $monthFee[$x][0]) {
                $monthFee[$x][1]= $monthFee[$x][1] + $month->service_fee;
              } 
          }?>
            
            
        <?php } //foreach end?>
        <!-- php loop for displaying -->
        <?php for($y=0; $y<12; $y++){ ?>
          <?php if($monthFee[$y][1]!=0) { ?>
            <li>
            <?php echo $monthFee[$y][0]; ?>
             <span>P<?php echo $monthFee[$y][1]; ?></span>
          </li>
        <?php } } ?>
        
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Printing Monthly Sale
      </h2>
      <div class='task-count'>
        9
      </div>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
          <li>
            Sent Question Pending
            <span>59%</span>
          </li>
          <li>
            Sent Answer Pending
            <span>11%</span>
          </li>
          <li>
            File Attchment Pending
            <span>100%</span>
          </li>
          <li>
            Document Send Pending
            <span>7%</span>
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Payment Type Books
      </h2>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>

        <?php $monthSales = array(array("Jan",0,0,0), array("Feb",0,0,0), array("Mar",0,0,0), array("Apr",0,0,0), array("May",0,0,0), array("Jun",0,0,0), array("July",0,0,0), array("Aug",0,0,0), array("Sep",0,0,0), array("Oct",0,0,0), array("Nov",0,0,0), array("Dec",0,0,0));
        foreach ($MonthlyPT as $MPT) {
          $curmonth = date("M", strtotime($MPT->date_issued));
            for($x=0; $x<12; $x++){
              if($curmonth == $monthSales[$x][0] && $MPT->payment_type == "overthecounter") {
                $monthSales[$x][1] = $monthSales[$x][1] + $MPT->service_fee;
                $monthSales[$x][2] = $monthSales[$x][2] + 1;
              }
              if($curmonth == $monthSales[$x][0] && $MPT->payment_type == "gcash") {
                $monthSales[$x][1] = $monthSales[$x][1] + $MPT->service_fee;
                $monthSales[$x][3] = $monthSales[$x][3] + 1;
              } 
            } 
        }?>

          <!-- php loop for displaying -->
        <?php for($y=0; $y<12; $y++){ ?>
          <?php if($monthSales[$y][1]!=0) { ?>
            <li>
              <?php echo $monthSales[$y][0]; ?>
             <span>OTC <?php echo $monthSales[$y][2]; ?> GCash <?php echo $monthSales[$y][3]; ?></span>
          </li>
        <?php } } ?>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Payment Type Sales
      </h2>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>

        <?php $PaymentTypeSales = array(0,0);
        foreach ($MonthlyPT as $MPT) {
          $curmonth = date("M", strtotime($MPT->date_issued));
              if($MPT->payment_type == "overthecounter") {
                $totalAmount = $MPT->service_fee;
                $PaymentTypeSales[0] = $PaymentTypeSales[0] + $totalAmount;
              }
              if($MPT->payment_type == "gcash") {
                $totalAmount = $MPT->service_fee;
                $PaymentTypeSales[1] = $PaymentTypeSales[1] + $totalAmount;
              } 
        }?>

            <!-- php loop for displaying -->
            <li>
                  Over the counter
             <span> <?php echo $PaymentTypeSales[0]; ?></span>
          </li>
          <li>GCash
             <span> <?php echo $PaymentTypeSales[1]; ?></span>
          </li>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
  <div class='card col-md-4'>
    <div class='card-title'>
      <h2>
        Total Sales
      </h2>
    </div>
    <div class='card-flap flap1'>
      <div class='card-description'>
        <ul class='task-list'>
        <?php foreach ($totalSalesAndBooks as $tS) {?> 
        <li>
            Total Sales
            <span><?php echo $tS->totalSales;?></span>
          </li>
        <?php } ?>
        </ul>
      </div>
      <div class='card-flap flap2'>
        <div class='card-actions'>
          <a class='btn' href='#'>Close</a>
        </div>
      </div>
    </div>
  </div>
</div>
    
<div class="row">
				<div class="col-md-12 col-xs-1">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table" style="margin:0;" !important>
						  <thead class="thead-primary">
						    <tr>
						      <th>Shop Name</th>
						      <th>Over the Counter</th>
						      <th>Gcash</th>
						      <th>Sales</th>
						    </tr>
						  </thead>
						  <tbody>
							<!-- php -->
						  <?php foreach ($salesShop as $sS) {?>  
						    <tr class="alert" role="alert">
						    	<td ><?php echo $sS->shop_name;?></td>
						    	<td ><?php echo $sS->overthecounter;?>	</td>
						    	<td ><?php echo $sS->gcash;?>	</td>
								  <td ><?php echo $sS->sumofservicefee;?></td>
						    </tr>
						    <?php }?>  	
						  </tbody>
						</table>
					</div>
				</div>
			</div>
          
		</div>
	</body>


</html>

<!-- script for mapping  -->
<script>
$(document).ready(function(){
  var zindex = 10;
  
  $("div.card").click(function(e){
    e.preventDefault();

    var isShowing = false;

    if ($(this).hasClass("d-card-show")) {
      isShowing = true
    }

    if ($("div.dashboard-cards").hasClass("showing")) {
      // a card is already in view
      $("div.card.d-card-show")
        .removeClass("d-card-show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.dashboard-cards")
          .removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this)
          .css({zIndex: zindex})
          .addClass("d-card-show");

      }

      zindex++;

    } else {
      // no dashboard-cards in view
      $("div.dashboard-cards")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("d-card-show");

      zindex++;
    }
    
  });
});
// $(document).ready(function () {
//   var id = $(this).attr("data");
// 	var BASE_URL = "<?php echo base_url();?>";

// 	$.ajax({
// 		url: BASE_URL+"getMonthlyData/",
// 		method: "POST",
// 		dataType: "json",
// 		success: function (data) {
// 			$("#updfirst").val(data.firstname);
// 			$("#updlast").val(data.lastname);
// 			$("#updemail").val(data.email);
// 			$("#updCNum").val(data.contactaddress);
// 			$("#useridid").text(data.user_id);


			
// 			let text = data.birthdate;
// 			const myArray = text.split("/");
// 			var dd = myArray[0];
// 			var mm = myArray[1];
// 			var yy = myArray[2];
// 			if(mm.length > 1){
// 				var actbdate = [yy, mm, dd].join("-");
// 			}
// 			else{
// 				var actbdate = [yy, "0"+mm, dd].join("-");
// 			}
			

// 			$("#upddate").val(actbdate);

// 			$("#updateAdminModal").modal('show');
// 		},
// 	});
// }

</script>

