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
        <form action="GuardadorLubricantes.php" method="post">
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
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }

                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 8";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 14";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 20";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 26";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 32";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 3";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 9";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 15";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 21";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 27";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 33";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 4";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 10";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 16";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 22";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 28";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 34";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 5";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 11";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 17";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 23";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 29";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 35";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 6";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 12";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 18";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 24";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 30";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 36";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 7";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 13";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 19";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 25";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 31";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 37";
                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <br><h3>
                            Estanteria Lateral
                        </h3>
                        <div class="row ">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 38";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 44";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 50";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 56";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 39";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 45";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 51";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 57";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 40";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 46";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 52";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 58";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 41";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 47";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 53";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 59";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 42";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 48";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 54";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 60";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 43";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 49";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 55";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 61";
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 68";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 63";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 69";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 64";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 70";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 65";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 71";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 66";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 72";
                                                               $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }




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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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
                                                        $sql2="SELECT * FROM `lubricantes`";
                        $queryCasillas = mysqli_query($con,$sql);

                        $casilla = 1;
                        while ($row=mysqli_fetch_array($queryCasillas)) {
                            echo"<label for='".$row['nombre']."'>".$row['nombre']."</label>";
                            echo "<select name='".$row['nombre']."'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                if($row2['id'] == $row['lubricante']){
                                    echo "<option value='".$row2['id']."' selected>".$row2['nombre']."</option>";
                                }
                                else{
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                }
                            }

                            echo "</select>";
                        }



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