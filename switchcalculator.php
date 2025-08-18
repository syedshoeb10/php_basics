<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch calculator</title>
</head>
<body>
    <h1>
        calculator using swtich case statements
    </h1>
    <form action="switch-result.php" method="post">
        <label for="">number1</label>
        <input type="number" name="number1">
        <br>
        <br>
        <label for="">number2</label>
        <input type="number" name="number2">
        <br>
        <br>
        <label for="">operations</label>
        <select name="operations" id="">
            <option value="">select operations</option>
            <option value="Add">Additons </option>
            <option value="Sub">Substraction</option>
            <option value="Mul">Multiplication</option>
            <option value="Div">Division</option>
        </select>
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>
