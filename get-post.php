<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="GET">
    Name: <input type="text" name="name"> <br> <br>
    Email: <input type="email" name="email"> <br> <br>
    <input type="submit" value="Submit"> <br> <br>
</form>

</body>
</html>

<?php


// POST... 

// if(isset($_POST["name"]) && isset($_POST["email"])){

//     $name = $_POST["name"];
//     $mail = $_POST["email"];

//     if(empty($name) && empty($mail)){
//         echo "Please fill up the input fields";
//     } 
//     else {
//         echo "Your Name is: $name <br> Your email is: $mail";
//     }

// }

// GET... 
// GET should NEVER be used for sending passwords or other sensitive information!

if(isset($_GET["name"]) && isset($_GET["email"])){

    $name = $_GET["name"];
    $mail = $_GET["email"];

    if(empty($name) && empty($mail)){
        echo "Please fill up the input fields";
    } 
    else {
        echo "Your Name is: $name <br> Your email is: $mail";
    }

}



?>