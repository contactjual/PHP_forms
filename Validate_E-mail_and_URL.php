<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate E-mail and URL</title>
</head>
<body>


    <?php

    $name_err = $email_err = $url_err = "";
    $name = $email = $url = $name_wrong = $email_wrong = $url_wrong = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])){
            $name_err = "Please input your name";
        } else if(!preg_match("/^[a-zA-Z-' ]*$/" , $_POST["name"])) {
            $name_wrong = "Only letters and white space allowed";
        } else {
            $name = input_check ($_POST["name"]);
        }

        if (empty($_POST["email"])){
            $email_err = "Please input your email";
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email_wrong = "Email is not valid";
        } else {
            $email = input_check ($_POST["email"]);
        }

        if (empty($_POST["url"])){
            $url_err = "Please input url";
        } else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["url"])) {
            $url_wrong = "url is not valid";
        } else {
            $url = input_check ($_POST["url"]);
        }
    }
    

    function input_check ($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }
    
    ?>





    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        Name: <input type="text" name = "name"> <span>* <?php echo "$name_err $name_wrong"?></span> <br><br>
        Email: <input type="email" name = "email"> <span>* <?php echo "$email_err $email_wrong"?></span> <br><br>
        Web url: <input type="text" name = "url"> <span>* <?php echo "$url_err $url_wrong"?></span> <br><br>
        <input type="submit" value="Log In"> <br><br>
    </form>






    <h2>Your Input:</h2>
    <?php
    echo "$name <br>";
    echo "$email <br>";
    echo "$url <br>";
    ?>
</body>
</html>