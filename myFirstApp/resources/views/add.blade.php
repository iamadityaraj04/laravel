<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add" method="POST">
        @csrf
        <label for="">Num 1: </label><input type="number" name="num1">
        <label for="">Num 2: </label><input type="number" name="num2">
        <input type="submit" name="submit" id="">

    </form>
    
</body>
</html>