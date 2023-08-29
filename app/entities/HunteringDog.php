<?php

namespace App\Entities;

use App\Interfaces\LoudDogInterface;
use App\Interfaces\HunterDogInterface;
use App\Entities\Dog;

use App\Helpers\Console;

class HunteringDog extends Dog implements LoudDogInterface, HunterDogInterface {
    public $sound;

	public function __construct($name, $sound) {
		parent::__construct($name);
        $this->sound = $sound;
	}
	
	public function makeSound() {
		Console::output("$this->sound");
	}
	
	public function doHunting() {
		Console::output("$this->name has catched someone!");
	}
}