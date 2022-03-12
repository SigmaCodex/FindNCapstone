<!DOCTYPE html>
<html>
<head>
	<title>View Map</title>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>  
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet'/>
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
        bottom: 30%;
  	    
        width: 100%;
        height: 85vh;
     
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
        center: [123.89631512119513, 10.297400535503103],
        zoom: 15.5,
        pitch: 45,
        bearing: -17.6,
        container: 'map',
        antialias: true
});


var geojson = {
  type: 'FeatureCollection',
  features: [{
    type: 'Feature',
    geometry: {
      coordinates: [123.8976816, 10.2981602]
    },
    properties: {
      title: 'G7',
      description: '<strong>G-7 CyberCafe Cebu, Cebu City.</strong><p><a data-toggle="modal" data-target="#Modal1" compID="2" class="btn btn-primary btn-sm select_compshop" value="2" target="_blank">View</a> <br> We are open to serve you!G-7 UrgelloAddress: G/F JKR Ladies Dormitory, A. Tormis St., Sambag II, Urgello, Cebu CityOperating hours : 8am - 9pmG-7 P.Del RosarioAddress: P.Del Rosario St., Cebu City (beside Palawan Pawnshop)Operating hours : 8am - 9pm</p>'
    }
  },


  {
    type: 'Feature',
    geometry: {
      coordinates: [123.898581319924, 10.297919]
    },
    properties: {
      title: 'Tnc Computer Shop',
      description: '<strong>TNC Cyber Cafe Cebu, Cebu City.</strong><p><a data-toggle="modal" data-target="#Modal1"  compID="5" class="btn btn-primary btn-sm select_compshop" target="_blank">View</a> <br> We are open to serve you!G-7 UrgelloAddress: G/F JKR Ladies Dormitory, A. Tormis St., Sambag II, Urgello, Cebu CityOperating hours : 8am - 9pmG-7 P.Del RosarioAddress: P.Del Rosario St., Cebu City (beside Palawan Pawnshop)Operating hours : 8am - 9pm</p>'
    }
  },

   {
    type: 'Feature',
    geometry: {
      coordinates: [123.8965304,10.2974556]
    },
    properties: {
      title: 'Live Wire',
      description: '<strong>Live Wire.</strong><p><a data-toggle="modal" data-target="#Modal1"  compID="3" class="btn btn-primary btn-sm select_compshop" target="_blank">View</a> <br> We are open to serve you!G-7 UrgelloAddress: G/F JKR Ladies Dormitory, A. Tormis St., Sambag II, Urgello, Cebu CityOperating hours : 8am - 9pmG-7 P.Del RosarioAddress: P.Del Rosario St., Cebu City (beside Palawan Pawnshop)Operating hours : 8am - 9pm</p>'
    }
  },

   {
    type: 'Feature',
    geometry: {
      coordinates: [123.89575304,10.2974556]
    },
    properties: {
      title: 'Net Express',
      description: '<strong>Net Express Cebu City.</strong><p><a data-toggle="modal" data-target="#Modal1"  compID="4" class="btn btn-primary btn-sm select_compshop" target="_blank">View</a> <br> We are open to serve you!G-7 UrgelloAddress: G/F JKR Ladies Dormitory, A. Tormis St., Sambag II, Urgello, Cebu CityOperating hours : 8am - 9pmG-7 P.Del RosarioAddress: P.Del Rosario St., Cebu City (beside Palawan Pawnshop)Operating hours : 8am - 9pm</p>'
    }
  },



  {
    type: 'Feature',
    geometry: {
      coordinates: [123.8978914, 10.2981602]
    },
    properties: {
      title: 'Voyager',
      description: '<strong>Voyager Branch1, Cebu City.</strong><p><a data-toggle="modal" data-target="#Modal1"  compID="1" class="btn btn-primary btn-sm select_compshop" target="_blank">View</a> <br> We are open to serve you!G-7 UrgelloAddress: G/F JKR Ladies Dormitory, A. Tormis St., Sambag II, Urgello, Cebu CityOperating hours : 8am - 9pmG-7 P.Del RosarioAddress: P.Del Rosario St., Cebu City (beside Palawan Pawnshop)Operating hours : 8am - 9pm</p>'
    }
  }

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