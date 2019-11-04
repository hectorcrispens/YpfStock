<?php


class selector 
{
 private $con;
 private $cas;

  function __construct($conexion){
      $this->con = $conexion;

  }
  public function setCasilla($casilla){
    
    $sql = "select c.cantidad, c.nombre as casilla, l.nombre as lubricante from `casillas` c, `lubricantes` l where c.lubricante = l.id and c.nombre = '" . $casilla ."'";

    $query_select = mysqli_query($this->con, $sql);
    $row = mysqli_fetch_array($query_select);
   $this->cas = $row;
  }

  public function getLubricante(){
    return $this->cas['lubricante'];
  }

  public function getNombre(){
      return $this->cas['casilla'];
  }
  public function getCantidad(){
    return $this->cas['cantidad'];
  }



}
?>  
