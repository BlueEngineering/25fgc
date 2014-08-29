<?PHP
 /**
  * Class for nodes which represent the locations
  *
  * @author			Tim Jaap <tim.jaap@mailbox.tu-berlin.de>
  * @version		0.1 (beta)
  * @last change	2014-08-29
  **/
  
class node {
	// class attributes
	protected var name;						// name of place/node
	protected var description;				// small description with details
	protected var latitude;					// latitude of this place
	protected var longitude;					// longitude of this place
	protected var mapImage;					// filename of map image
	protected var minCorrectAnswer;			// numbers of correct answers to unlock code request
	protected var code;						// unlock code to unlock next stage
	
	
	// constructor
	
	
	// ----- class methods -----
	// setter methods
	/**
	 * set method
	 **/
	public function setDescription() {
	}
	
	/**
	 * set method
	 **/
	public function setLatitude() {
	}
	
	/**
	 * set method
	 **/
	public function setLongitude() {
	}
	
	/**
	 * set method
	 **/
	public function setMapImage() {
	}
	
	/**
	 * set method
	 **/
	public function setMinCorrectAnwser() {
	}
	
	/**
	 * set method
	 **/
	public function setCode() {
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
	public calculateDistanceBetweenNodes($nodeA, $nodeB) {
	}
	
	/**
	 * method to locate the nearest geocaching place from current position
	 *
	 **/
	public function nearestPlaceToMyPosition($currentLatitude, $currentLongitude) {
	}
}
?>