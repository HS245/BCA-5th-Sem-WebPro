

<html>
<head>
  <title>SQUARE of a Number </title>
  </head>
<body>
<h1>SQUARE of a Number </h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter a Number: <input type="text" name="number">
  <input type="submit">
</form>

<?php
//Q14: Write a program in php to find the square of a number given by the user using a form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST['number'];
  $square = $number * $number;
  echo "Square of " . $number . " is " . $square;
}
?>

</body>
</html>