<!doctype html>
<html lang="en">
  <head>
  	<title>Super Admin List Of Computer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />
	<style>
		#map {
        height: 100%;
		}
		#map { position:absolute;left: 550px; top:350px; bottom:0px;height:450px ;width:580px; }
        .geocoder {
            position:absolute;left: 550px; top:290px;
        }
	</style>


	</head>
	<body>
	<section class="ftco-section">
		<nav>
        <ul class="menu">
			<!-- <li class="logo"><a href="" id="Back">Back</a></li> -->
            <li class="logo"><a href="#">FindN</a></li>
			      <li class="item button secondary"><a href="user-logout">Log out</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    	</nav>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-left mb-6">
					<h2 class="heading-section">Computer Shop list</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" class="addcomp btn mb-2 mb-md-0 btn-primary btn-block" data-target="#addComputerModal" data-toggle="modal">Add Computer shop</button>
				</div>
			</div>
      		<br>
			<div class="row">
				<div class="col-md-12 col-xs-1">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table" style="margin:0;" !important>
						  <thead class="thead-primary">
						    <tr>
						      <th>No.</th>
						      <th>Name</th>
						      <th>Email Address</th>
						      <th>Contact number</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
							<!-- php -->
						  <?php foreach ($details as $s) {?>  
						    <tr id="<?php echo $s->shop_id;?>" class="alert" role="alert">
						    	<td data-taget="shopid" ><?php echo $s->shop_id;?></td>
						    	<td data="shop_name" ><?php echo $s->shop_name;?>	</td>
						    	<td data-taget="email" ><?php echo $s->email_address;?>	</td>
								<td data-taget="coordinates"  hidden><?php echo $s->coordinates;?></td>
						      	<td data-taget="number"	><?php echo $s->contact_number;?></td>
						      	<td>
									<div style="display:flex;justify-content:space-around;align-items:center;">
										<button type="button" class="view-shop" data="<?php echo $s->shop_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa fa-eye"></i></span>
										</button>
										<button type="button" class="remove-shop" data="<?php echo $s->shop_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa fa-close"></i></span>
										</button>
								   </div>
				        		</td>
						    </tr>
						    <?php }?>  	
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

<div id="addComputerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h3 class="text-center mb-3">Add Computer Shop</h3>
      </div>
      <div class="modal-body">
	  	<form id="addcompform" class="" name="addcompform">
					<div class="form-group mb-2">
		      			<label for="name">ComputerShop Name</label>
		      			<input name="compname" id="shopName" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Contact Number</label>
		      			<input  name="number" id="c_number" type="text" class="form-control">
		      		</div> 
					<div class="form-group mb-2">
		      			<label for="name">Email Address</label>
		      			<input name="email" id="email" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Address</label>
		      			<input name="address" id="Address" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Latitude</label>
		      			<input  type="text" id="lat" name="lat" placeholder="Your lat.." class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Longtitude</label>
		      			<input type="text" id="lng" name="lng" placeholder="Your lng.." class="form-control">
		      		</div>
					<div>		
		      </div>
			    <div class="geocoder"><div id="geocoder" ></div></div>
				<div id="map"></div>
				<div class="modal-footer">
                	<div class="form-group mb-2">
					 	<button type="button" data-target id="closebtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3" id="close-btn" readonly="readonly">
		        		</button>
	              	</div>
                	<div class="form-group mb-2">
					  <input value="Add" class="form-control btn btn-primary rounded submit px-3" id="addcomputershopbtn" readonly="readonly">
	              	</div>
              	</div>
			  </form>
      		</div>
    	</div>
	</div>
</div>
	</body>


</html>

<!-- script for mapping  -->
<script>
         var user_location = [123.89702509681695, 10.297418655907592];
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG5rbzEzIiwiYSI6ImNrbWZxNWl5eDM3amcyeGp4cHRvN3pxdGgifQ.HM7QZISQcECRgm9aKAZysg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v10',
            center: user_location,
            zoom: 12
        });
        //  geocoder here
        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            // limit results to Australia
            //country: 'IN',
        });

        var marker ;

        // After the map style has loaded on the page, add a source layer and default
        // styling for a single point.
        map.on('load', function() {
            addMarker(user_location,'load');
            // add_markers(saved_markers);

            // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
            // makes a selection and add a symbol that matches the result.
            geocoder.on('result', function(ev) {
                alert("Locating");
                console.log(ev.result.center);

            });
        });
        map.on('click', function (e) {
            marker.remove();
            addMarker(e.lngLat,'click');
            //console.log(e.lngLat.lat);
            document.getElementById("lat").value = e.lngLat.lat;
            document.getElementById("lng").value = e.lngLat.lng;

        });

        function addMarker(ltlng,event) {

            if(event === 'click'){
                user_location = ltlng;
            }
            marker = new mapboxgl.Marker({draggable: true,color:"#d02922"})
                .setLngLat(user_location)
                .addTo(map)
                .on('dragend', onDragEnd);
        }
        // function add_markers(coordinates) {

        //     var geojson = (saved_markers == coordinates ? saved_markers : '');

        //     console.log(geojson);
        //     // add markers to map
        //     geojson.forEach(function (marker) {
        //         console.log(marker);
        //         // make a marker for each feature and add to the map
        //         new mapboxgl.Marker()
        //             .setLngLat(marker)
        //             .addTo(map);
        //     });

        // }

        function onDragEnd() {
            var lngLat = marker.getLngLat();
            document.getElementById("lat").value = lngLat.lat;
            document.getElementById("lng").value = lngLat.lng;
            console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);
        }

        // $('#signupForm').submit(function(event){
        //     event.preventDefault();
        //     var lat = $('#lat').val();
        //     var lng = $('#lng').val();
        //     var url = 'locations_model.php?add_location&lat=' + lat + '&lng=' + lng;
        //     $.ajax({
        //         url: url,
        //         method: 'GET',
        //         dataType: 'json',
        //         success: function(data){
        //             alert(data);
        //             location.reload();
        //         }
        //     });
        // });
        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
    </script>
	<!-- add computer shop ajax logic -->
	<script>
		$(document).ready(function () {
	$("#addcompform").validate({
		rules: {
			compname: {
				required: true,
			},
			address: {
				required: true,
			},
			number: {
				required: true,
				number: true,
				minlength: 11,
				maxlength: 11,
			},
			email: {
				required: true,
				email: true,
			},
			lat: {
				required: true,
			},
			lng: {
				required: true,
			},
		},
		messages: {
			compname: {
				required: "Please enter computer shop name",
			},
			address: {
				required: "Please enter address",
			},
			number: {
				required: "Please enter phone number",
				number: "Please enter numbers only",
			},
			email: {
				required: "Please enter your email",
			},
		},
	});
});
		$(document).on("click","#addcomputershopbtn",function(){
			var validator = $("#addcompform").validate();
			if ($("#addcompform").valid()) {
			var s_name = $('#shopName').val();
			var c_number = $('#c_number').val();
			var email = $('#email').val();
			var add = $('#Address').val();
			var lat = $('#lat').val();
            var lng = $('#lng').val();
			var coordinate = lat + ',' + lng;

			$.ajax({
                url: "addshop",
                method: 'POST',
                data:{shop_name:s_name,number:c_number,email_add:email,address:add,coor:coordinate},
                success: function(data){
                    // window.location = "listofcomputershop";
					swal({
						title: "Good job!",
						text: "ComputerShop has been registered!",
						icon: "success",
						button: "Continue",
					}).then((value) => {
						window.location = "http://localhost/FindNCapstone/listofcomputershop";
					});					
                }
            });
			} else {
		swal(
			{
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false,
				//closeOnCancel: false
			},
			function () {
				swal("Deleted!", "Your imaginary file has been deleted!", "success");
			}
		);
	}
		});
	</script>
	<!-- script for viewing the shop -->
	<script>
		$(document).on("click",".view-shop",function(){
			var id = $(this).attr("data");

			window.location = "admin-list/" + id;
		
		});
	</script>

	<!-- script for removing shop -->
	<script>
		$(document).on("click",".remove-shop",function(){
			var CSPK = $(this).attr("data");

			swal({
  				title: "Are you sure to delete this computer shop?",
  				icon: "warning",
  				buttons: true,
  				dangerMode: true,
			}).then((willDelete) => {
  				if (willDelete) {
					$.ajax({
						url: "http://localhost/FindNCapstone/deleteCompShop/" + CSPK,
						method: "POST",
						data: { shop_id: CSPK },
						success: function (data) {
							swal("Computer Shop has been deleted!", {
    					  		icon: "success",
    						}).then((value) => {
						  		window.location = "http://localhost/FindNCapstone/listofcomputershop";
							});

						},
					});	
  				}
			});
		});
	</script>

<!-- <script>

			$(document).on("click",".edit-shop",function(){
			var id = $(this).attr("data");
			var shopname = $('.'+id).children('td[data-target=connum]').text();
			var connum = $('#'+id).children('td[data-target=connum]').text();
			var email = $('#'+id).children('td[data-target=email]').text();
			var address = $('#'+id).children('td[data-target=address]').text();

			let text = $('#'+id).children('td[data-target=coordinates]').text();
			const myArray = text.split(",");

			var lat = myArray[0];
			var lng = myArray[1];

				alert(id);
				alert(shopname);

			$("#shopName").text(shopname);
			$("#c_number").val(connum);
			$("#email").val(email);
			$("#Address").val(address);
			$("#lat").val(lat);
			$("#lng").val(lng);

			var validator = $("#addcompform").validate();
			if ($("#addcompform").valid()) {
			var s_name = $('#shopName').val();
			var c_number = $('#c_number').val();
			var email = $('#email').val();
			var add = $('#Address').val();
			var lat = $('#lat').val();
            var lng = $('#lng').val();
			var coordinate = lat + ',' + lng;

			$.ajax({
                url: "getshopdetails/" + id,
                method: 'POST',
                data:{shop_name:s_name,number:c_number,email_add:email,address:add,coor:coordinate},
            });
			} else {
		swal(
			{
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false,
				//closeOnCancel: false
			},
			function () {
				swal("Deleted!", "Your imaginary file has been deleted!", "success");
			}
		);
	}
		});


</script> -->