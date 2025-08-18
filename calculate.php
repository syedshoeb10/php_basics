<?php
if(isset($_POST["form-submit"])){

   $num1=$_POST["number1"];
   $num2=$_POST["number2"];
   $operations=$_POST["operations"];
   $result="";

   if($operations=="Add"){
    $result=$num1+$num2;

   }elseif($operations=="Sub"){
    $result=$num1-$num2;

   }elseif($operations=="Mul"){
    $result=$num1*$num2;

   }else{
    $result=$num1/$num2;

   }

   echo "the operation result is $result ";
}

?>