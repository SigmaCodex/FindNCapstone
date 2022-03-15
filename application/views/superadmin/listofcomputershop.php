<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Table</title>
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
  	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<link rel="stylesheet" href="assets/css/register.css">

	<style>
		#map {
        height: 100%;
		}
		#map { position:absolute;left: 550px; top:350px; bottom:0px;height:450px ;width:580px; }
        .geocoder {
            position:absolute;left: 550px; top:290px;
        }
	</style>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />

	</head>
	<body>
	<section class="ftco-section">
		<nav>
        <ul class="menu">
            <li class="item button secondary"><a href="#">Log out</a></li>
        </ul>
    	</nav>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-left mb-6">
					<h2 class="heading-section">Computer Shop list</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" data-target="#addComputerModal" data-toggle="modal">Add Computer shop</button>
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
						      <th>&nbsp;</th>
						      <th>No.</th>
						      <th>Name</th>
						      <th>Status</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										<input type="checkbox">
									  	<span span class="checkmark"></span>
									</label>
						    	</td>
						    	<td>
						    		<!-- <div class="img" style="background-image: url(images/product-1.png);"></div> -->
						    	</td>
						    	<td>
						      		<div class="email">
						      			<span>Sneakers Shoes 2020 For Men </span>
						      		</div>
						      	</td>
						      	<td>Inactive</td>
						      	<td>
						      		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            			<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          			</button>
				        		</td>
						    	</tr>
						    	<tr class="alert" role="alert">
						    		<td>
						    			<label class="checkbox-wrap checkbox-primary">
											<input type="checkbox">
										  	<span pan class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<!-- <div class="img" style="background-image: url(images/product-2.png);"></div> -->
						    	</td>
						      	<td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      	</div>
						      	</td>
						      	<td>Inactive</td>
						      	<td>
						      		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            			<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          			</button>
				        		</td>
						    	</tr>
							    <tr class="alert" role="alert">
							    	<td>
							    		<label class="checkbox-wrap checkbox-primary">
											  <input type="checkbox">
											  <span class="checkmark"></span>
										</label>
							    	</td>
							    	<td>
						    		<!-- <div class="img" style="background-image: url(images/product-3.png);"></div> -->
						    		</td>
						      		<td>
						      			<div class="email">
						      				<span>Sneakers Shoes 2020 For Men </span>
						      			</div>
						      		</td>
						      		<td>Inactive</td>
						      		<td>
						      			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            				<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          				</button>
				        			</td>
						    		</tr>

						    		<tr class="alert" role="alert">
						    			<td>
						    				<label class="checkbox-wrap checkbox-primary">
										  		<input type="checkbox">
										  		<span class="checkmark"></span>
											</label>
						    			</td>
						    			<td>
						    				<!-- <div class="img" style="background-image: url(images/product-4.png);"></div> -->
						    			</td>
						      			<td>
						      				<div class="email">
						      				<span>Sneakers Shoes 2020 For Men </span>
						      			</div>
						      </td>
						      <td>Inactive</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td class="border-bottom-0">
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td class="border-bottom-0">
						    		<!-- <div class="img" style="background-image: url(images/product-1.png);"></div> -->
						    	</td>
						      <td class="border-bottom-0">
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      	</div>
						      </td>
						      <td class="border-bottom-0">Inactive</td>
						      <td class="border-bottom-0">
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
  <div class="modal fade" id="addComputerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <!-- <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div> -->
		      <div class="modal-body p-4 py-5 p-md-5">
		    		<h3 class="text-center mb-3">Add Computer Shop</h3>
					
					<div class="form-group mb-2">
		      			<label for="name">ComputerShop Name</label>
		      			<input name="username" id="shopName" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Contact Number</label>
		      			<input name="username" id="username" type="text" class="form-control">
		      		</div> 
					<div class="form-group mb-2">
		      			<label for="name">Email Address</label>
		      			<input name="username" id="username" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Address</label>
		      			<input name="username" id="username" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Latitude</label>
		      			<input type="text" id="lat" name="lat" placeholder="Your lat.." class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">Longtitude</label>
		      			<input type="text" id="lng" name="lng" placeholder="Your lng.." class="form-control">
		      		</div>
					<div>		
		      </div>
			  <div class="geocoder">
							<div id="geocoder" ></div>
						</div>
						<div id="map"></div>
					</div>
		    </div>
		  </div>
		</div>

	</body>


</html>


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
                alert("aaaaa");
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
