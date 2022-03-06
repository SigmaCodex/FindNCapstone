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












<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="asset/js/register.js"></script>
</body>
</html>