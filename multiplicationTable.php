<?php
echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $element = $i * $j;
        echo '<td>'.$element.'&nbsp&nbsp&nbsp</td>';
    }
    echo '<tr>';
}
echo '</table>';
