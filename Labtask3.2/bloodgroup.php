<?php
$BloodgrpError = "";
if (isset($_REQUEST["submit"])) {

    if (empty($_REQUEST["bloodgroup"])) {
        $BloodgrpError = "Please select your blood group.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>

<body>
    <form action="" method="post">

        <fieldset>
            <legend>BLOOD GROUP</legend>
            <select name="bloodgroup" id="blood group">
                <option value=""></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>


            <br>
            <?php echo $BloodgrpError; ?>
            <br>
            <input type="submit" name="submit">
        </fieldset>
    </form>

</body>

</html>