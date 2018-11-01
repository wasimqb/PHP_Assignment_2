<?php
function amstrong()
{
    echo "\n";
    $number = readline("\nEnter a number: ");
    if (is_numeric($number)) {
        $sum = 0;
        $temp = $number;
        while ($temp != 0) {
            $remainder = $temp % 10;
            $sum = $sum + $remainder * $remainder * $remainder;
            $temp = $temp / 10;
        }
        if ($number == $sum) {
            echo "Armstrong number\n";
        } else {
            echo "not an armstrong number\n";
        }
    } else {
        echo "Invalid input\n";
    }
}
function palindrome()
{
    echo "\n";
    $string = readline("Enter the string to be checked: ");
    $string = str_replace(' ', '', $string);
    if ($string == strrev($string)) {
        echo "String is a palindrome\n";
    } else {
        echo "string is not a palindrome\n";
    }
}

function wordToDigit($word)
{
    $string = explode(',', $word);
    $result = '';
    foreach ($string as $value) {
        switch (trim($value)) {
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;
        }
    }
    return $result;
}

function digitToWord($num)
{
    $result = '';
    while ($num > 1) {
        $rem = $num % 10;
        switch ($rem) {
            case 0:
                $result = 'zero:' . $result;
                break;
            case 1:
                $result = 'one:' . $result;
                break;
            case 2:
                $result = 'two:' . $result;
                break;
            case 3:
                $result = 'three:' . $result;
                break;
            case 4:
                $result = 'four:' . $result;
                break;
            case 5:
                $result = 'five:' . $result;
                break;
            case 6:
                $result = 'six:' . $result;
                break;
            case 7:
                $result = 'seven:' . $result;
                break;
            case 8:
                $result = 'eight:' . $result;
                break;
            case 9:
                $result = 'nine:' . $result;
                break;
        }
        $num = $num / 10;
    }
    return $result;
}

function multiplicationTable()
{
    $limit = readline("Enter the limit: ");
    if (is_numeric($limit)) {
        for ($i = 1; $i <= $limit; $i++) {
            for ($j = 1; $j <= $limit; $j++) {
                $element = $i * $j;
                echo $element . "\t";
            }
            echo "\n";
        }
    } else {
        echo "\nInvalid input\n";
    }
}
