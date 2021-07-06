var map;
var geocoder;
function loadMap() {
	var pune = {lat: 41.054749, lng: 28.999018};
	map = new google.maps.Map(document.getElementById('map'), {
		zoom: 12,
		center: pune
	});

	var marker = new google.maps.Marker({
		position: pune,
		map: map
	});

	var cdata = JSON.parse(document.getElementById('data').innerHTML);
	geocoder = new google.maps.Geocoder();  
	codeAddress(cdata);

}

function codeAddress(cdata) {
	Array.prototype.forEach.call(cdata, function(data){
		var address = data.eposta + ' ' + data.adres;
		console.log(data);
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == 'OK') {
				map.setCenter(results[0].geometry.location);
				alert(results[0].geometry.location);
			} else {
				alert('Geocode was not successful for the following reason: ' + status);
			}
		});
	});
}

