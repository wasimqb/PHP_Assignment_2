<?php
/*
To convert word to digit and vice versa
*/

//Function to convert words to digits
function wordToDigit($word)
{
    $warr = explode(':', $word);
    $result = '';
    foreach ($warr as $value) {
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

//Function to convert digits to words.
function digitToWord($num)
{
    $result = '';
    while ($num>1) {
        $rem = $num % 10;
        switch ($rem) {
            case 0:
                $result = 'zero:'.$result;
                break;
            case 1:
                $result = 'one:'.$result;
                break;
            case 2:
                $result = 'two:'.$result;
                break;
            case 3:
                $result = 'three:'.$result;
                break;
            case 4:
                $result = 'four:'.$result;
                break;
            case 5:
                $result = 'five:'.$result;
                break;
            case 6:
                $result = 'six:'.$result;
                break;
            case 7:
                $result = 'seven:'.$result;
                break;
            case 8:
                $result = 'eight:'.$result;
                break;
            case 9:
                $result = 'nine:'.$result;
                break;
        }
        $num = $num/10;
    }
    return $result;
}

echo "Words to Digit - ".wordToDigit("six:eight:one:five:zero")."<br>";
echo "Words to Digit - ".wordToDigit("one:one:one")."<br>";
echo "Digits to words - ".trim(digitToWord(1234), ':')."<br>";
