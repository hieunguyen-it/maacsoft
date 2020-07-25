<?php

// php select option value from database

$hostname = "194.59.164.22";
$username = "u377427595_DUCTEST";
$password = "Tuan2010";
$databaseName = "u377427595_DUCTEST";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT month(ngayhachtoan), year(ngayhachtoan) FROM `NKC` GROUP BY month(ngayhachtoan) ";

// for method 1

$result1 = mysqli_query($connect, $query);

$options = "";

?>

<!DOCTYPE html>

<html>

<head>

    <title> PHP SELECT OPTIONS FROM DATABASE </title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <!--Method One-->

    <select>

        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>

            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>

        <?php endwhile; ?>

    </select>

</body>

</html>