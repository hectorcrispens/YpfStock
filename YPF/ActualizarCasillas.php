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
        <form action="GuardadorCasillas.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <br><h3>
                    Estanteria Principal
                </h3>
                <div class="row">
                    <div class="col-md-2">

                        <?php
                        /** aca va la conexion con la base de dcaatos */
                        include_once 'db.php';
                        $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                        if(!$con){
                            die("imposible conectarse: ".mysqli_error($con));
                        }
                        if (@mysqli_connect_errno()) {
                            die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
                        }

                        /* fi conexion con la base de datos*/


                            $sql="SELECT * FROM `casillas` WHERE `id` = 1";
                            $query = mysqli_query($con,$sql);
                            $row=mysqli_fetch_array($query);
                            $nombre = $row['nombre'];
                            $id = $row['id'];
                            $cantidad = $row['cantidad'];
                            echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 8";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 14";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 20";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 26";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 32";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 3";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 9";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 15";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 21";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 27";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 33";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 4";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 10";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 16";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 22";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 28";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 34";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 5";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 11";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 17";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 23";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 29";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 35";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 6";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 12";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 18";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 24";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 30";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 36";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 7";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 13";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 19";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 25";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 31";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 37";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <br><h3>
                            Estanteria Lateral
                        </h3>
                        <div class="row">
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 38";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 44";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 50";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 56";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 39";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 45";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 51";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 57";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 40";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 46";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 52";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 58";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 41";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 47";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 53";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 59";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 42";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 48";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 54";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 60";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 43";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 49";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 55";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 61";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <br><h3> BALDES</h3>

                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 62";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 68";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 63";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 69";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 64";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 70";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 65";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 71";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 66";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 72";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr>

                                <button type="submit" class="btn btn-success">
                                    Button
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <br><h3>

                        </h3>

                    </div>

                    <div class="col-md-5">
                        <br><h3>
                            Estanteria Exterior
                        </h3>
                        <div class="row">
                            <div class="col-md-6">

                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 74";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 74";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 75";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 75";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 76";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 76";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 77";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 77";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 78";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 78";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 79";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 79";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 80";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 80";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 81";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 81";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 82";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                        


                        $sql="SELECT * FROM `casillas` WHERE `id` = 82";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 83";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php


                        $sql="SELECT * FROM `casillas` WHERE `id` = 83";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php



                                $sql="SELECT * FROM `casillas` inner join `lubricantes` on casillas.lubricante = lubricantes.id and casillas.id = 84";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                $nombre = $row['nombre'];
                                $id = $row['id'];
                                $cantidad = $row['cantidad'];
                                echo "<label for=\"".$nombre."\">".$nombre."</label>";




                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                       
                        /* fi conexion con la base de datos*/


                        $sql="SELECT * FROM `casillas` WHERE `id` = 84";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        $nombre = $row['nombre'];
                        $id = $row['id'];
                        $cantidad = $row['cantidad'];
                        echo "<div class='input-group'>
<div class=\"input-group-prepend\">
    <span class=\"input-group-text bg-info\">" . $nombre . "</span>
  </div>
<input type=\"number\" name=\"" . $nombre . "\"  value='" . $cantidad . "'></div>";




                        ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>