<?php
class message{
   public function hello(){
      echo "hello world <br>";
   } 
   public function name(){
      echo "my name is syed shoeb  <br>";
   }
// addition function
   public function Addition($a,$b){
      $c=$a+$b;
      echo "the addtion of a and b is $c <br> ";
   }
      // substraction function
   public function substraction($a,$b){
      $c=$a-$b;
      echo "the substraction of a and b is $c <br>";
   }
   // multiplication function
   public function multilpication($a,$b){
      $c=$a*$b;
      echo "the multiplication of a and b is $c ";
   }
}
$message=new message();
$message->hello();
$message->name();
$message->Addition(10,20);
$message->substraction(100,50);
$message->multilpication(2,5);
?>