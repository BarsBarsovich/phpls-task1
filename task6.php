<?php

echo '<table border="1px solid red">';

for ($i = 0; $i <= 10; $i++) {
    echo '<tr><td>' . $i . ' </td>';
    for ($j = 0; $j <= 10; $j++) {
        if ($i > 0) {
            $multiplyRes = $i * $j;
            if ($multiplyRes % 2 === 0) {
                echo '<td>(' . $multiplyRes . ')</td>';
            } elseif ($multiplyRes % 2 !== 0) {
                echo '<td>[' . $multiplyRes . ']</td>';
            } else {
                echo '<td>' . $multiplyRes . '</td>';
            }
        } else {
            echo '<td>' . $j . '</td>';
        }
    }
    echo '</tr>';
}

echo '</table>';