<?php
$url = readline("Enter a URL(format - http://username:password@hostname:9090/path?arg=value#anchor): ");
if (filter_var($url, FILTER_VALIDATE_URL) === false) {
    die('Not a valid URL');
} else {
    $url = parse_url($url);
    echo 'Scheme : ' . $url['scheme'] . "\n";
    echo 'Host : ' . $url['host'] . "\n";
    if (!empty($url['path'])) {
        echo 'Path : ' . $url['path'] . "\n";
    } else {
        echo "Path : Path not specified";
    }
}
