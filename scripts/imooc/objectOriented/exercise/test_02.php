<?php
header("content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");

/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/24/2016
 * Time: 3:09 PM
 * Function:构造函数
 */
class NbaPlayer
{
    public $name = "Jordan";
    public $height = "198cm";
    public $weight = "98kg";
    public $team = "Bull";
    public $playerNumber = "23";

    function __construct($name, $height, $weight, $team, $playerNumber)
    {
        echo "执行构造函数<br>";
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        $this->team = $team;
        $this->playerNumber = $playerNumber;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        print "Destroying".$this->name."<br>";
    }

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

$jordan = new NbaPlayer("Jordan", "198cm", "98kg", "Bull", "23");
echo $jordan->name;
echo "<br>";
$jordan->dribble();
$jordan->pass();
echo "<br>";
echo "<br>";
echo "<br>";
$james=new NbaPlayer("James","203cm","120kg","Heat","6");
echo $james->name."<br>";
$james=null;
echo "From now on James will not be used anymore.<br>";
