
<?php

$name_err = $email_err = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $name_err = "The name is required";
        
    } else {
        $name = test_input($_POST["name"]); 
    }
    if(empty($_POST["email"])){
        $email_err = "The email is required";
    } else {
        $email = test_input($_POST["email"]); 
    }
}


function test_input ($data) {
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        Name: <input type="text" name="name"> <span>*<?php echo $name_err; ?></span>  <br> <br>
        Email: <input type="email" name="email"> <span>*<?php echo $email_err; ?></span> <br> <br>
        <input type="submit" value="Log In"> <br> <br>
    </form>
</body>
</html>


<?php

echo "<h1>Your input:</h1>";
echo "$name <br>";
echo "$email <br>";

?>
