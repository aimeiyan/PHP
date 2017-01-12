<?php
date_default_timezone_set("PRC");

/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/24/2016
 * Time: 3:09 PM
 * Function:创建类和实例化对象
 */
class NbaPlayer
{
    public $name = "Jordan";
    public $height = "198cm";
    public $weight = "98kg";
    public $team = "Bull";
    public $playerNumber = "23";

    public function run()
    {
        echo "Running\n";
    }

    public function jump()
    {
        echo "Jumping\n";
    }

    public function dribble()
    {
        echo "Dribbling\n";
    }

    public function shoot()
    {
        echo "Shooting\n";
    }

    public function dunk()
    {
        echo "Dunking\n";
    }

    public function pass()
    {
        echo "Passing\n";
    }
}

$jordan = new NbaPlayer();
echo $jordan->name;
echo "<br>";
$jordan->dribble();
$jordan->pass();
