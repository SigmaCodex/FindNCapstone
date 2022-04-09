<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodePen - stars</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="../assets/css/addrate.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="cont">
<div class="title">
  <h1>Give <span>Rate</span></h1>
</div>
<div class="stars">
<form id="addrateform" class="form" name="addrateform">
  <input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
  <label class="star star-5" for="star-5"></label>
  <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
  <label class="star star-4" for="star-4"></label>
  <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
  <label class="star star-3" for="star-3"></label>
  <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
  <label class="star star-2" for="star-2"></label>
  <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
  <label class="star star-1" for="star-1"></label>

<!-- palihug lang kog css sa button dubs kay without the button its better haha
try uncommenting the p tag for the actual result -->
</div>
<button type="button" class="addratebutton" id="addratebutton">submit</button>
<!-- <p>click the stars</p> -->
</div>
</div>
<button type="button" class="resubmitrate" id="resubmitrate">resubmit</button>
</div>
</form>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="assets/js/jquery/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</body>
</html>

<script>

$(document).ready(function() {
  <?php foreach($rate_score as $rs){ ?>
    var userscore = "<?php echo $rs->computer_rate; ?>";
  <?php } ?>
  if(userscore == "5"){$('#star-5').attr("checked","checked");}
  if(userscore == "4"){$('#star-4').attr("checked","checked");}
  if(userscore == "3"){$('#star-3').attr("checked","checked");}
  if(userscore == "2"){$('#star-2').attr("checked","checked");}
  if(userscore == "1"){$('#star-1').attr("checked","checked");}
  
});

$(document).on("click", "#addratebutton", function () {
	var rate = $('input[name="star"]:checked').val();
    var BASE_URL = "<?php echo base_url();?>";
    alert(rate+"score");

	$.ajax({
		url: BASE_URL+"addRate/7",
		type: "POST",
		data: {
			score: rate,
		},
		success: function (data) {	
            alert(data);
		},
	});
});

$(document).on("click", "#resubmitrate", function () {
	var rate = $('input[name="star"]:checked').val();
  var BASE_URL = "<?php echo base_url();?>";
  alert(rate+"score");

	$.ajax({
			url: BASE_URL+"updateRate/7",
			method: "POST",
			data: {
				score: rate,
			},
			success: function (data) {
        alert(data);
			},
		});
});
</script>
