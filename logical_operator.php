<!--  logical operators are used for checking the condition again and again 
  logical and && 
  logical or ||
  logical not ! 
  
-->

<?php
// and operator wants both condditions are true 

// $age = 17;

// if($age>= 18 && $age<=21){
//     echo "you are elegible";
// }

// and operator check only one condition is true 



// $age = 22;

// if($age>= 18 || $age<=21){
//     echo "you are elegible";
// }

// logical not operator 
// logical not operators wants to no condition is ture no wants false condition 

// $age = 25;
// if(!$age<= 18){
//     echo "you are elegible";
// } 

// XOR 
// XOR operator is return reslut when both conditions are false 
$age = 22;

if($age>= 18 xor $age<=21){
    echo "you are elegible";
}


?>