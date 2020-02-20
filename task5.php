<?php
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'camry',
    'speed' => 190,
    'doors' => 5,
    'year' => '2012'
];

$opel = [
    'model' => 'astra',
    'speed' => 10,
    'doors' => 15,
    'year' => '1900'
];
$result = [$bmw, $toyota, $opel];

for ($i = 0; $i < sizeof($result); $i++) {
    switch ($i){
        case 0:
            echo 'CAR bmw<br/>';
            break;
        case 1:
            echo 'CAR Toyota<br/>';
            break;
        case 2:
            echo 'CAR Opel<br/>';
            break;
    }
    foreach ($result[$i] as $key => $value) {
        echo $value.' ';
    }
    echo '<br/>';
}