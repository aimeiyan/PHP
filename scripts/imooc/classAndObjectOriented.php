<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/15/2016
 * Time: 2:26 PM
 */

header('content-type:text/html;charset=utf-8');

//类是面向对象程序设计的基本概念，通俗的理解类就是对现实中某一个种类的东西的抽象，
//比如汽车可以抽象为一个类，汽车拥有名字、轮胎、速度、重量等属性，可以有换挡、前进、
//后退等操作方法。


//类是一类东西的结构描述，而对象则是一类东西的一个具体事例，
//例如汽车这个名词可以理解为汽车的总类，但这两汽车则是一个具体的汽车对象
//对象通过new关键字进行实例化。
//类与对象看起来比较相似，但实际上有本质的区别，类是抽象的概念，对象是具体的实例。
//类可以使程序具有可重用性。

//定义一个类
class Auto
{
//    var $name = '汽车';
    public $name = '汽车';

    public function getName()
    {
        // 方法内部可以使用$this伪变量调用对象的属性或者方法
        return $this->name;
    }

}


//实例化一个对象
$auto = new Auto();

echo $auto->name;

echo "<br>";

$auto->name = "奥迪 A6";
echo $auto->getName();


/**
 * 类的属性
 */
//在类中定义的变量称之为属性，通常属性跟数据库中的字段有一定的关联，
//因此也可以称作“字段”。
class Car1
{
    //在这里定义一个共有属性name
    //定义公共属性，外部可以访问
    public $name = '汽车';

    //定义受保护的属性
    protected $color = '白色';

    //定义私有属性
    private $price = '1000000';

    public function getPrice()
    {
        //使用$this伪变量调用当前对象的属性
        return $this->price;   //内部方位私有属性
    }
}

$car = new Car1();
//在这里输出$car对象的name属性
echo "<br>";
echo $car->name;
echo "<br>";
//echo $car->color;  //错误 受保护的属性不允许外部调用
echo "<br>";
//echo $car->price;  //错误 私有属性不允许外部调用


/**
 * 定义类的方法
 */
class Car2
{
    public $name = "汽车";
    public $speed = 0;

    //方法就是在类中的function，很多时候我们分不清方法与函数有什么差别，在面向过程的程序设计中function叫做函数
    //在面向对象中function则称为方法
    public function speedUp()
    {
        $this->speed += 10;
    }

    //使用关键字static修饰的，称之为静态方法，静态方法不需要实例化对象，可以通过类名直接调用，操作符为双冒号::
    public static function getName()
    {
        return "汽车";
    }
}

$carObject = new Car2();
$carObject->speedUp();
echo $carObject->speed;
echo "<br>";
echo $carObject::getName();
echo "<br>";
echo "<br>";

/**
 * 构造函数和析构函数
 */
//PHP5 可以在类中使用__construct()定义一个构造函数，具有构造函数的类，
//会在每次对象创建的时候调用该函数，因此常用来在对象创建的时候进行一些初始化工作。

//在子类中如果定义了__construct则不会调用父亲的__construct,如果需要同时调用父类
//的构造函数，需要使用parent::__construct()显示的调用。

//同样，PHP5支持析构函数，使用__destruct()进行定义，析构函数指的是当某个对象的所有引用被删除，或者对象被显式的销毁时会执行的函数。
//当PHP代码执行完毕以后，会自动回收与销毁对象，因此一般情况下不需要显式的去销毁对象。
class Car3
{
    function __construct()
    {
        print "构造函数被调用 <br>";
    }

//    function __destruct()
//    {
//        // TODO: Implement __destruct() method.
//        print "析构函数被调用 <br>";
//    }
}

class Truck extends Car3
{
    function __construct()
    {
        print "子类构造函数被调用<br>";
        parent::__construct();
    }
}


$car4 = new Car3();  //实例化的时候，会自动调用构造函数__construct,这里会输出一个字符串
$truck = new Truck();


echo "<br>";
echo "<br>";

/**
 * static 静态关键字
 */

//静态属性与方法可以在不实例化类的情况下调用，直接使用 类名::方法名 的
//方式进行调用。静态属性不允许对象使用->操作符调用。

//静态方法中，$this伪变量不允许使用，可以使用self、parent、static在内部调用静态方法与属性

class Car8
{
    private static $speed = 10;

    public static function getSpeed()
    {
        return self::$speed;
    }

    public static function speedUp()
    {
        return self::$speed += 10;
    }

}

class BigCar extends Car8
{
    public static function start()
    {
        parent::speedUp();
    }
}

echo Car8::getSpeed();
Car8::speedUp();
echo "<br>";
echo Car8::getSpeed();


echo "<br>";

//静态方法可以通过变量来进行动态调用
$func3 = 'getSpeed';
$className = 'Car8';
echo $className::$func3();


BigCar::start();
echo "<br>";
echo BigCar::getSpeed();

/**
 * 访问控制
 */

//访问控制通过关键字public、protected和private来实现，
//被定义为公有的类成员可以在任何地方被访问。
//被定义为受保护的类成员则可以被其自身以及其子类和父类访问。
//被定义为私有的类成员则只能被其定义所在的类访问

//类属性必须定义为公有、受保护、私有之一。如果采用var定义，则被视为公有

class Car22
{
    private $speed = 0;   //属性必须定义访问控制

    public function getSpeed()
    {
        return $this->speed;
    }

    protected function speedUp()
    {
        $this->speed += 10;
    }

    //增加start方法，使它能够调用受保护的方法speedUp实现加速10
    public function start()
    {
        $this->speedUp();
    }
}


$car7 = new Car22();
$car7->start();
echo "<br>";
echo "<br>";
echo $car7->getSpeed();


/**
 * 对象继承
 */

//继承是面向对象程序设计中常用的一个特性，汽车是一个比较大的类，我们也可以称之为基类，
//除此之外，汽车还分为卡车、轿车、东风、宝马等，因为这些子类具有很多相同的属性和方法，
//可以采用继承汽车类来共享这些属性与方法，实现代码的复用

class Car33{
    public $speed=0;   //汽车的起始速度
    public function speedUp(){
        $this->speed+=10;
        return $this->speed;
    }
}

class Truck33 extends Car33{
    public function speedUp()
    {
        $this->speed+=50;
        return $this->speed;
    }
}

$car33=new Truck33();
$car33->speedUp();
echo "<br>";
echo "<br>";
echo $car33->speed;


/**
 * 重载
 */

//PHP中的重载指的是动态的创建属性与方法，是通过魔术方法来实现的。

//属性的重载通过_set、_get、_isset、unset来分别实现对不存在的
//属性的赋值、读取、判断属性是否设置、销毁属性。
class Car55{
    private $ary=array();

    public function __set($name, $value)   //赋值
    {
        // TODO: Implement __set() method.
        $this->ary[$name]=$value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        if(isset($this->ary[$name])){
            return $this->ary[$name];
        }

        return null;
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        if(isset($this->ary[$name])){
            return true;
        }
        return false;
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
        unset($this->ary[$name]);
    }

}

$car55=new Car55();
$car55->name='汽车';  //name属性动态创建并赋值
echo "<br>";
echo "<br>";
echo $car55->name;



//方法的重载通过__call来实现，当调用不存在的方法的时候，将会转为
//参数调用__call方法，当调用不存在的静态方法时会使用__call Static重载。

class Car66{
    public $speed=10;
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        if($name=='speedDown'){
            $this->speed+=10;
        }

    }
}

$car11=new Car66();
$car11->speedDown();
echo "<br>";
echo "<br>";
echo $car11->speed;


?>