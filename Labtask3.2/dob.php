<?php
$dateError = $monthError = $yearError = "";

if (isset($_REQUEST["submit"])) {
    $date = $_REQUEST["date"];
    $month = $_REQUEST["month"];
    $year = $_REQUEST["year"];

    if (empty($date && $month && $year)) {
        $dateError = $monthError = $yearError = "Invalid. <br> Cannot be empty .";
    } elseif ($date > 31 || $date < 0) {
        $dateError = "Invalid date.";
    } elseif ($month > 12 || $month < 1) {
        $monthError = "Invalid month.";
    } elseif ($year > 1998 || $year < 1953) {
        $yearError = "Invalid year.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date of Birth</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <table>
                <tr>
                    <th><label for="date">dd</label></th>
                    <th><label for="month">mm</label></th>
                    <th><label for="year">yyyy</label></th>
                </tr>
                <tr>
                    <td><input type="text" name="date"></td>
                    <td><input type="text" name="month"></td>
                    <td><input type="text" name="year"></td>
                </tr>

                <tr>
                    <td>
                        <?php echo $dateError; ?>
                    </td>
                    <td>
                        <?php echo $monthError; ?>
                    </td>
                    <td>
                        <?php echo $yearError; ?>
                    </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>

                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>

        </fieldset>

    </form>
</body>

</html>