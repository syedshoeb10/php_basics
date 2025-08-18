<!-- array is a special data type which hold the multiple value in a single variable 
 there are three types of array 
 1 indexed array  always start with indexed positions 
 2 associative array it is a combinations of key value pairs 
 3 multidimensional array it is a array inside the anothe array  
 -->

 <?php
 /* indexed array*/
 $colors = ["red","green","blue"];
 echo "<pre>";
 print_r($colors);
 echo "</pre>";

 /* associative array */
 $student = [
    'name'=> "shoeb",
    'age'=> 25,
    'city'=> "hyderabad"
 ];
  echo "<pre>";
 print_r($student);
 echo "</pre>";

 /*multidimensional array */
 $emp = [
    'emp1'=>[
        'name'=> "shoeb",
        'desig'=> "developer",
        'salary'=> 25000
    ],
    'emp2'=>[
        'name'=> "salman",
        'desig'=> "tester",
        'salary'=> 30000
    ],
    'emp3'=>[
        'name'=> "eibad",
        'desig'=> "developer",
        'salary'=> 25000
    ],
    
];
  echo "<pre>";
 print_r($emp);
 echo "</pre>";
 ?>
