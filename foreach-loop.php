<?php
echo "welcome to the foreach loop";
$arr = array("banana", "apple", "harpic", "bread");
echo "<br>";
// for ($i=0; $i < count ($arr); $i++) { 
//     echo $arr[$i]."<br>";
// }
// better way to do that
foreach ($arr as $value) {
    echo $value."<br>";
}
?>