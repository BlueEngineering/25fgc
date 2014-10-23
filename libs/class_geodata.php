<?php
/**
 * Class for geodatas
 *
 * @author			Tim Jaap <tim.jaap@mailbox.tu-berlin.de>
 * @version		0.1 (beta) / last edit: 2014-10-23
 **/

class geodata {
	// ----- class attributes -----
	protected	$longitude;				// Longitude value
	protected	$langitude;				// Langitude value
	protected	$altitude;				// Altitude (= above sea level) value
	
	// ----- constructor -----
	/**
	 * Method to create a geodata object
	 *
	 * @param	$initLongitude
	 * @param	$initLangitude
	 * @param	$initAltitude
	 **/
	public function __construct ( $initLongitude, $initLangitude, $initAltitude ) {
		$this->longitude	= $initLongitude;
		$this->langitude	= $initLangitude;
		$this->altitude		= $initAltitude;
	}
	
	// ----- class methods -----
}
?>