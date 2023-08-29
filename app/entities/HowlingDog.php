<?php

namespace App\Entities;

use App\Interfaces\LoudDogInterface;
use App\Entities\Dog;

use App\Helpers\Console;

class HowlingDog extends Dog implements LoudDogInterface {
    public $sound;

	public function __construct($name, $sound) {
		parent::__construct($name);
        $this->sound = $sound;
	}
	
	public function makeSound() {
		Console::output("$this->sound");
	}
}