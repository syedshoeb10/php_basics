<!-- array is a special data type which hold the multiple value in a single variable 
 there are three types of array 
 1 indexed array  always start with indexed positions 
 2 associative array it is a combinations of key value pairs 
 3 multidimensional array it is a array inside the anothe array  
 -->
<?php
/* indexed array*/
$colors = ["red", "green", "blue"];
echo "<pre>";
print_r($colors);
echo "</pre>";

/* associative array */
$student = [
    'name' => "shoeb",
    'age' => 25,
    'city' => "hyderabad"
];
echo "<pre>";
print_r($student);
echo "</pre>";

/*multidimensional array */
$emp = [
    'emp1' => [
        'name' => "shoeb",
        'desig' => "developer",
        'salary' => 25000
    ],
    'emp2' => [
        'name' => "salman",
        'desig' => "tester",
        'salary' => 30000
    ],
    'emp3' => [
        'name' => "eibad",
        'desig' => "developer",
        'salary' => 25000
    ],

];
echo "<pre>";
print_r($emp);
echo "</pre>";
//   Array functions 
//  1 Array count & size 
// both are using for counting the values is the array
$array = array('orange', 'banana', 'apple', 'mango');
echo "<br>";
// echo count($array);
echo sizeof($array);
echo "<br>";
$food = array(
    'fruites' => array('banana', 'orange', 'apple'),
    'vegies' => array('tomato', 'chilli', 'pea')
);
echo count($food, 1);
echo "<br>";
//  1 is a mode its count the all array values inner and outer array
//  2 in_array & array_search
// the difference between inarray and array search is 
// inarray return 1 or 0 if value is found or not 
// array serach returrn the index or key if value is found 
$student = array('salman', 'shoeb', 'eibad');
// echo in_array('shoeb',$student);
// if(in_array('shoeb',$student,true)){
//     echo "find sucessfull";
// }else{
//     echo "not found";
// }
echo array_search('eibad', $student);
echo "<br>";
echo "<br>";
// 3 Aarray replace & replace recursive 
// both are used for replacing the arrays values but major difference is not change in existing value change is create a new array with new array
// array_replce work with index or associative array 
// array_rpelace_recursive work with multidimensional array 
$fruites = ['orange', 'banana', 'apple'];
$vegetable = ['carrot', 'pea'];
$newAarray = array_replace($fruites, $vegetable);
print_r($newAarray);
echo "<br>";
echo "<br>";

// 4 Array pop & array push  
// array pop is delete the last element in the array 
// push is used for add the element in the last value
$pop = ['orage', 'apple', 'banana'];
array_pop($pop);
echo "<pre>";
print_r($pop);
echo "</pre>";
$push = ['pea', 'carrot'];
array_push($push, 'tomato');
echo "<pre>";
print_r($push);
echo "</pre>";
echo "<br>";
echo "<br>";

// 5 Array shift & unshift 
// array shift is used for removing the first element of the array
// unshit is used for adding the elemnt in the first positions  
$shift = ['orange', 'apple', 'banana'];
array_shift($shift);
echo "<pre>";
print_r($shift);
echo "</pre>";

$unshift = ['orange', 'apple', 'banana'];
array_unshift($unshift, 'litchi');
echo "<pre>";
print_r($unshift);
echo "</pre>";
echo "<br>";
echo "<br>";

// 6 Array merge & combine 
// array merge and combine is used for combine two different array 
// there are three ways to combine array
/* array merge  work with indexed or associative array
array merge_recursive  work with multi dimensional associative arra 
array combine work with indexed array*/
$a = ['orange', 'banana', 'apple'];
$b = ['carrot', 'pea', 'tomato'];
$Aarray = array_merge($a, $b);
echo "<pre>";
print_r($Aarray);
echo "</pre>";
echo "<br>";
echo "<br>";

// 7 Array slice 
/* array slice is used for collecting the value in the arra 
it contain three parameter array name indexed and value which value you want 
it contain one preserved parameter it shows the actual array indexed
 */
$color = ['red', 'green', 'blue', 'white'];
$array = array_slice($color, 1, 2);
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br>";
echo "<br>";

// 8 array splice
/*Remove elements from an array and replace it with new elements
it contain four parameter array name starting index length and new array name 
 */
$splice1 = ['shoeb', 'salman', 'eibad'];
$splice2 = ['sageer', 'majid'];
array_splice($splice1, 0, 2, $splice2);
echo "<pre>";
print_r($splice1);
echo "</pre>";
echo "<br>";
echo "<br>";

// 9 array key function 
/* array_keys() return array keys 
   array_key_first() return first key
   array_key_last() return last key
   array_key_exist() checking if a key is exist
   key_exist() shorst hand of array key exist
   */

//   10 array intersect function 
/* this function is used for find the common value and common keys  
    array intersect is case sensetive function */
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "red", "f" => "green", "g" => "blue");
$arrayIntersect = array_intersect($a1, $a2);
echo "<pre>";
print_r($arrayIntersect);
echo "</pre>";
echo "<br>";
echo "<br>";

// 11 Aarray difference & user difference function
/*following are the array difference value 
array_diff,
array_diff_key
array_diff_assoc
array_diff_uassoc
array_diff_ukey
array_udiff_assoc
array_udiff_uassoc
array_udiff
 */

$x = ["a" => "shoeb", "b" => "salman", "c" => "eibad",];
$y = ["a" => "shoeb", "d" => "sageer", "e" => "majid",];
$difference = array_diff($x, $y);
echo "<pre>";
print_r($difference);
echo "</pre>";
echo "<br>";
echo "<br>";

// 11 Array_values & Array_unique 
/* array_values is used for make the new values through keys and return new array
array_unique is used for find the unique values in the array */
$values = array("a" => "red", "b" => "green", "c" => "blue",);
$result = array_values($values);
echo "<pre>";
print_r($result);
echo "</pre>";
$values2 = array("a" => "red", "b" => "green", "c" => "blue", "a" => "red");
$unique = array_unique($values2);
echo "<pre>";
print_r($unique);
echo "</pre>";
echo "<br>";
echo "<br>";

// Array_column & Array_chunk
/* array column is used combine the common column and return into new array
array chunk is used for making the pair in the array values 
  */
$array = array(
    array(
        'id' => 1,
        'first_name' => "syed",
        'last_name' => "shoeb"
    ),
    array(
        'id' => 2,
        'first_name' => "khan",
        'last_name' => "salman"
    ),
    array(
        'id' => 1,
        'first_name' => "kapoor",
        'last_name' => "shahed"
    )
);
$column = array_column($array, 'first_name', 'id');
echo "<pre>";
print_r($column);
echo "</pre>";
echo "<br>";

$cars = ["volvo", "bmw", "mercedes", "audi", "toyota", "tata"];
$chunk = array_chunk($cars, 2);
echo "<pre>";
print_r($chunk);
echo "</pre>";
echo "<br>";
echo "<br>";
// 12 Array_flip & Array_change_key_case
/*array flip is used for interchnge the keys and swapping the values 
array change key is used for change the keys case like uppercase to lwercase and lowercae to uppercase
  */
$c = array(
    "shoeb" => 35,
    "salman" => 25,
    "eibad" => 45,
);
// $flip = array_flip($c);
$flip = array_change_key_case($c,CASE_UPPER);
echo "<pre>";
print_r($flip);
echo "</pre>";
echo "<br>";

// 13 Array_sum & Array_product
/* array sum is used for calculating or adding the all integer values in the array 
array product is used for multiply the all array values 
 */
$sum = array(10,20,30);
echo "sum = " . array_sum($sum);
echo "<br>";
echo "product = " . array_product($sum);
echo "<br>";

// 14 Array_rand & Array_shuffle 
/* array_rand is used for collect the random values in the array it contain two parameter array name and number of the values 
array shuffle is used for shuffle the all values in the array */

$student = array('salman', 'shoeb', 'eibad');
$random = array_rand($student,2);
echo "<br>";
$random = shuffle($student);
echo "<pre>";
print_r($random);
echo "</pre>";
echo "<br>";

// 15 Array_fill & Array_fill_keys
/* array fill keys is used for fill the fixed and static values on the keys positions it contain two parameter array name and keys values 
array fill is used for continue with the existing array it contain three parameter index positions number of eelements and values    */
$c = ["a","b","c"];
// $array_key = array_fill_keys($c,"testing");
$array_key = array_fill(2,3,"testing");
echo "<pre>";
print_r($array_key);
echo "</pre>";
echo "<br>";

// 16 Array_walk & Array_walk_recursive
/* array walk is used for run the function for each array values 
it contain three parameter (array name ,function name ,parameter ) */
$fruites = array(
    "a"=>"lemon",
    "b"=>"mango",
    "c"=>"apple",
    "d"=>"pea",
);
array_walk($fruites,"myfunction",);
function myfunction($value ,$key){
echo "$key : $value";
}
echo "<br>";

// 17 Array_map 
/* array_map is used for run the function for each array value and this function is return something value it contain two parameter 
one is function and second is array name   */
function square($n){
return $n*$n ;
}
$d = [1,2,3,4,5];
$result = array_map('square',$d);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>";
echo "<br>";

// 18 Array_reduce
/* array reduce function is used for run the each array value and retun into single value it contain three parameter array name function and initial value*/
function reduce($n,$m){
return $n . "-" . $m;
}
$e = ['orange','banana','litchi'];
$result = array_reduce($e,'reduce','mango');
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>";

// 19 Array_sorting 
/* array sorting function is used for sort the array in ascending descending alphabetically and numerically as well  
following are list of sort functions 
sort 
rsort
arsort
asort
krsort
ksort
natcasesort
natsort
array_multisort
array_resvers */
$f = ["salman","amir","akshay","tiger"];
sort($f);
print_r($f);
echo "<br>";

// 20 Array_traversing 
/* array traversing is used for pick the random array value with movements and pointers like next previous and end 
and pick the value and key like current key and positions and each  
 */
$g = array('orange','apple','mango');
echo current($g);
echo "<br>";
echo next($g);
echo "<br>";

// 21 Array_list function
/* list function is used for store the array values in different variables with list function 
list function work with indexed array and associative array with numeric keys   */
$f = array('black','white','gay');
list($a,$b,$c) = $f;
echo "value of a : $a <br>";
echo "value of b : $b <br>";
echo "value of c : $c <br>";
echo "<br>";

// 22 Array_extract & compact
/* extract function is used for convert the key into variables it contain three parameter array name and rule and prefix
foolowing are extract rules 
extr overwrite 
extr skip
extr prefix same 
extr prefix all  */
/* compact function is used for convert the variable name into keys   */
$a = "white";
$color = array('a'=>"red",'b'=>"purple",'c'=>"maroon",);
extract($color,EXTR_PREFIX_SAME,"test",);
echo $c;
echo "<br>";
$firstname = "yahoo";
$lastname = "baba";
$age = 20;
$newAarray = compact("firstname","lastname","age");
echo "<pre>";
print_r($newAarray);
echo "</pre>";
echo "<br>";

// 23 Array range 
/* array range is used for create a array using two range it contain three parameter start end and step it work with numeric and alphabetically  */
$range = range(1,10,2);
echo "<pre>";
print_r($range);
echo "</pre>";

?>