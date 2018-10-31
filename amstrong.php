<?php
$number = readline("Enter a number: ");
$sum = 0;
$temp = $number;
while ($temp != 0) {
    $remainder = $temp % 10;
    $sum = $sum + $remainder * $remainder * $remainder;
    $temp = $temp / 10;
}
if ($number == $sum) {
    echo "Armstrong number";
} else {
    echo "not an armstrong number";
}
