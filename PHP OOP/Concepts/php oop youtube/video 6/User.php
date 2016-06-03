<?php

class User{
	
	protected $db;
	function __construct(Database $db) {
		$this->db = $db;
	}
	
	function create(array $data) {
		
		$this->db->query('INSERT INTO "User" ... ');
		
	}
}