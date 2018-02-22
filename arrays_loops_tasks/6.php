<?php

$arr = ['green' => 'зеленый', 
		'red' => 'красный',
		'blue' => 'голубой'];
$en = $ru = []; 
foreach ($arr as $e => $r) {
    $en[] = $e;
    $ru[] = $r;
}

var_dump($en);

var_dump($ru);
