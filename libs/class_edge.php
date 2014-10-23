<?php
/**
 * Class for edges which represent the pathes between locations (=nodes)
 *
 * @author		Tim Jaap <tim.jaap@mailbox.tu-berlin.de>
 * @version		0.1 (beta) / last edit: 2014-10-23
 **/
  
class edge {
	// ----- class attributes -----
	protected	$endnode;			// endnode of edge
	protected	$distance;			// distance between start- and endnode
	
	// ----- constructor -----
	public function __construct ( $initEndnode, $initDistance ) {
		$this->endnode	= $initEndnode;
		$this->distance	= $initDistance;
	}
	
	// ----- class methods -----
	// getter methods
	/**
	 * get the endnode of this edge
	 *
	 * @return	$endnode
	 **/
	public function getEndnode () {
		return $this->endnode;
	}
	
	/**
	 * get the distance of this edge
	 **/
	public function getDistance () {
		return $this->distance;
	}
}
?>