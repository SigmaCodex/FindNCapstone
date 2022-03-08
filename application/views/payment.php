<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sample Payment Form Exercise</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="asset/css/register.css">
</head>
<body>

<div class="container">
<br>  
<hr>

<div class="row">
	<aside class="col-sm-3"></aside>
	<aside class="col-sm-6">
<p>Payment Form</p>

<article class="card">
<div class="card-body p-5">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
		<i class="fa fa-credit-card"></i> Gcash</a>
    </li>
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">
	<p class="alert alert-info">Total: 10 PHP</p>
	<form role="form">
	<div class="form-group">
		<label for="username">Full name</label>
		<input type="text" class="form-control" name="username" placeholder="" required="">
	</div> <!-- form-group.// -->

	<div class="form-group">
		<label for="cardNumber">Gcash Phone Number</label>
		<div class="input-group">
			<input type="text" class="form-control" name="cardNumber" placeholder="">
			<div class="input-group-append">
				<span class="input-group-text text-muted">
					<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
					<i class="fab fa-cc-mastercard"></i> 
				</span>
			</div>
		</div>
	</div> <!-- form-group.// -->

	<div class="row">
	    <div class="col-sm-8">
	        <div class="form-group">
	            <label><span class="hidden-xs">Input Payment Value</span> </label>
	        	<div class="input-group">
	        		<input type="number" class="form-control" placeholder="MM" name="">
		         
	        	</div>
	        </div>
	    </div>
	</div> <!-- row.// -->
	<button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
	</form>
<
</div> <!-- tab-pane.// -->
</div> <!-- tab-content .// -->

</div> <!-- card-body.// -->
</article> <!-- card.// -->


	</aside> <!-- col.// -->
</div> <!-- row.// -->

</div> 
<!--container end.//-->

<a data-amount="1" data-fee="0" data-expiry="6" data-customer="johndave" data-description="Payment for services rendered"  data-href="https://getpaid.gcash.com/paynow" data-public-key="pk_865748980ca7d809750906e8a7db5129" onclick="this.href = this.getAttribute('data-href')+'?public_key='+this.getAttribute('data-public-key')+'&amp;amount='+this.getAttribute('data-amount')+'&amp;fee='+this.getAttribute('data-fee')+'&amp;expiry='+this.getAttribute('data-expiry')+'&amp;description='+this.getAttribute('data-description')+'customername=johndavedelgado'+this.getAttribute('data-customer');" href="https://getpaid.gcash.com/paynow?public_key=pk_865748980ca7d809750906e8a7db5129&amp;amount=100&amp;fee=0&amp;expiry=6&amp;description=Payment for TNC;cutomername=johndavedelgado" target="_blank" class="x-getpaid-button"><img src="https://getpaid.gcash.com/assets/img/paynow.png"></a>	











<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="asset/js/register.js"></script>
</body>
</html>