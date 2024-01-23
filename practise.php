<?php

//implementing the class methods and objects 
echo "<br> <b>implementing the class methods and objects.....</b><br>";
class players
{
    public $name;
    public $country;

    function details($n, $c)
    {
        $this->name = $n;
        $this->country = $c;
    }
}

$p1 = new players();
$p1->details("rohit", "nepal");
echo "Name = " . $p1->name;
echo "<br>";
echo "Country = " . $p1->country;
echo "<br>";

class members
{
    public $role;
    public $salary;
    function family($r, $s)
    {
        $this->role = $r;
        $this->salary = $s;
    }
}
$m1 = new members();
$m2 = new members();
$m1->family("head", 50000);
$m2->family("subhead", 30000);

echo "Position = " . $m1->role;
echo "<br>";
echo "Salary = " . $m1->salary;
echo "<br>";
echo "Position = " . $m2->role;
echo "<br>";
echo "Salary = " . $m2->salary;
echo "<br>";


//implementing construct function...
echo "<br><b> implementing the construct function.....</b><br>";
class fruits
{
    public $name;
    public $price;
    function __construct($n, $p)
    {
        $this->name = $n;
        $this->price = $p;
    }
};
$f1 = new fruits("apple", "300/kg");
$f2 = new fruits("mango", "500/kg");
echo "name of fruit with its price =  " . $f1->name . " and " . $f1->price;
echo "<br>name of fruit with its price =  " . $f2->name . " and " . $f2->price . "<br>";


//implementing construct function...
echo "<br> <b>implementing the construct function.....</b><br>";
class Employee
{

    public $name;

    public $position;

    function __construct($name, $position)

    {
        $this->name = $name;
        $this->position = $position;
    }
    function show_details()
    {
        echo $this->name . " : ";
        echo "Your position is " . $this->position . "<br>";
    }
}

$employee_obj = new Employee("Rakesh", "developer");
$employee_obj->show_details();

$employee2 = new Employee("Vikas", "Manager");
$employee2->show_details();



//implementing inheritence concept....
echo "<br><b> implementing the inheritence concept....</b><br>";
class mathematics
{
    public $num1;
    protected $num2;

    function __construct($n1, $n2)
    {
        $this->num1 = $n1;
        $this->num2 = $n2;
    }
    function add()
    {
        $sum = $this->num1 + $this->num2;
        echo "<br>sum of the number = $sum <br>";
    }
}
class science extends mathematics
{
    function sub()
    {
        $diff = $this->num1 - $this->num2;
        echo "<br> difference of the numbers = $diff <br>";
    }
}

$math1 = new mathematics(5, 20);
$math1->add();
$math2 = new science(20, 5);
$math2->sub();



//implementing inheritence with extra properties added on child class
echo "<br> <b>implementing the inheritence with the extra properties added on child class.....</b><br>";
class vegetables
{
    public $name;
    public $price;
    function __construct($n, $p)
    {
        $this->name = $n;
        $this->price = $p;
    }
    function details()
    {
        echo "<br> name of the vegatable is $this->name and the price is  $this->price <br>";
    }
    protected function hello()
    {
        echo " this is proctected function inside the class vegetabls...";
    }
}
class potato extends vegetables
{
    public $color;
    function __construct($n, $p, $c)
    {
        $this->name = $n;
        $this->price = $p;
        $this->color = $c;
    }
    function pot()
    {
        echo "<br> name of the vegatable is $this->name and the price is  $this->price  and its color  =  $this->color <br>";
        $this->hello();
    }
}

$veg1 = new vegetables("potatos", "100/kg", "grey");
$veg1->details();
$veg2 = new potato("potatos", "100/kg", "grey");
$veg2->pot();


//implementing inheritence with overridding concet
echo "<br> <b>implementing the inheritence with the overriding concept.....</b><br>";
class nepal
{
    public $name;
    public $age;
    function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }
    function intro()
    {
        echo "<br>I am $this->name and i am $this->age years old.<br>";
    }
}
class nepali extends nepal
{
    public $country;
    //implementing the overriding method...
    function __construct($n, $a, $c)
    {
        $this->name = $n;
        $this->age = $a;
        $this->country = $c;
    }
    function intro()
    {
        echo "<br> I am $this->name and i am $this->age years old. I am from $this->country . <br> ";
    }
}
$nep = new nepali("vim vai", 26, "nepal");
$nep->intro();



//implementing the constant keyword in oops 
echo "<br> <b>Implementing the CONSTANT keyword in OOP.....</b><br>";
class constant
{
    const MESSAGE = "<br>Learn More And Practise More.. <br>";
}
echo constant::MESSAGE;

class one
{
    const TEST = "<br> INDIA VS ENGLAND TEST SERIES start from jan 25 2023.<br>";
    function firstmethod()
    {
        echo "<br> Practise using CONSTANT keyword...<br>";
    }
    function secondmethod()
    {
        echo one::TEST;
    }
}
$test1 = new one();
$test1->firstmethod();
$test1->secondmethod();


//implementing the abstract class 
echo "<br><b> Implementing the abstract class.....</b><br>";
abstract class shape
{
    abstract function area();
}

class circle extends shape
{
    const pie = 3.14;
    public $radius;
    function __construct($r)
    {
        $this->radius = $r;
    }
    function area()
    {
        $areaofcircle = circle::pie * ($this->radius) ** 2;
        echo "<br>The area of the circle = $areaofcircle <br>";
    }
}
$c1 = new circle(14);
$c1->area();


abstract class shapes
{
    abstract function calculateArea();
}
class rectangle extends shapes
{
    public $length;
    public $breadth;
    public function __construct($l, $b)
    {
        $this->length = $l;
        $this->breadth = $b;
    }
    function calculateArea()
    {
        $areaofrectangle = $this->length * $this->breadth;
        echo "<br> Area of the given reactangle =  $areaofrectangle <br>";
    }
}
class square extends rectangle
{
    public function __construct($l)
    {
        $this->length = $l;
    }
    function calculateArea()
    {
        $areaofsquare = $this->length ** 2;
        echo "<br> Area of the given reactangle =  $areaofsquare <br>";
    }
}

$m1 = new rectangle(20, 10);
$m1->calculateArea();
$m2 = new square(20);
$m2->calculateArea();



//implementing the interface class 
echo "<br><b> Implementing the interface class.....</b><br>";
interface batsman
{
    public function bat();
}

interface bowler
{
    public function bowl();
}
interface bat_bowl extends batsman, bowler
{
    public function role();
}
class allrounder implements bat_bowl
{
    public $batsman;
    public $bowlername;
    public $allroundername;
    public function __construct($bat, $bowl, $all)
    {
        $this->batsman = $bat;
        $this->bowlername = $bowl;
        $this->allroundername = $all;
    }

    public function role()
    {
        echo " <br> The name of the batsman is $this->batsman";
        echo " <br> The name of the bowler is $this->bowlername";
        echo " <br> The name of the allrounder is $this->allroundername";
    }
    public function bat()
    {
        echo " <br> $this->allroundername can bat very well.";
    }
    public function bowl()
    {
        echo " <br> $this->allroundername can bowl as well.";
    }
}
$all = new allrounder("sehwag", "zaheer", "jack kallis");
$all->role();
$all->bat();
$all->bowl();


//implementing the TRAIT concept 
echo "<br><b> Implementing the TRAIT concept.....</b><br>";

trait t1
{
    public $tname, $tage;
    public function __construct($ttname, $ttage)
    {
        $this->tname = $ttname;
        $this->tage =  $ttage;
    }
    public function trait1()
    {
        echo "<br> The name of the trait is $this->tname";
        echo "<br> The age of the trait is $this->tage";
    }
}
trait t2
{
    public $tschool, $taddress;
    public function __construct($ttschool, $ttaddress)
    {
        $this->tschool = $ttschool;
        $this->taddress =  $ttaddress;
    }
    public function trait2()
    {
        echo "<br> The school's name of the trait is $this->tschool";
        echo "<br> The address of the trait is $this->taddress";
    }
}

class t3
{
    use t2;
}

$traitobject = new t3("traitphp school", "php trait 5.4");
$traitobject->trait2();

trait mathcalculator
{
    
    function addthem($firstnum,$secondnum,$thirdnum)
    {
        $totalsum =  $firstnum + $secondnum + $thirdnum;
        echo "<br> the sum of the given value = $totalsum <br>";
    }
    function product($firstnum,$secondnum,$thirdnum)
    {
        $totalproduct =  $firstnum * $secondnum * $thirdnum;
        echo "<br> the product of the given value = $totalproduct <br>";
    }
}
trait mathshapes
{
    
    function rect_area($len,$bre){
        $total_area = $len * $bre;
        echo "<br> the area of the given reactangle = $total_area <br>";

    }
    function square($len){
        $total_area = $len ** 2;
        echo "<br> the area of the given square = $total_area <br>";

    }
}
class mathworks{
    use mathshapes,mathcalculator;
}

$mathtrait1 = new mathworks();
$mathtrait2 =new mathworks();
$mathtrait3 = new mathworks();
$mathtrait4 =new mathworks();
$mathtrait4->addthem(500,800,200); 
$mathtrait3->rect_area(50,40);
$mathtrait2->product(3,5,10);
$mathtrait1->square(9);



//implementing the static method concept 
echo "<br><b> Implementing the static method concept.....</b><br>";
class staticmethod1{
    public static function method1(){
        echo "<br> I am using the static method now...";
    }
}
staticmethod1::method1();

class staticmethod2{
    public static function method2(){
        echo "<br> I am using the static method again inside the construct function...";
    }
    public function __construct() {
        self::method2();
      }
}
new staticmethod2();