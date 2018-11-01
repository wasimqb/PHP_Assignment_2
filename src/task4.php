<?php
$i = 0;
$array = get_extension_funcs("xml");
foreach ($array as $arr) {
    echo ++$i . " - " . $arr . "\n";
}
