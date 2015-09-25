var mapObj;

function initProps() {
	$("#googleMap").width($(window).width()-2);
	$("#googleMap").height($(window).height()-32);
	
	$(window).resize(function() {
		$("#googleMap").width($(this).width()-2);
		$("#googleMap").height($(this).height()-32);
	});
}

function initialize() {
	
	var mapProp = {
			center: new google.maps.LatLng(51.508742,-0.120850),
			zoom: 5,
			mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	mapObj = new google.maps.Map( 
			document.getElementById("googleMap"), 
			mapProp 
	);
	
	initProps();
	
	mapObj.addListener('click', function(event) {
		addLocation(event.latLng, "Some Place", this);
		//getLocation(event.latLng);
	});
	getUserLocation();
}

function addLocation(locationCoords, labelText, map) {
	
	var marker = new google.maps.Marker({
		position: locationCoords,
		label: labelText, 
		map: map
	});
	
}

function getLocation(locationCoords) {
	return locationCoords;
}

function getUserLocation() {
	
	var infoWindow = new google.maps.InfoWindow({map: mapObj});
	
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
			};
			infoWindow.setPosition(pos);
			infoWindow.setContent('You are here');
			mapObj.setCenter(pos);
		}, function() {
			handleLocationError(true, infoWindow, map.getCenter());
		});
	} else {
		handleLocationError(false, infoWindow, map.getCenter());
	}
}

function handleLocationError(browserHasGeoLocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent(browserHasGeoLocation ? 'Error: The Geolocation service failed.' : 'Error: Your browser doesn\'t suport geolocation.');
}