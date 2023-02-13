<?php
//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision.
function isEven($num) {
  if ($num % 2 == 0) {
    return "The number $num is even.";
  } else {
    return "The number $num is odd.";
  }
}
echo isEven(10);


//2. 1+2+3...…….100  Write a loop to calculate the summation of the series

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  $sum += $i;
}
echo "The sum of the series 1 to 100 is $sum.";