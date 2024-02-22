<?php
$nameError="";
if (isset($_REQUEST["submit"])) {
    $name = $_REQUEST["name"];
    if (empty($name)) {
        $nameError="Name cannot be empty";
    } elseif (!preg_match("/^[a-zA-Z][a-zA-Z. -]+$/", $name)) {
        $nameError="Invalid . <br> Can contain a-z,A-Z,period,dash only.";
    } elseif (str_word_count($name) < 2) {
        $nameError= "Name must contain at least two words";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>NAME</legend>

            <input type="text" id="name" name="name">

            <br>
            <?php echo $nameError;?>
            <br>
            <input type="submit" name="submit">

        </fieldset>

    </form>
</body>

</html>