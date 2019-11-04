<?php


include_once 'db.php';
$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$con){
    die("imposible conectarse: ".mysqli_error($con));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}

$letras = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J");
$letras2 = array("K", "L");

foreach ($letras as $let) {
    for ($i = 1; $i < 7; $i++) {
        $str = strval($i);
        $casilla = $let . $str;
        $valor = $_POST[$casilla];
        $sql = "select * from `casillas` where `nombre` = '" . $casilla . "'";
        $query_select = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query_select);
        echo $row['lubricante'];
        echo "<br>";
        echo $valor;
        if ($row['lubricante'] != $valor) {

            $sql = "update `casillas` set `lubricante` = " . $valor . " where `nombre` = '" . $casilla . "'";
            $query_update = mysqli_query($con, $sql);
        }
    }
}

foreach ($letras2 as $letr) {
    for ($i = 1; $i < 6; $i++) {
        $str = strval($i);
        $casilla = $letr . $str;
        $valor = $_POST[$casilla];
        $sql = "select * from `casillas` where `nombre` = '" . $casilla . "'";
        $query_select = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query_select);
        echo $row['lubricante'];
        echo "<br>";
        echo $valor;
        if ($row['lubricante'] != $valor) {

            $sql = "update `casillas` set `lubricante` = " . $valor . " where `nombre` = '" . $casilla . "'";
            $query_update = mysqli_query($con, $sql);
        }
    }
}

for ($i = 1; $i < 12; $i++) {
    $str = strval($i);
    $casilla = "M" . $str;
    $valor = $_POST[$casilla];
    $sql = "select * from `casillas` where `nombre` = '" . $casilla . "'";
    $query_select = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query_select);
    echo $row['lubricante'];
    echo "<br>";
    echo $valor;
    if ($row['lubricante'] != $valor) {

        $sql = "update `casillas` set `lubricante` = " . $valor . " where `nombre` = '" . $casilla . "'";
        $query_update = mysqli_query($con, $sql);
    }
}

header('location: procesador2.php');