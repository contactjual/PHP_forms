<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_validation</title>
</head>
    
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">

    Name: <input type="text" name="name"> <br> <br>
    Email: <input type="email" name="email"> <br> <br>
    <input type="submit" value="Log In"> <br> <br>

    </form>

</body>
</html>
<body>

    <?php

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

        $name = $mail = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input ($_POST["name"]);
            $mail = test_input ($_POST["email"]);

            echo "Hey $name, your email is: $mail.";
        }

        function test_input ($data) {
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripcslashes($data);
            return $data;
        }

    ?>