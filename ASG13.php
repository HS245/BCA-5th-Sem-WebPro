<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter String 1: <input type="text" name="string1"><br>
  Enter String 2: <input type="text" name="string2"><br>
  <input type="submit">
</form>

<?php
//Write a program in php to enter two strings, join them, reverse the joined string and finally find the length off all the strings.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $string1 = $_POST['string1'];
  $string2 = $_POST['string2'];
  $joined_string = $string1 . $string2;
  $reversed_string = strrev($joined_string);
  $length_string1 = strlen($string1);
  $length_string2 = strlen($string2);
  $length_joined_string = strlen($joined_string);
  $length_reversed_string = strlen($reversed_string);

  echo "Joined String: " . $joined_string . "<br>";
  echo "Reversed String: " . $reversed_string . "<br>";
  echo "Length of String 1: " . $length_string1 . "<br>";
  echo "Length of String 2: " . $length_string2 . "<br>";
  echo "Length of Joined String: " . $length_joined_string . "<br>";
  echo "Length of Reversed String: " . $length_reversed_string . "<br>";
}
?>

</body>
</html>