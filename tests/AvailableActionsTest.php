<?php
use \PHPUnit\Framework\TestCase;
use App\Helpers\AdditionalFunctions;

class AvailableActionsTest extends TestCase
{
    public function testKeys() {
        $actions = [
            "hunt" => "doHunting", 
            "sound" => "makeSound",
        ];
        $this->assertEquals("hunt, sound", AdditionalFunctions::availableActions($actions));
    }

}
