<?php

require_once("../model/connection.php");
use practicaciristianjoel\Database as BD;

// ? Habitual ? $GLOBALS['connection'] = practicaciristianjoel\Database::getInstance()->getConnection();
$GLOBALS['connection'] = BD::getInstance()->getConnection();

function updateSelector()
{
    $lista = $GLOBALS['connection']->query("SELECT DISTINCT(TABLE_SCHEMA) FROM information_schema.tables;");

    while ($valor = $lista->fetch_assoc()) {
        $item = $valor['TABLE_SCHEMA'];
        echo "<option value='$item'>" . $valor['TABLE_SCHEMA'] . "</option>";
    }
}

function pickDatabase($databaseName)
{
    $GLOBALS['connection']->select_db($databaseName);
}

function testResult($cleanedQuery)
{
    $lowerQuery = strtolower($cleanedQuery);

    if (str_contains($lowerQuery, "select")) {
        selectQuery($lowerQuery);
    } elseif (str_contains($lowerQuery, "update")) {
        booleanQuery($lowerQuery);
    } elseif (str_contains($lowerQuery, "insert")) {
        booleanQuery($lowerQuery);
    } elseif (str_contains($lowerQuery, "delete")) {
        booleanQuery($lowerQuery);
    }
}

function selectQuery($query)
{
    $queryResult = $GLOBALS['connection']->query($query);
    $iterator = $GLOBALS['connection']->affected_rows;

    if ($iterator > 0) {
        echo "<table>";
        foreach ($queryResult as $row) {
            echo "<tr>";
            foreach ($row as $valor) {
                echo "  <td> {$valor} </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se han encontrado resultados";
    }
}

function booleanQuery($query)
{
    $queryResult = $GLOBALS['connection']->query($query);

    if ($queryResult) {
        echo "Se ha ejecutado sin incidencias";
    } else {
        echo "ERROR: <br> * {$query} <br> -> {$queryResult->error}";
    }
}
