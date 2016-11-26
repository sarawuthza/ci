<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:25
 */
class Home extends CI_Controller
{
    public function index() {
        echo "Hello soda";
    }

    public function x($name = "DJ soda", $lastname = "eiei")
    {
        echo "My name ".$name ."  ".$lastname;
    }

    public function calculator($x = 2, $y = 4)
    {
        echo $x + $y;
    }

}