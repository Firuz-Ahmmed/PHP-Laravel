<?php
include('database.php');
$obj=new Query();
$result=$obj->getData('user');
echo '<pre>';
print_r($result);
class Human{
    public $name;
    public $age;
    public function __construct($personName,$personAge=0){
        $this->name=$personName;
        $this->age=$personAge;
        $this->sayName();
    }
    public function sayName(){
        echo "Assalamu walaikum,My name is {$this->name}\n";
        $this->sayAge();
    }
    public function sayAge(){
        if(($this->age)!=0){
            echo "My age is {$this->age}\n";
        }
        else{
            echo "Age is not given when create an object";
        }
    }
}
$h1=new Human("Firuz","21");
$h2=new Human("Latif");



class parentClass{
    protected $name;
    public function __construct($name){
       $this->name=$name;
       $this->sayHi();
    }
    public function sayHi(){
        echo "Hello from parent.My name is {$this->name}\n";
    }

}
class childClass extends parentClass{
    
    public function sayHi(){
        parent::sayHi();
        //echo "Hello from Child.My name is {$this->name}\n";
    }
}
$c1=new childClass("Firuz"); 




class shape{

}
class shapes{
    private $shapes;
    function __construct(){
        $this->shapes=array();
    }
    function addShapes(shape $shape){
     array_push($this->shapes,$shape);
    }
    function totalShapes(){
        return count($this->shapes);
    }

}
class Rectangle extends shape{}
class triangle extends shape{}
class Student{}
$c1=new shapes();
$c1->addShapes(new Rectangle());
$c1->addShapes(new triangle());
//$c1->addShapes(new Student);
echo $c1->totalShapes();




class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        self::$name=12;
        echo "Fibonacci series up to {$n}\n";
    }
    function factorial($n){
        $this->number=12;
        echo "Calculating factorial of {$n}\n";
    }
}
$mathc=new MathCalculator();
$mathc->factorial(7);



class planet{
    static function echoName(){
        echo static::getName();
    }
    static function getName(){
        return "planet";
    }
}
class Earth extends planet{
    static function getName(){
        return "Earth";
    }
}
planet::echoName();





