<?php
use \PHPUnit\Framework\TestCase;
use App\Helpers\AdditionalFunctions;

class AvailableDogsTest extends TestCase
{
    public function testKeys() {
        $dogs = [
            "siba-inu" => "",
            "dachshund" => "",
            "mops" => "",
        ];
        $this->assertEquals("siba-inu, dachshund, mops", AdditionalFunctions::availableDogs($dogs));
    }

}
