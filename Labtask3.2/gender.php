<?php 
$genderError="";
if(isset($_REQUEST["submit"])){
    if(empty($_REQUEST["gender"])){
$genderError="Please select a gender.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
    <form action="" method="post" >
<fieldset>        
<legend>Gender</legend>
<input type="radio" value="male" name="gender">Male
<input type="radio" value="female" name="gender">Female
<input type="radio" value="other" name="gender">Other
<br>
<?php echo $genderError;?>
<br>
<input type="submit" name="submit" >
</fieldset>
</form>
</body>
</html>