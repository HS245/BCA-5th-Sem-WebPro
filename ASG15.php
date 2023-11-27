
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter a Year: <input type="text" name="year">
  <input type="submit">
</form>

<?php
//Q15: Write a program in php to check a year is a leap year or not. The year will be entered by the user.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $year = $_POST['year'];
  if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo $year . " is a leap year.";
  } else {
    echo $year . " is not a leap year.";
  }
}
?>

</body>
</html>