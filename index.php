<!DOCTYPE html>
<html>
 <head>
  <title>25 Fragen Geocaching Web-App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
  <!--script src="scripts/tfqgc.js"></script-->
 </head>

 <body>
  <div data-role="page" id="infoPage" data-theme="b">

   <!-- Application header section -->
    <div data-role="header" data-position="fixed" data-theme="b">
     <h1>25 Fragen Geocaching Web-App</h1>
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
	  <span id="ausgabe" onclick="myCurrentPosition()">Test mit Funktion<br /></span>
	 </p>
	 
	 <p>
	  <div data-role="controlgroup" data-type="horizontal">
	   <a data-role="button" href="index.php" data-transition="slide">Standardroute starten</a>
	   <!--a data-role="button" href="info.php" data-transition="slide">Individuelle Route starten</a-->
	  </div>
	 </p>
	 
    </div>
   <!-- Application content section -->

   <!-- Application footer section -->
    <div data-role="footer" data-position="fixed" data-id="persFooter" data-theme="b">
     <div data-role="navbar">
      <ul>
       <li><a href="index.php" data-icon="home" data-transition="slide">Home</a></li>
       <li><a href="anleitung.php" data-icon="info" data-transition="slide">Anleitung</a></li>
       <li><a href="info.php" data-icon="info" data-transition="slide">Infos</a></li>
       <li><a href="impress.php" data-icon="alert" data-transition="slide">Impressum</a></li>
      </ul>
     </div>
    </div>
   <!-- Application footer section -->

  </div>
 </body>
</html>
