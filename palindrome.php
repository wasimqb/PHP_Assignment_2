<?php
$string = 'malayalam iss malayalam';
$string = str_replace(' ', '', $string);
if ($string == strrev($string)) {
    echo 'String is a palindrome';
} else {
    echo 'string is not a palindrome';
}
