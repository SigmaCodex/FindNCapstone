<!DOCTYPE html>
<html>
<head>
	<title>view Ticket</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
</head>

<style>
    * {
  box-sizing: border-box;
}


body {
  @import url("https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700");
  font-family: "Ubuntu", sans-serif;
  background-color: #fff;
  height: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #1c1c1c;
  /* display: flex; */
  justify-content: center;
}

.ticket-system {
  max-width: 385px;
}
.ticket-system .top {
  display: flex;
  align-items: center;
  flex-direction: column;
}
.ticket-system .top .title {
  font-weight: normal;
  font-size: 1.6em;
  text-align: left;
  margin-left: 20px;
  margin-bottom: 50px;
  color: #fff;
}
.ticket-system .top .printer {
  width: 90%;
  height: 20px;
  border: 5px solid #fc5629;
  border-radius: 10px;
  box-shadow: 1px 3px 3px 0px rgba(0, 0, 0, 0.2);
}
.ticket-system .receipts-wrapper {
  /* overflow: hidden; */
  margin-top: -10px;
  padding-bottom: 10px;
}
.ticket-system .receipts {
  width: 100%;
  display: flex;
  align-items: center;
  flex-direction: column;
  transform: translateY(-510px);
  animation-duration: 2.5s;
  animation-delay: 500ms;
  animation-name: print;
  animation-fill-mode: forwards;
}
.ticket-system .receipts .receipt {
  padding: 25px 30px;
  text-align: left;
  min-height: 200px;
  width: 88%;
  background-color: #fff;
  border-radius: 10px 10px 20px 20px;
  box-shadow: 1px 3px 8px 3px rgba(0, 0, 0, 0.2);
}
.ticket-system .receipts .receipt .airliner-logo {
  max-width: 80px;
}
.ticket-system .receipts .receipt .route {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 30px 0;
}
.ticket-system .receipts .receipt .route .plane-icon {
  width: 30px;
  height: 30px;
  transform: rotate(90deg);
}
.ticket-system .receipts .receipt .route h2 {
  font-weight: 300;
  font-size: 2.2em;
  margin: 0;
}
.ticket-system .receipts .receipt .details {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.ticket-system .receipts .receipt .details .item {
  display: flex;
  flex-direction: column;
  min-width: 70px;
}
.ticket-system .receipts .receipt .details .item span {
  font-size: 0.8em;
  color: rgba(28, 28, 28, 0.7);
  font-weight: 500;
}
.ticket-system .receipts .receipt .details .item h3 {
  margin-top: 10px;
  margin-bottom: 25px;
}
.ticket-system .receipts .receipt.qr-code {
  height: auto;
  min-height: unset;
  position: relative;
  border-radius: 20px 20px 10px 10px;
  display: flex;
  align-items: center;
}
.ticket-system .receipts .receipt.qr-code::before {
  content: "";
  background: linear-gradient(to right, #fff 50%, #fc5629 50%);
  background-size: 22px 4px, 100% 4px;
  height: 4px;
  width: 90%;
  display: block;
  left: 0;
  right: 0;
  top: -1px;
  position: absolute;
  margin: auto;
}
.ticket-system .receipts .receipt.qr-code .qr {
  width: 70px;
  height: 70px;
}
.ticket-system .receipts .receipt.qr-code .description {
  margin-left: 20px;
}
.ticket-system .receipts .receipt.qr-code .description h2 {
  margin: 0 0 5px 0;
  font-weight: 500;
}
.ticket-system .receipts .receipt.qr-code .description p {
  margin: 0;
  font-weight: 400;
}

@keyframes print {
  0% {
    transform: translateY(-510px);
  }
  35% {
    transform: translateY(-395px);
  }
  70% {
    transform: translateY(-140px);
  }
  100% {
    transform: translateY(0);
  }
}

.qr-image{
  height:200px;
  transition: transform .2s; /* Animation */
}
.qr-image:hover {
 
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>

<body>
<!-- INSPO:  https://www.behance.net/gallery/69583099/Mobile-Flights-App-Concept -->
<main class="ticket-system">
   <div class="top">
   <div class="printer">
   </div>
   <div class="receipts-wrapper ">
      <div class="receipts">
         <div class="receipt">
            <img src="../assets/images/icon-logo.png" style="height:50px"></img>
            <?php foreach($transaction_details as $row){?>
            <div class="route">
               <h2><?php echo $row->shop_name?></h2>
            </div>
            <hr>
            <div class="details">
            <div class="item">
                  <span>Booking No.</span>
                  <h5><?php echo $row->transaction_id?></h5>
               </div>
               <br><div class="item">  </div>
               <div class="item">
                  <span>Name:</span>
                  <h5><?php echo $row->lastname?>,<?php echo $row->firstname?></h5>
               </div>
            
               <div class="item">
                  <span>Time And Date</span>
                  <p> <?php echo date("M j, Y", strtotime($row->arrival_date));?> | <?php echo date("h:i:a", strtotime($row->arrival_time));?></p>
               </div>
               <br><div class="item">  </div>
               <div class="item">
                  <span>Computer Type</span>
                  <p><?php echo $row->name;//name == computertype name?></p>
               </div>
              
               <div class="item">
                  <span>Number of Person</span>
                  <p><?php echo $row->num_ticket;?></p>
               </div>
               <div class="item">
                  <span>Payment Status</span>
                  <p><?php echo $row->payment_status;?></p>
               </div>
               <div class="item">
                  <span>Service Fee</span>
                  <p>₱<?php echo $row->service_fee;?></p>
               </div>
            </div>
         </div>
         <div class="receipt qr-code d-flex flex-column">
            <a href="../assets/QrCodes/<?php echo $row->qr_code?>"  download><img class="qr-image" src="../assets/QrCodes/<?php echo $row->qr_code?>" alt="" style=""  download></a>
            <br>
            <h6 style='text-align:center; font-size: 10px; font-weight: 500; padding-top: 5px; color: rgb(55, 152, 10);'>Note: <b>Click The Qr Code To Download</b></h6> 
            <br>

         </div>
      </div>
      
      <?php }?>
   </div>
 

</main>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
