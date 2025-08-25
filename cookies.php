<?php 
/* cookie is a super global varaible which can hold the 
multiple information on the users system and it has expiration time  
setcookie(name,value,expire,path,domain,secure,httponly)
path is used for which you want to acess the this cookie / path 
domain is uesd for acess the cookies with domain and subdomain 
secure is work with https only 
httpnoly is acess the cookie serverside and localside 

view cookie 
$_cookie[name]

delete the cookie
setcookie("user","",time -300, "/");

*/
$cookie_name = "user";
$cookie_value = "yahoo baba";

setcookie($cookie_name,$cookie_value,time() +300,"/",  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE[$cookie_name])){
        echo "cookie is  set";

    }else{
        echo "session is deleted ";
    }

    ?>
    
</body>
</html>