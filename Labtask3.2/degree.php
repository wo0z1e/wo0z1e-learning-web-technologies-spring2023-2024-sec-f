<?php 
$degreeError="";
if(isset($_REQUEST["submit"])){
 if(empty($_REQUEST["degree"])){
$degreeError="Please select your degree.";
 }
 elseif(($_REQUEST['degree']) < 2){
$degreeError="Atleast 2 options need to be selected.";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>
<body>
    <form action="" method="post" >

    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="degree[]" id="SSC" value="SSC">
        <label for="SSC">SSC</label>
        <input type="checkbox" name="degree[]" id="HSC" value="HSC">
        <label for="HSC">HSC</label>
        <input type="checkbox" name="degree[]" id="BSc" value="BSc">
        <label for="BSc">BSc</label>
        <input type="checkbox" name="degree[]" id="MSc" value="MSc">
        <label for="MSC">MSc</label>

        <br>
        <?php echo $degreeError;?>
        <br>
        <input type="submit" name="submit">
    </fieldset>
    </form>
</body>
</html>