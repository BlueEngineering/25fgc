<?php
/**
 * Class for nodes which represent the locations
 *
 * @author			Tim Jaap <tim.jaap@mailbox.tu-berlin.de>
 * @version		0.1 (beta) / last edit: 2014-10-23
 **/
  
class node {
	// ----- class attributes -----
	protected	$name;						// name of place/node
	protected	$edgeList;					// list of all with this node adjacent nodes
	protected	$geodata;					// geodata object with informations about latitude and longitude
	protected	$description;				// small description with details
	protected	$mapImage;					// filename of map image
	protected	$placeNotice;				// short text with notice for searched place
	protected	$minCorrectAnswer;			// numbers of correct answers to unlock code request
	protected	$questionList;				// list of all question objects of this node
	protected	$code;						// unlock code to unlock next stage
	
	
	// ----- constructor -----
	/**
	 * Method to create a node object
	 *
	 * @param $initName 
	 * @param $initEdgeList
	 * @param $initGeodataLongitude
	 * @param $initGeoDataLangitude
	 * @param $initDescription
	 * @param $initMapImage
	 * @param $initPlaceNotice
	 * @param $initMinCorrectAnswer
	 * @param $initQuestionList
	 * @param $initCode
	 **/
	public function __construct ( $initName, $initGeodataLongitude, $initGeoDataLangitude, $initDescription, $initMapImage, $initPlaceNotice, $initMinCorrectAnswer, $initCode ) {
		$this->name					= $initName;
		$this->edgeList				= array();
		$this->geodata				= new geodata( $initGeodataLongitude, $initGeoDataLangitude, '0' );
		$this->description			= $initDescription;
		$this->mapImage				= $initMapImage;
		$this->placeNotice			= $initPlaceNotice;
		$this->minCorrectAnswer		= $initMinCorrectAnswer;
		$this->questionList			= array();
		$this->code					= $initCode;
	}
	
	// ----- class methods -----
	// setter methods
	public function setEdgeList( $linkedEdge ) {
		array_push( $this->edgeList, $linkedEdge );
	}
	
	// getter methods
	/**
	 * get method
	 **/
	public function getName() {
	}
	
	/**
	 * get method
	 **/
	public function getDescription() {
	}
	
	/**
	 * get method
	 **/
	public function getLatitude() {
	}
	
	/**
	 * get method
	 **/
	public function getLongitude() {
	}
	
	/**
	 * get method
	 **/
	public function getMapImage() {
	}
	
	/**
	 * get method
	 **/
	public function getMinCorrectAnwser() {
	}
	
	/**
	 * get method
	 **/
	public function getCode() {
	}
	
	
	// other methods
	/**
	 * method
	 **/
	public function calculateDistanceBetweenNodes($nodeA, $nodeB) {
	}
	
	/**
	 * method to locate the nearest geocaching place from current position
	 *
	 **/
	public function nearestPlaceToMyPosition($currentLatitude, $currentLongitude) {
	}
}
?>