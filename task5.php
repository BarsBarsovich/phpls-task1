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
$result = ['bmw' => $bmw, 'toyota' =>  $toyota, 'opel' => $opel];
foreach ($result as $key => $value) {
    echo 'CAR ' . $key . '<br/>';
    $res = implode (' ', $value);
    echo $res . '<br/>';
}