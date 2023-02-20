<?php
//1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

function sort_by_length($arr) {
  usort($arr, function($a, $b) {
      return strlen($a) - strlen($b);
  });
  return $arr;
}

$words = array("apple", "orange", "banana", "kiwi");
$sorted_words = sort_by_length($words);
print_r($sorted_words);


//2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenate($str1, $str2) {
  return $str1 . ($str2);
}
$str1 = "Hello";
$str2 = "World";
$result = concatenate($str1, $str2);
echo $result;


//3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function remove_first_and_last($arr) {
  array_shift($arr);
  array_pop($arr);
  return $arr;
}

$numbers = array(1, 2, 3, 4, 5);
$new_numbers = remove_first_and_last($numbers);
print_r($new_numbers);


//4.Write a PHP function to check if a string contains only letters and whitespace.

$str = "This is a valid string";

function only_letters_and_whitespace($str) {
  return preg_match('/^[a-zA-Z\s]+$/', $str);
}

if (only_letters_and_whitespace($str)) {
    echo "String is valid\n";
} else {
    echo "String is not valid\n";
}



//5.Write a PHP function to find the second largest number in an array of numbers.

function find_second_largest($arr) {
  $max = $arr[0];
  $second_max = $arr[0];
  
  foreach ($arr as $num) {
      if ($num > $max) {
          $second_max = $max;
          $max = $num;
      } else if ($num > $second_max && $num != $max) {
          $second_max = $num;
      }
  }
  
  return $second_max;
}


$numbers = [3, 5, 2, 8, 1, 9, 4, 7, 6,10];
$second_largest = find_second_largest($numbers);
echo "The second largest number is: " . $second_largest;
