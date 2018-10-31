<?php
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) //check ip from share internet
    {
        $ip = $_SERVER['SERVER_ADDR'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //to check ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // var_dump($_SERVER);
        $ip = $_SERVER['REMOTE_ADDR'];
        // var_dump($_SERVER['REMOTE_ADDR']);
    }
    return $ip;
}
$ip = getRealIpAddr();
echo $ip;
