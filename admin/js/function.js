var map;
var marker;
var myCenter;
var Center;

function start() 
{
	var zoom;
	myCenter=new google.maps.LatLng(26.118780,-104.012454);

	var mapOptions = {    
		center: myCenter,
		zoom: 5,    
		mapTypeId: google.maps.MapTypeId.ROADMAP};
		map = new google.maps.Map(document.getElementById("right"),mapOptions);


		marker = new google.maps.Marker({
			map: map,
			draggable: true,
			animation: google.maps.Animation.BOUNCE,     
			position: {lat: 20.661250, lng: -103.352239}});

		var infowindow = new google.maps.InfoWindow({
			content:"Región Centro Occidente"
		});



		google.maps.event.addListener(marker,'click',function() {
			map.setZoom(13);
			map.setCenter(marker.getPosition());
		});

		infowindow.open(map,marker);
		marker.setMap(map);




		marker2 = new google.maps.Marker({
			map: map,
			draggable: true,
			animation: google.maps.Animation.BOUNCE,    

			position: {lat: 29.530492, lng: -109.190897}});

		var infowindow = new google.maps.InfoWindow({
			content:"Región Noroeste"
		});

		google.maps.event.addListener(marker2,'click',function() {
			map.setZoom(13);
			map.setCenter(marker2.getPosition());
		});

		infowindow.open(map,marker2);
		marker2.setMap(map);


		marker3 = new google.maps.Marker({
			map: map,
			draggable: true,
			animation: google.maps.Animation.BOUNCE,    

			position: {lat: 25.872378, lng: -100.390937}});

		var infowindow = new google.maps.InfoWindow({
			content:"Región Noreste"
		});


		google.maps.event.addListener(marker3,'click',function() {
			map.setZoom(13);
			map.setCenter(marker3.getPosition());
		});

		infowindow.open(map,marker3);
		marker3.setMap(map);

		
		marker4 = new google.maps.Marker({
			map: map,
			draggable: true,
			animation: google.maps.Animation.BOUNCE,    

			position: {lat:17.294792, lng: -100.788783}});

		var infowindow = new google.maps.InfoWindow({
			content:"Región Centro-Sur"
		});


		google.maps.event.addListener(marker4,'click',function() {
			map.setZoom(13);
			map.setCenter(marker4.getPosition());
		});

		infowindow.open(map,marker4);
		marker4.setMap(map);				

		marker5 = new google.maps.Marker({
			map: map,
			draggable: true,
			animation: google.maps.Animation.BOUNCE,    

			position: {lat: 19.539141, lng: -99.136443}});

		var infowindow = new google.maps.InfoWindow({
			content:"Región Metropolitana"
		});


		google.maps.event.addListener(marker5,'click',function() {
			map.setZoom(13);
			map.setCenter(marker5.getPosition());
		});

		infowindow.open(map,marker5);
		marker5.setMap(map);


		marker6 = new google.maps.Marker({
			map: map,
			draggable: true,
			animation: google.maps.Animation.BOUNCE	,    

			position: {lat: 17.364701, lng: -93.802355}});

		var infowindow = new google.maps.InfoWindow({
			content:"Región Sur-Sureste"
		});


		google.maps.event.addListener(marker6,'click',function() {
			map.setZoom(13);
			map.setCenter(marker6.getPosition());
		});

		infowindow.open(map,marker6);
		marker6.setMap(map);

		regions();	
		return map;		
	}


function around(lat, longi, Center) {
			myCenter=new google.maps.LatLng(lat, longi);
			var mapOptions = {    
			center: myCenter,
			zoom: Center,    
			mapTypeId: google.maps.MapTypeId.ROADMAP};	
			map1 = new google.maps.Map(document.getElementById("right"),mapOptions);
}

function icono (lat , longi) {
  var mapOptions = {
          center: new google.maps.LatLng(lat, longi),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("right"),
            mapOptions);
 
        var pos = new google.maps.LatLng(lat, longi);
 
        var marker = new google.maps.Marker({
            position: pos,
            map: map,
            animation: google.maps.Animation.DROP
        }); 

        
 
      
}

function circle (tam, lat,longi,mensaje,yu) {
	var mapOptions = {
          center: new google.maps.LatLng(lat, longi),
          zoom: yu,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("right"),
            mapOptions);
 
        var pos = new google.maps.LatLng(lat, longi);

         var marker = new google.maps.Marker({
            position: pos,
            map: map,
            animation: google.maps.Animation.DROP
        }); 


		var myCity = new google.maps.Circle({
		    center: pos,
		    radius: tam,
		    strokeColor: "#B40404",
		    strokeOpacity: 0.9,
		    fillColor: "#B40404",
		    fillOpacity: 0.3
		  });
		  myCity.setMap(map);
		
		var infowindow = new google.maps.InfoWindow({
					content:mensaje,});
					
		infowindow.open(map,marker);
	
}




