<!--  function is a block of code designed to perform a specific task, promoting code reusability and organization. Functions can be categorized into two main types: 
    
    -->
<?php
function myfunction()
{
    echo "hello world";
    echo "<br>";
}
myfunction()
?>

<?php
//   functions with parameter
function parameter($name)
{
    echo "my name is $name <br>";
}
parameter("yahoo baba ")

?>

<!-- function with returning value -->

<?php
//   functions with returning value

function sum($math, $eng, $sci)
{
    $s = $math + $eng + $sci;
    return $s;
}

function percentage($st)
{
    $per = $st / 3;
    echo "Percentage: " . $per . "%";
}

$total = sum(45, 55, 65);
echo "Total: " . $total . "<br>";

percentage($total);

?>

<!-- function arguments as a reference  -->

<?php
function testing($string){
    $string .= "add something extra";
    
}
$str = "this is a string";
testing($str);
echo $str;

?>