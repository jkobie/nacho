<?php
/**
 * Created by PhpStorm.
 * User: jkobie
 * Date: 10/13/16
 * Time: 10:47 AM
 */

use Jkobie\Nacho\Nacho;

class NachoTest extends PHPUnit_Framework_TestCase
{

    public function testNachHasCheese()
    {
        $nacho = new Nacho;
        $this->assertTrue($nacho->hasCheese());
    }

}