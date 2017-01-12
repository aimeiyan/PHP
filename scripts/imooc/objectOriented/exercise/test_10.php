<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/29/2016
 * Time: 3:23 PM
 * Function:多态
 */

interface ICanEat{
    public function eat($food);
}

class Human implements ICanEat{
    public function eat($food)
    {
        // TODO: Implement eat() method.
        echo "Human eating ".$food."<br>";
    }
}

class Animal implements ICanEat{
    public function eat($food)
    {
        // TODO: Implement eat() method.
        echo "Animal eating".$food."<br>";
    }
}

function eat($obj){
    if($obj instanceof ICanEat){
        $obj->eat("Food");
    }else{
        echo "Can't eat! <br>";
    }
}

$man=new Human();
$monkey=new Animal();

eat($man);
eat($monkey);