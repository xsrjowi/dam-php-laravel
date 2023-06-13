<?php

$arr = [];
$result = '';

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(0, 10);
}



if (!empty($_GET['accion'])) {
    echo 'array: ';
    print_r($arr);
    echo '<br>';
    echo $_GET['accion'];
    echo '<br>';

    if ($_GET['accion'] === 'promedio') {
        $result = 'Promedio: ' . array_sum($arr) / count($arr);
    } elseif ($_GET['accion'] === 'min') {
        $result = 'Min: ' . min($arr);
    } elseif ($_GET['accion'] === 'max') {
        $result = 'Max: ' . max($arr);
    }
}
