<!DOCTYPE html>
<html>
 <head>
  <title>25 Fragen Geo-Caching Web-App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
 </head>

 <body>
  <div data-role="page" id="infoPage" data-theme="b">

   <!-- Application header section -->
    <div data-role="header" data-position="fixed" data-theme="b">
     <h1>25 Fragen Geo-Caching Web-App</h1>
    </div>
   <!-- Application header section -->

   <!-- Application content section -->
    <div data-role="content" id="content">
	 <p>
	  Test der W3C Geolocation API
	 </p>
	 
	 <p>
	  Die API ermittelt die aktuelle Position in Breiten- und L&auml;ngengraden und gibt diese entsprechend aus. Bei dieser API handelt es sich um eine Funktion des Webbrowsers. Stellt dieser diese nicht zur Verf&uuml;gung,
	  wird eine entsprechende Fehlerbehandlung erwartet, welche im folgenden Script auch stattfinden sollte. Die Genauigkeit der Positionsbestimmung h&auml;ngt dabei von der zur Ermittlung der Position genutzten Technik ab.
	  Mobilger&auml;te mit einem GPS-Sensor erzielen dabei, je nach verwendeten Sensor, eine h&ouml;here Genauigkeit, da f&uuml;r die Standortbestimmung eines Desktoprechners anhand der Netzwerkdaten stattfindet und diese
	  f&uuml;r ein gr&ouml;&szlig;eren Gebietsbereich vorgegeben sind.
	 </p>
	 
	 <p>
	  Das ermitteln der aktuellen Position dauert einen kurzen Augenblick.
	 </p>
	 
	 <p>
	  <span id="ausgabe"></span>
	 </p>
	 
	 <script type="text/javascript">
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
	 </script>   
    </div>
   <!-- Application content section -->

   <!-- Application footer section -->
    <div data-role="footer" data-position="fixed" data-id="persFooter">
     <div data-role="navbar">
      <ul>
       <li><a href="index.php" data-icon="home">Home</a></li>
       <li><a href="index.php" data-icon="info">Info</a></li>
      </ul>
     </div>
    </div>
   <!-- Application footer section -->

  </div>
 </body>
</html>