<?php
$val = max(10,20,30,40,50);
echo $val;
echo "<br>";
$val = min(10,20,30,40,50);
echo $val;
echo "<br>";
// $val2 = min(array(2,4,6),array(7,8,1));
$val2 = max(array(2,4,6),array(7,8,1));
echo "<pre>";
print_r($val2);
echo "</pre>";

// math abs(), ceil() ,floor(), round()
/* abs means absolute value it return only positive value  
floor return bottom base value 
ceil return the upper value 
round is return the round figure value  */
echo(ceil(0.60)) . "<br>";
echo(floor(4.5)) . "<br>";
echo(round(4.5)) . "<br>";
echo(abs(-4.5)) . "<br>";

// intdiv , pow() , sqrt()
/* intdiv means integer division 2 parametr  */
echo intdiv(10,5). "<br>";
echo sqrt(25). "<br>";
echo pow(2,3). "<br>";

//  math rand(), mt_tand() , lcg_value()
/* rand is used for getting any random value between 2 values 
mt rand is 10x faster as compare rand functions 
lcg_rand is work with 0 to 10 between values  */

echo rand(1,20). "<br>";
echo rand(). "<br>";
echo mt_rand(100,10000). "<br>";
echo lcg_value(). "<br>";





?>