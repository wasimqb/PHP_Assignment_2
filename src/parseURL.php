<?php
$url = 'http://username:password@hostname:9090/path?arg=value#anchor';
$url = parse_url($url);
echo 'Scheme : ' . $url['scheme'] . "\n";
echo 'Host : ' . $url['host'] . "\n";
echo 'Path : ' . $url['path'] . "\n";
