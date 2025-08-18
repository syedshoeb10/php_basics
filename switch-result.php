<?php
if(isset($_POST["submit"])){
// echo "your operations is performed";
// echo "the result is submitted successfully";

   $num1=$_POST["number1"];
   $num2=$_POST["number2"];
   $operations=$_POST["operations"];
   $result="";

   switch ($operations){
    case "Add":
        $result = $num1+$num2;
        // echo "<P>Result: $num + $num2 = $resul </P>";
        break;

    case "Sub":
            $result = $num1-$num2;
            // echo "<P>Result: $num - $num2 = $resul </P>";
        break;
      
    case "Mul":
                $result = $num1*$num2;
                // echo "<P>Result: $num * $num2 = $resul </P>";
        break;
    
     case "Div":
            $result = $num1/$num2;
            // echo "<P>Result: $num / $num2 = $resul </P>";
        break;
    
    default:
    echo "<p> invalid operations selected </p>";
   }
   echo "operations result is $result";
}
?>