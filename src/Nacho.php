<?php
/**
 * Created by PhpStorm.
 * User: jkobie
 * Date: 10/13/16
 * Time: 10:44 AM
 */
namespace Acme;

class Nacho
{

    public function __construct()
    {
        echo "hello, i am a Nacho.\n";
    }

    public function hasCheese($bool = true)
    {
        return $bool;
    }

}