<?php
require 'functions.php';
while (true) {
    echo("
1 - Check amstrong or not
2 - Check if a string is palindrome or not
3 - Convert words to digits
4 - Convert digits to words
5 - Print out multiplication table upto a given number
6 - Exit
Enter your choice: ");
    $option = readline();
    switch ($option) {
        case 1:
            amstrong();
            break;
        case 2:
            palindrome();
            break;
        case 3:
            echo "\n";
            $word = readline("\nEnter the words separated by commas: ");
            echo wordToDigit($word) . "\n";
            break;
        case 4:
            echo "\n";
            $digit = readline("\nEnter the digits: ");
            if (is_numeric($digit)) {
                echo trim(digitToWord($digit), ':') . "\n";
            } else {
                echo "Not a valid input\n";
            }
            break;
        case 5:
            multiplicationTable();
            break;
        case 6:
            exit("\nExiting...");
            break;
        default:
            echo "\nInvalid entry\n";
    }
}
