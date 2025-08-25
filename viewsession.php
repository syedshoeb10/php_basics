<?php
session_start();
echo $_SESSION["favcolor"];
print_r($_SESSION);

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
    if(isset($_SESSION["favcolor"])){
    echo "favorite color :" . $_SESSION["favcolor"];
    }else{
        echo " session is not set";
    }
    
    ?>
    
</body>
</html>