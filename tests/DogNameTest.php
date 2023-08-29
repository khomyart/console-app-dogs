<?php
use \PHPUnit\Framework\TestCase;
use App\Helpers\AdditionalFunctions;

class DogNameTest extends TestCase
{
    public function testString() {
        $inputString = "sibu ino one two action";
        $this->assertEquals("sibu ino one two", AdditionalFunctions::getDogName($inputString));

        $inputString = "mops doit";
        $this->assertEquals("mops", AdditionalFunctions::getDogName($inputString));
    }
}
