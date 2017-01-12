<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/29/2016
 * Time: 1:52 PM
 */

/**
 * 数据访问补充
 * 1.parent关键字可以用于调用父类被重写的类成员
 * 2.self关键字可以用于访问类自身的成员方法，也可以用于访问自身的静态成员和类常量；不能用于访问类自身类定义的属性；访问类常量时不用在常量名称的前面加$符号
 * 3.static关键字用于访问类自身定义的静态成员，访问静态属性时需要在属性名前面添加$符号
 */
class BaseClass
{
    public function test()
    {
        echo "BaseClass::test() called <br>";
    }

    public function moreTesting()
    {
        echo "BaseClass::moreTesting() called <br>";
    }
}

class ChildClass extends BaseClass
{
    private static $sValue="static value <br>";
    const CONST_VALUE="A constant value <br>";

// 重写时参数不一定要跟父类完全一致
    public function moreTesting($tmp = null)
    {
        echo "ChildClass::moreTesting() called <br>";
        echo parent::moreTesting();
        echo self::called();
        echo self::CONST_VALUE;
        echo static::$sValue;
        echo self::$sValue;
    }

    public function called()
    {
        echo "ChildClass::called() called <br>";
    }
}

// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
$obj = new ChildClass();
$obj->moreTesting();


?>