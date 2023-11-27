<?php
//Q12: Write a program in PHP to display all the prime numbers upto 100.

/*echo "Prime numbers up to 100 are: ";
for ($i = 2; $i <= 100; $i++) {
    $isPrime = true;
   for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
           $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $i . " ";
    }
}
?>*/

$primes = [];

for ($i = 2; $i <= 100; $i++) {
    $isPrime = true;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        $primes[] = $i;
    }
}
?>

<html>
<head>
  <style>
    .box {
      background-color: gray;
      padding: 50px;
      width: 800px;
    }
  </style>
</head>
<body>
  <div align="center"; class="box">
    Prime numbers up to 100: <?php echo implode(', ', $primes); ?>
  </div>
</body>
</html>