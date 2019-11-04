<?php


include_once 'db.php';
$conect=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$conect){
    die("imposible conectarse: ".mysqli_error($conect));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
?>