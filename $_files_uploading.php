<?php
/* $_files is a super global varaible which helps to uploading the file  
$_files hold the file information like name, size , temp_name ,type 
move_uploaded_file(file,dest)
file is mean file temp name 
dest means destination in which folder you want to upolad the file*/

if (isset($_FILES['image'])) {
    //   echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if(move_uploaded_file($file_tmp, "uploaded-image/" . $file_name)){
        echo "file is uploaded";
    }else{
        "file is not uploaded";
    }


}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file uploading </title>
</head>

<body>
    <h3>file uploading</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>

</body>

</html>