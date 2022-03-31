<!DOCTYPE html>
<html>
<head>
	<title>View Map</title>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>  
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
</head>


<style>
     *{
     	margin: 0;
     	padding: 0;
     	box-sizing: border-box;

     }	
      body {
       	background-color: #EFEFEF;
      }

      .containermap{

     	background-color: blue;
      	 z-index: 1000;
      	 width: 50%;
      }

      #map {
        position: absolute;
        top: 0%;
        left: 0%;
        right: 0%;
       /* translate:transform (-50,-50);*/
       	margin: auto;
       top: 10%;
  	    
        width: 100%;
        height: 80%;
     
/*
        border-radius: 5%;
        border:none;*/
      }
	.marker {
	  background-image: url('assets/images/marker.png');

	  background-size: cover;
	  width: 50px;
	  height: 50px;
	  border-radius: 50%;
	  cursor: pointer;
	}
	.mapboxgl-popup {
  		max-width: 200px;
	}

	.mapboxgl-popup-content {
	  text-align: center;
	  font-family: 'Open Sans', sans-serif;
	}
    </style>

<body>
	
    <div class="row">
                <div class="containermap">
                    <div id='map'></div>
                </div>
    </div>

</body>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZG5rbzEzIiwiYSI6ImNrbWZxNWl5eDM3amcyeGp4cHRvN3pxdGgifQ.HM7QZISQcECRgm9aKAZysg';

var map = new mapboxgl.Map({
        style: 'mapbox://styles/mapbox/light-v10',
        center: [<?php echo "123.89631512119513";?>, 10.297400535503103],
        zoom: 15.5,
        pitch: 45,
        bearing: -17.6,
        container: 'map',
        antialias: true
});


var geojson = {
  type: 'FeatureCollection',
  features: [

//star of loop



<?php 
   $long = "123.898581319924";
  foreach ($listofshops as $s) {

  
    // $str_arr = explode (",", $s->coordinates); 
    // $newCoordinate = $str_arr[1].","$str_arr[0];
     $string = $s->coordinates;
     $str_arr = explode (",", $string);  
    //  $coor = .","print_r($str_arr[1]);
  echo "{
      type: 'Feature',
       geometry: {
        coordinates: [".$str_arr[1].",".$str_arr[0]."]
     },
      properties: {
        title: '".$s->shop_name."',
        description: '<strong>GameCity</strong><p><a href= ".'"viewShop/'.$s->shop_id.'"'."        class=".'"btn btn-primary"'.">Click</a></p>'
      }
     },";

    }
?>

  // {
  //   type: 'Feature',
  //   geometry: {
  //     coordinates: [123.898581319924, 10.297919]
  //   },
  //   properties: {
  //     title: 'Tnc Computer Shop',
  //     description: '<strong>TNC Cyber Cafe Cebu, Cebu City.</strong><br><a class="btn btn-primary btn-sm select_compshop" href="viewShop/7">View</a><p>We are open to serve you!<br>Address: P.Del Rosario St., Cebu City Operating hours : 8am - 9pm</p>'
  //   }
  // },

  // {
  //   type: 'Feature',
  //   geometry: {
  //     coordinates: [123.89735336183276, 10.295601483082422]
  //   },
  //   properties: {
  //     title: 'GameCity',
  //     description: '<strong>GameCity</strong><p><a class="btn btn-primary btn-sm select_compshop" href="viewShop/7">View</a> </p>'
  //   }
  // }

  //end of loop

  ]

};

// code from the next step will go here!

// add markers to map
geojson.features.forEach(function(marker) {

  // create a HTML element for each feature
  var el = document.createElement('div');
  el.className = 'marker';

  // make a marker for each feature and add to the map
  new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
    .addTo(map);
});

</script>
</html>