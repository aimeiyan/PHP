<?php
/**
 * Created by IntelliJ IDEA.
 * User: yanam
 * Date: 6/29/2016
 * Time: 2:13 PM
 * Function:定义接口
 */

/**
 * 接口
 * 1.
 */
interface ICanEat
{
    public function eat($food);
}


class Human implements ICanEat
{
    public function eat($food)
    {
        // TODO: Implement eat() method.
        echo "Human eating " . $food . "<br>";

    }
}

class Animal implements ICanEat
{
    public function eat($food)
    {
        // TODO: Implement eat() method.
        echo "Animal eating " . $food . "<br>";

    }
}


$man = new Human();
echo $man->eat("apple");
$monkey = new Animal();
echo $monkey->eat("banana");


//$eatObj=new ICanEat();  //不能对接口进行实例化

//可以用instanceof关键字来判断某个对象是否实现了某个接口
var_dump($man instanceof ICanEat);
echo "<br>";
var_dump($monkey instanceof ICanEat);
echo "<br>";

function checkEat($obj)
{
    if ($obj instanceof ICanEat) {
        $obj->eat('food') . "<br>";
    } else {
        echo "The obj can't eat.";
    }
}

checkEat($man);
checkEat($monkey);

//接口继承
interface ICanPee extends ICanEat{
    public function pee();
}

//当类实现子接口时，父接口定义的方法也需要在这个类里面具体实现

class Human1 implements ICanPee{
    public function pee()
    {
        // TODO: Implement pee() method.
    }

    public function eat($food)
    {
        // TODO: Implement eat() method.
    }
}
