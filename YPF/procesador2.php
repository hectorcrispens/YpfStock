<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>



<div class="container-fluid">
    <?php
    include "nav.php";
    ?>
    <div class="row">
        <div class="col-md-12">
            <br>

<?php
/**
 * Created by PhpStorm.
 * User: hector
 * Date: 26/05/2018
 * Time: 02:21 AM
 */

//COLUMNA IZQUIERDA
include_once 'db.php';
$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$con){
    die("imposible conectarse: ".mysqli_error($con));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
$c=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$d=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$e=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

$cl=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$dl=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$el=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

// columna izquierda
for ($i=0; $i<18; $i++) {
    $c[$i] = 0;
    $sql = "SELECT * FROM `casillas` where `lubricante` = ".($i + 1);
    $cl[$i] = $i + 1;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_array($result)) {

            $c[$i] += $row['cantidad'];

        }
    }

}

// columna central
for ($i=0; $i<18; $i++) {
    $d[$i] = 0;
    $sql = "SELECT * FROM `casillas` where `lubricante` = ".($i + 19);
    $dl[$i] = $i + 19;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_array($result)) {

            $d[$i] += $row['cantidad'];

        }
    }

}


//columnda derecha

for ($i=0; $i<18; $i++) {
    $e[$i] = 0;
    $el[$i] = $i + 37;
    $sql = "SELECT * FROM `casillas` where `lubricante` = ".($i + 37);
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_array($result)) {

            $e[$i] += $row['cantidad'];

        }
    }

}

$sqlsum="select sum(c.cantidad) from casillas c";
$resultsum = mysqli_query($con, $sqlsum);
    
$suma = mysqli_fetch_array($resultsum);

echo "<table style='border: black'> <tbody>";



for($i=0; $i<18; $i++){
    $sqlcl = "SELECT * FROM `lubricantes` where `id` = ".$cl[$i];
    $sqldl = "SELECT * FROM `lubricantes` where `id` = ".$dl[$i];
    $sqlel = "SELECT * FROM `lubricantes` where `id` = ".$el[$i];
    $resultcl = mysqli_query($con, $sqlcl);
    $resultdl = mysqli_query($con, $sqldl);
    $resultel = mysqli_query($con, $sqlel);
    $rowcl = mysqli_fetch_array($resultcl);
    $rowdl = mysqli_fetch_array($resultdl);
    $rowel = mysqli_fetch_array($resultel);
    echo "<tr>";
    echo "<td style='border: solid'>".$rowcl['nombre']."</td>"."<td style='border: solid'>".$c[$i]."</td>";
    echo "<td style='border: solid'>".$rowdl['nombre']."</td>"."<td style='border: solid'>".$d[$i]."</td>";
    echo "<td style='border: solid'>".$rowel['nombre']."</td>"."<td style='border: solid'>".$e[$i]."</td>";
    echo "</tr>";
}

echo "Total de Lubricantes: ".$suma[0];

?>

        </div>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>


