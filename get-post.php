<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="POST">
    Name: <input type="text" name="name"> <br> <br>
    Email: <input type="email" name="email"> <br> <br>
    <input type="submit" value="Submit"> <br> <br>
</form>

</body>
</html>

<?php

if(isset($_POST["name"]) && isset($_POST["email"])){

    $name = $_POST["name"];
    $mail = $_POST["email"];

    if(empty($name) && empty($mail)){
        echo "Please fill up the input fields";
    } 
    else {
        echo "Your Name is: $name <br> Your email is: $mail";
    }

}

?>