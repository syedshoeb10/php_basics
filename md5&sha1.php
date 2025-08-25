<?php
// md5 sha1 is used for making password secure and hashed 
/* md5 contain 2 parameters str(password ) and raw . raw has 2 values one is false 
and second is true . true is make 16 character bianary formate 
false is make 32 character hexa numbers   */
/* sha1 is same as md5 it follow us secure algorithm 1 it more secure as compare md 5 
it contain 2 parameter true and false . true make 20 character binary formate
false make 40 character hex number   */

$str = "Hello";
echo "the string: " . $str . "<br>";
echo "md5 binary :" . md5($str,true) . "<br>";
echo "md5 hex :" . md5($str,) . "<br>";
echo "sha1 binary :" . sha1($str,true) . "<br>";
echo "sha1 hex :" . sha1($str,) . "<br>";



?>