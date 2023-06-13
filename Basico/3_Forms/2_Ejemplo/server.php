<?php

function checkImputs($num1, $num2, $op)
{
    $err = '';
    if (!isset($num1) || $num1 == '') {
        $err = $err . 'El primer valor està buit!' . '<br>';
    } elseif (!is_numeric($num1)) {
        $err = $err . 'El primer valor no es un número!' . '<br>';
    }

    if (!isset($num2) || $num2 == '') {
        $err = $err . 'El segon valor està buit!' . '<br>';
    } elseif (!is_numeric($num2)) {
        $err = $err . 'El segon valor no es un número!' . '<br>';
    } elseif ($num2 == 0 && $op == 'div') {
            $err = $err . 'Err: Div per 0!' . '<br>';
    }

    return $err;
}

function calcSuma($num1, $num2)
{
    return $num1 + $num2;
}

function calcResta($num1, $num2)
{
    return $num1 - $num2;
}

function calcMult($num1, $num2)
{
    return $num1 * $num2;
}

function calcDiv($num1, $num2)
{
        return $num1 / $num2;
}

function calcPot($num1, $num2)
{
    return $num1 ** $num2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["accio"])) {
        $err = checkImputs($_POST["num1"], $_POST["num2"], $_POST["accio"]);
        if ($err == '') {
            if ($_POST["accio"] === 'sum') {
                $result = calcSuma($_POST["num1"], $_POST["num2"]);
            } elseif ($_POST["accio"] === 'res') {
                $result = calcResta($_POST["num1"], $_POST["num2"]);
            } elseif ($_POST["accio"] === 'mul') {
                $result = calcMult($_POST["num1"], $_POST["num2"]);
            } elseif ($_POST["accio"] === 'div') {
                $result = calcDiv($_POST["num1"], $_POST["num2"]);
            } elseif ($_POST["accio"] === 'pot') {
                $result = calcPot($_POST["num1"], $_POST["num2"]);
            }
        }
    }
}
