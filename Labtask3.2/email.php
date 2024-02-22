<?php 
$emailError="";
if(isset($_REQUEST["submit"])){
    $email=$_REQUEST["email"];
    if(empty($email)){
        $emailError="Email cannot be empty."; 
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$emailError="Invalid email format.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <fieldset>
        <legend>
            Email
        </legend>
        <form action="" method="post">
        <label for="email"></label>
        <input type="text" name="email">
        <br>
        <?php echo $emailError;?>
        <br>
        <input type="submit" name="submit">
        </form>
    </fieldset>
</body>
</html>