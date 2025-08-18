<!-- operators  in php  -->
<?php

// 1 arithmetic operatorrs

// a Addititon  (+) 
// b substraction (-)
// c multiplication (*)
// d division (/)
// e modulu (%) 
// f exponentia (**) 
$a = 10;
$b = 5;

echo "for a + b, the result is ".($a+$b) . "<br>";

echo "for a - b, the result is ".($a-$b) . "<br>";

echo "for a * b, the result is ".($a*$b) . "<br>";

echo "for a / b, the result is ".($a/$b) . "<br>";

echo "for a % b, the result is ".($a%$b) . "<br>";

echo "for a ** b, the result is ".($a**$b) . "<br>";

// 2 comparison operators

// a equal to (==)
// b gearter than (>)
// c less than (<)
// d not equal to (<>)
// e grater than equal to (>=)
// f less than equal to (<=)

$x = 7;
$y = 7;
echo "for x == y the result is";
echo var_dump($x == $y) ;

echo "<br>";



// 3 assignmet operators
// $x = $a ;

// echo "for x  the value  is ". $x . "<br>";

// $a += 6;
// echo "for x  the value  is ". $a . "<br>";

// $a -= 6;
// echo "for x  the value  is ". $a . "<br>";

// $a /= 6;
// echo "for x  the value  is ". $a . "<br>";

// $a %= 6;
// echo "for x  the value  is ". $a . "<br>";


// 4 logical operators 

$m = true;
$n = true;

echo "for m and n the result is ";
echo var_dump($n and $m);
echo "<br>";

echo "for m && n the result is ";
echo var_dump($n && $m);
echo "<br>";

echo "for m or n the result is ";
echo var_dump($n or $m);
echo "<br>";

echo "for m || n the result is ";
echo var_dump($n || $m);
echo "<br>";

echo "for !m the result is ";
echo var_dump(!$m);
echo "<br>";






?>
