<?php
const MIN_AGE = 1;
const MAX_AGE = 65;
const ARMY_AGE = 18;
const TEEN_AGE = 17;

$age = 30;


if ($age >= ARMY_AGE && $age <= MAX_AGE) {
    echo 'Вам еще работать и работать';
} elseif ($age > MAX_AGE) {
    echo 'Вам пора на пенсию';
} elseif ($age >= MIN_AGE && $age <= TEEN_AGE) {
    echo 'Вам ещё рано работать';
} else{
    echo 'Неизвестный возраст';
}