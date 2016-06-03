<?php

// public 
// private --> only in the class can access them & sub-class CAN'T access them
// proctected --> sub-class can access them


class Bird{
	
	protected  $canFly;
	private $legCount;
	
	public function __construct($canFly, $legCount){
		$this->canFly = $canFly;
		$this->legCount = $legCount;
	}
	
	public function canFly(){
		return $this->canFly;
	}
	
	public function getLegCount(){
		return $this->legCount;
	}
	
}