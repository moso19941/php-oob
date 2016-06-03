<?php
class Person {
	
	// variables
	public $name;
	public $age;
	
	// construct -- > magic method
	function __construct($name, $age) {
		//echo 'constructed <br>';
		
		$this->name = $name;
		$this->age = $age;
	}
	
	// create method
	public function sentence() {
		return $this->name . ' is ' . $this->age . ' years old <br>';
	}
}