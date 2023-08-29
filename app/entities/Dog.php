<?php

namespace App\Entities;

class Dog {
	public $name;
	
	public function __construct($name) {
		$this->name = $name;
	}
	
	public function getName() {
		return $this->name;
	}
}