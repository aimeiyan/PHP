<?php

date_default_timezone_set("PRC");

class Human
{
    public $name;
    protected $height;  //只能自身和子类访问
    public $weight;
    private $isHungry=true;  //不能被子类访问，只能被自身访问

    public function eat($food)
    {
        echo $this->name . "'s eating '" . $food . "\n";
    }

    public function info(){
        print "HUMAN: " . $this->name . ";" . $this->height . ";" . $this->weight . ";" . $this->isHungry ."\n";
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
//        echo $this->isHungry();
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

    public function getAge(){
        echo $this->name."'s age is '".($this->age-2)."\n";
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
$jordan->getAge();
echo "<br>";
//$jordan->height;
$jordan->info();

?>