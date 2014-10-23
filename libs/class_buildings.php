<?php
/**
 * Class for TUB buildings
 *
 * @author			Tim Jaap <tim.jaap@mailbox.tu-berlin.de>
 * @version		0.1 (beta) / last edit: 2014-10-23
 **/
//
class buildings {
	// ----- class attributes -----
	protected	$name;					// name of building
	protected	$geodata;				// a geodata object to locate this building
	
	// ----- constructor -----
	public function __construct ( $initName, $initLongitude, $initLangitude ) {
		$this->name		= $initName;
		$this->geodata	= new geodata( $initLongitude, $initLangitude, '0' );
	}
	
	// ----- class methods -----
	// getter methods
	
}
?>