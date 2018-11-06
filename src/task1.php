<?php
function validateEmail()
{
    $email = readline("Enter your Email: ");
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("\n$email is a valid email address\n");
    } else {
        echo("\n$email is not a valid email address\n");
    }
}
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['SERVER_ADDR'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
while (true) {
    echo("
1 - Client IP
2 - Current File Name
3 - Detect browser
4 - Validate Email
5 - Source code
6 - Exit
Enter your choice: ");
    $option = readline();
    switch ($option) {
        case 1:
            echo "\nOpen the browser and go to the following link - 10.5.8.50/php_assignment/clientIP.php\n";
            exec(`google-chrome http://10.5.8.50/php_assignment/clientIP.php`);
            break;
        case 2:
            $fileName = basename($_SERVER['PHP_SELF']);
            echo "\n" . $fileName . "\n";
            break;
        case 3:
            echo "\nOpen the browser and go to the following link - 10.5.8.50/php_assignment/detectBrowser.php\n";
            exec(`google-chrome http://10.5.8.50/php_assignment/detectBrowser.php`);
            break;
        case 4:
            validateEmail();
            break;
        case 5:
            $file = readline("\nEnter the file name: ");
            exec(`google-chrome http://10.5.8.50/php_assignment/showSource.php?file=$file`);
            break;
        case 6:
            exit("\nExiting...");
            break;
        default:
            echo "\nInvalid entry\n";
    }
}
