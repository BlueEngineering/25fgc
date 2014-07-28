// JavaScript

/**
 * function to check out your geoposition with W3C Geolocation API
 *
 *
 **/
function myCurrentPosition() {
	if (navigator.geolocation) {
		var options = {
			enableHighAccuracy: true,
		}
		navigator.geolocation.getCurrentPosition(showPosition, showError, options);	
	} else {
		document.getElementById('ausgabe').innerHTML = ('Ihr Browser unterstuetzt W3C Geolocation API nicht.');
	}		
	
	function showPosition(position) {
		document.getElementById('ausgabe').innerHTML = ('Die Geoposition dieses Ger&auml;ts ist (Stand: ' + new Date(position.timestamp).toLocaleTimeString() + '):<br />'+
			'Breitengrad: ' + position.coords.latitude + ' Grad <br />'+
			'L&auml;ngengrad: ' + position.coords.longitude + ' Grad <br />'+
			'Genauigkeit: ' + position.coords.accuracy + 'm<br />' +
			(position.coords.altitude ? ('H' + position.coords.altitude + 'm<br />' + '  Genauigkeit: ' + position.coords.altitudeAccuracy + 'm') : ""));
    }
	
	function showError(error) {
		switch(error.code) {
			case error.PERMISSION_DENIED:
				document.getElementById('ausgabe').innerHTML = ('Sie haben die Abfrage ihrer Geoposition untersagt.');
				break;
			case error.POSITION_UNAVAILABLE:
				document.getElementById('ausgabe').innerHTML = ('Es sind keine Geopositionsdaten verfuegbar');
				break;
			case error.TIMEOUT:
				document.getElementById('ausgabe').innerHTML = ('Das Timeout fuer Ortsanfrage wurde ueberschritten.');
				break;
			default:
				document.getElementById('ausgabe').innerHTML = ('Es ist ein unbekannter Fehler aufgetreten (#' + error.code + ': ' + error.message + ')');
				break;
		}
	}
  }