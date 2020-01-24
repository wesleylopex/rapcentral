 var map;
      function initMap() {

    var cecomatec = {lat: -29.2204562, lng: -51.3359362};

      map = new google.maps.Map(document.getElementById('map'), {
        center: cecomatec, 
        zoom: 17,
        zoomControl: true,
		    mapTypeControl: true,
		    scaleControl: false,
		    streetViewControl: false,
		    rotateControl: true,
		    fullscreenControl: false,
  
        });

        var marker = new google.maps.Marker({
          position: cecomatec,
          map: map
        });

      }