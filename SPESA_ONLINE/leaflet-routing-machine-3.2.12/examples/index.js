//abbiamo creato una mappa nel 'map' div, impostando le coordinate e lo zoom
var map = L.map('map').setView([42.0239700,14.2585400],12);


//aggiunta delle mappa a tasselli da openstreetmap
L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


// geolocalizzazione con api html5
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
  } else { 
		x.innerHTML = "La geolocalizzazione non è supportata da questo browser.";
  }
}

function showPosition(position) {
//   x.innerHTML = "Latitude: " + position.coords.latitude + 
//   "<br>Longitude: " + position.coords.longitude;
  

  var lat = position.coords.latitude;
  var lon = position.coords.longitude;

// ------------------------------------------------------------------------
// controllo di routing (box) --> aggiungiamo alla mappa un controllo di routing con waypoints iniziale di controllo
	var control = L.Routing.control({

		waypoints: [
			L.latLng(lat,lon), //latititudine e longitudine del commerciante
			L.latLng() // inserire indirizzo da tastiera del cliente
			
		],
	
		//processo di geocodifica utilizzando nominatim per rispondere alla query di geocodifica
		geocoder: L.Control.Geocoder.nominatim(),
		routeWhileDragging: true,
		reverseWaypoints: true,
		showAlternatives: true,
		altLineOptions: {
			styles: [
				{color: 'yellow', opacity: 0.15, weight: 9},
				{color: 'red', opacity: 0.8, weight: 6},
				{color: 'green', opacity: 0.5, weight: 2}
			]
		}
	}).addTo(map);
	
	
	L.Routing.errorControl(control).addTo(map);


//marker con coordinate del commerciante restituite dalla funzione getLocation() 
L.marker([lat, lon]).addTo(map)
    .bindPopup('IL MIO NEGOZIO!')
	.openPopup();

}


function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "L'utente ha rifiutato la richiesta di geolocalizzazione.";
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Le informazioni sulla posizione non sono disponibili.";
      break;
    case error.TIMEOUT:
      x.innerHTML = "La richiesta di ottenere la posizione dell'utente è scaduta.";
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "Si è verificato un errore sconosciuto.";
      break;
  }
}

//funzione del bottone "localizza" richiamata in areacommercianteprivata 
function buttonClick(){
	var x = document.getElementById("loc");
	getLocation();
	if (x.style.display === "none") {	
	  x.style.display = "block";
	} else {
	  x.style.display = "none";
	}
		

	

	
}