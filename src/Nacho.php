<?php
/**
 * Created by PhpStorm.
 * User: jkobie
 * Date: 10/13/16
 * Time: 10:44 AM
 */
namespace Jkobie\Nacho;

class Nacho
{

    public function __construct()
    {
        echo "hello, i am a Nacho.";
    }

    public function hasCheese($bool = true)
    {
        return $bool;
    }

}