<?php

date_default_timezone_set("PRC");

class Human
{
    public $name;
    public $height;
    public $weight;

    public function eat($food)
    {
        echo $this->name . "'s eating '" . $food . "\n";
    }
}


class NbaPlayer extends Human
{
    public $team = "Bull";
    public $playerNumber = "23";

    private $age = 40;

    function __construct($name, $height, $weight, $team, $playerNumber)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        $this->team = $team;
        $this->playerNumber = $playerNumber;
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
echo $jordan->run();
echo "<br>";
echo $jordan->pass();
echo "<br>";
echo $jordan->eat("apple");
echo "<br>";
echo $jordan->age;

?>