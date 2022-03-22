<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
 	<link rel="stylesheet" href="../assets/css/ionicons.min.css">

	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../assets/admin/vendor/jquery/jquery.min.js"></script>
  	<script src="../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  	<script src="../assets/js/adminlist.js"></script>
  	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />
	<link rel="stylesheet" href="../assets/css/register.css">

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
            <li class="logo"><a href="#">FindN</a></li>
            </li>
            <li class="item button secondary"><a href="#">Log out</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    	</nav>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-left mb-6">
					<h2 class="heading-section">Computer shop admin list</h2>
				</div>
        		<div class="col-md-3 text-right mb-4">
        			<button type="button" class="btn mb-2 mb-md-0 btn-primary btn-block" data-target="#exampleModalCenter" data-toggle="modal">Add Admin</button>
				</div>
			</div>
      		<br>
			<div class="row">
      			<div class="col-md-3 cold-xs-1">
        			<h3 class="h5 mb-4 text-center"></h3>
        			<div class="card" style="width: 18rem;">
          				<div class="card-body">
						  <?php foreach ($compDetails as $s) {?>  
            				<h5 class="card-title" ><?php echo $s->shop_name;?></h5>
            				<p class="card-text" id="CompShopPK"><?php echo $s->shop_id;?></p>
					
          				</div>
          				<ul class="list-group list-group-flush">
            				<li class="list-group-item">ContactNumber: <p><?php echo $s->contact_number;?></p></li>
              				<li class="list-group-item">Adress: <p><?php echo $s->address;?></p></li>
						</ul>
          				<div class="card-body">
						  <div class="form-group mb-2">
						  <button type="button" class="editbtn btn mb-2 mb-md-0 btn-primary btn-block" data-target="#updateComputerModal" data-toggle="modal">Edit Details</button>
	              		  </div>
          				</div>
        			</div>
					<?php } ?>
      			</div>
				<div class="col-md-9 col-xs-1">
					<h3 class="h5 mb-4 text-center"></h3>
					<div class="table-wrap">
						<table class="table">
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
						  <?php foreach($adminDetails as $aD){ ?>
							<tr class="alert" role="alert">
							<td>
								<label class="checkbox-wrap checkbox-primary">
									<input type="checkbox">
									  <span span class="checkmark"></span>
								</label>
							</td>
							<td><?php echo $aD->user_id ?></td>
							<td>
								  <div class="email">
									  <span><?php echo $aD->firstname?> <?php echo $aD->lastname?></span>
						      		</div>
						      	</td>
						      	<td><?php echo $aD->email ?></td>
						      	<td>
								  <div style="display:flex;justify-content:space-around;align-items:center;">
										<button type="button" class="view-admin" data="<?php echo $s->shop_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa fa-eye"></i></span>
										</button>
										<button type="button" class="remove-admin" data="<?php echo $s->shop_id;?>" style="padding: 0;background-color: transparent;border: 0;appearance: none;">
												<span aria-hidden="true"><i class="fa-pencil-square-o"></i></span>
										</button>
								   </div>
				        		</td>
						    </tr>
						<?php } ?>  
						  </tbody>
						</table>
					</div>
				</div>
        
			</div>
		</div>
	</section>
<div id="updateComputerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  <h3 class="text-center mb-3">Update Computer Shop</h3>
      </div>
      <div class="modal-body">
	  	<form id="updatecompform" class="" name="updatecompform">
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
		      			<input name="emailadd" id="emailadd" type="text" class="form-control">
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
					 	<button type="button" id="close-updatebtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3"  readonly="readonly">
		        		</button>
	              	</div>
                	<div class="form-group mb-2">
					  <input value="Add" class="form-control btn btn-primary rounded submit px-3" id="updatecomputershopbtn" readonly="readonly">
	              	</div>
              	</div>
			  </form>
      </div>
    </div>
  </div>
</div>
<!-- <form id="addadminform" class="form" name="addadminform"> -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-body p-4 py-5 p-md-5">
		      	<h3 class="text-center mb-3">Add admin</h3>
		      	<form id="addadminform" class="" name="addadminform">
		      		<div class="form-group mb-2">
		      			<label for="name">Username</label>
		      			<input name="username" id="username" type="text" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Last Name</label>
		      			<input name="last" id="last" type="text" class="form-control">
		      		</div>
					<div class="form-group mb-2">
		      			<label for="name">First Name</label>
		      			<input name="first" id="first" type="text" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Email</label>
		      			<input name="email" id="email" type="email" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Phone number</label>
		      			<input name="pnum" id="pnum" type="text" class="form-control">
		      		</div>
					  <div class="form-group mb-2">
		      			<label for="name">Birthdate</label>
		      			<input name="date" id="date" type="date" class="form-control">
		      		</div>
				<div class="form-group mb-2">
                <label for="vacstatus">Vacination Status</label>
	              <select name="vacstatus" class="form-control mb-2 form-select-lg mb-3 form-select" aria-label="Default select example">
                  <option value="">Pick...</option>
				  <option value="1st Dose">1st Dose</option>
                  <option value="2nd Dose">2nd Dose</option>
                  </select>
              	</div>	  
				<div class="form-group mb-2">
                <label for="gender">Gender</label>
	              <select name="gender" class="form-control mb-2 form-select-lg mb-3 form-select" aria-label="Default select example">
				  <option value="">Choose. . .</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
              	</div>
				<div class="form-group mb-2">
			  <div class="form-group mb-2">
		      		<label for="name">Password</label>
		      		<input name="pass" id="pass" type="password" class="form-control">
		      	</div>
				  <div class="form-group mb-2">
		      		<label for="name">Repeat Password</label>
		      		<input name="conpass" id="conpass" type="password" class="form-control">
		      	</div>
              <div class="modal-footer">
                <div class="form-group mb-2">
	            	  <!-- <button  class="close-btn form-control btn btn-primary rounded px-3">Cancel</button> -->
					  <!-- <input value="Cancel" class="form-control btn btn-primary rounded px-3" id="close-btn" readonly="readonly"> -->
					 	<button type="button" id="closebtn" class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
						 <input value="Cancel" class="form-control btn btn-primary rounded px-3" id="close-btn" readonly="readonly">
		        		</button>
	              </div>
                <div class="form-group mb-2">
	            	  <!-- <button input="" id="addadminbtn" class="form-control btn btn-primary rounded submit px-3">Add</button> -->
					  <input value="Add" class="form-control btn btn-primary rounded submit px-3" id="addadminbtn" readonly="readonly">
	              </div>
              </div>
	            
	            <!-- <div class="form-group d-md-flex">
								<div class="w-100 text-center">
									<a href="#" class="forgot">I'm already a member</a>
								</div>
	            </div> -->
	          </form>
		      </div>
		    </div>
		  </div>
		</div>
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
	</body>
</html>

