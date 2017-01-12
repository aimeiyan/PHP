<?php
date_default_timezone_set("PRC");

/**
 * 1、静态属性用于保存类的公有数据
 * 2、静态方法里面只能访问静态属性
 * 3、静态成员不需要实例化对象就可以访问
 * 4、类内部，可以通过self或者static关键字访问自身的静态成员
 * 5、可以通过parent关键字访问父亲的静态成员
 * 6、可以通过类名称在外部访问类的静态成员
 */
class Human
{
    public $name;
    protected $height;
    public $weight;
    private $isHungry = true;

    public static $sValue = "Static Value in Human";

    public function eat($food)
    {
        echo $this->name . "'s eating" . $food . "<br>";
    }

    public function info()
    {
        print "HUMAN：" . $this->name . ";" . $this->height . ";" . $this->weight . ";" . $this->isHungry . "<br>";
    }
}

class NbaPlayer extends Human
{
    public $team = "Bull";
    public $playerNumber = "23";

    private $age = "40";

    public static $president = "David Stern";

    public static function changePresident($newPrsdt)
    {
//        self::$president = $newPrsdt;
        static::$president = $newPrsdt;
        echo parent::$sValue . "<br>";  //调用父类的静态变量
    }

    function __construct($name, $height, $weight, $team, $playerNumber)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        $this->team = $team;
        $this->playerNumber = $playerNumber;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        print "Destroying " . $this->name . "<br>";
    }


    // 类的方法的定义
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

    public function getAge()
    {
        echo $this->name . "'s age is " . ($this->age - 2) . "<br>";
    }

}

//$jordan = new NbaPlayer("Jordan", "183cm", "60kg", "Bull", "23");
//$james = new NbaPlayer("James", "190cm", "69", "lala", "25");
//echo $jordan->president . "<br>";
//$jordan->changePresident("Mike");
//$james->changePresident("Mike");
//echo $jordan->president . "<br>";
//echo $james->president . "<br>";
echo NbaPlayer::$president . " before <br>";
NbaPlayer::changePresident("adam silver");
echo NbaPlayer::$president . "<br>";
echo Human::$sValue . "<br>";
?>