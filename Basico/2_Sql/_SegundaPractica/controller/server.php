<?php

require_once("dbcontroller.php");

$selectedDatabase = "";
$noDatabase = "";

$contenidoCaja = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['selector'])) {
        $noDatabase = "Debes seleccionar una base de datos sobre la que actuar.";
    } else {
        pickDatabase($_POST['selector']);
    }

    if (isset($_POST['caja'])) {
        $contenidoCaja = $_POST['caja'];
        testResult($contenidoCaja);
    }
}
