<?php
 
use Balavec\Nacho\Nacho;
 
class NachoTest extends PHPUnit_Framework_TestCase {
 
  public function testNachoHasCheese()
  {
    $nacho = new Nacho;
    $this->assertTrue($nacho->hasCheese());
  }

  public function testHowMuchCheese()
  {
    $nacho = new Nacho;
    $this->assertEquals(100,$nacho->howMuchCheese());
  }
 
}