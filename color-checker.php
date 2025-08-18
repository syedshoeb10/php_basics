<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>color checker </title>
</head>
<body>
    <p>
        color checker using php 
        
    </p>

 
    <form  method="post">
     <label for="">Enter your fav color :</label>    
    <input type="text" name="favcolor">
        <input type="submit" name="submit" value="check now">
    </form>

    <!-- php started  -->
    <?php
    if(isset($_POST['submit'])) {
        $favcolor = $_POST['favcolor'];
       
        switch ($favcolor) {
            case "blue" : 
                echo 'your favourite color is Blue ';
                break ;

                case "green" : 
                    echo 'your favourite color is green ';
                    break ;
                
                    case "red" : 
                        echo 'your favourite color is red ';
                        break ;

                        default:
                        echo 'sorry i am not sure about your favourite color';

                        

        }

    }

     ?>

    
</body>
</html>