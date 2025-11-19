<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even</title>
</head>
<body>

<h2>Odd or Even Checker</h2>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter a number: 
    <input type="text" name="number">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET["number"])) {

        $number = $_GET["number"];

        if (is_numeric($number)) {

            if ($number % 2 == 0) {
                echo "<p>$number is an EVEN number.</p>";
            } else {
                echo "<p>$number is an ODD number.</p>";
            }

        } else {
            echo "<p>Please enter a valid numeric value.</p>";
        }

    }
}
?>

</body>
</html>

