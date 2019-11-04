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
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }
                        
                          

                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 8";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }
                        


                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 14";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 20";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 26";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 32";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 3";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 9";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 15";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 21";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 27";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 33";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 4";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 10";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 16";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 22";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 28";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 34";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 5";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 11";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 17";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 23";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 29";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 35";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 6";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 12";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 18";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 24";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 30";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 36";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 7";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 13";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 19";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 25";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 31";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php



                        $sql="SELECT * FROM `casillas` WHERE `id` = 37";
                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 44";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 50";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 56";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 39";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 45";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 51";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 57";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 40";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 46";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 52";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 58";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 41";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 47";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 53";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 59";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 42";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 48";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 54";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 60";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 43";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 49";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 55";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }



                                ?>
                            </div>
                            <div class="col-md-3">
                                <?php



                                $sql="SELECT * FROM `casillas` WHERE `id` = 61";
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 68";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 63";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 69";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 64";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 70";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 65";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 71";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 66";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php



                                        $sql="SELECT * FROM `casillas` WHERE `id` = 72";
                                                               $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

                        }




                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr>

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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
                                                        $queryCasillas = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($queryCasillas);
                        $sql2="SELECT * FROM `lubricantes` WHERE `id` = ".$row['lubricante']."";
                        $queryLubri = mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_array($queryLubri);

                        $casilla = 1;
                        if($_POST['idlubricante'] == $row['lubricante']){
                            echo "<div class='p-3 mb-2 bg-danger text-white'>".$row2['nombre']."<span class='badge badge-warning'>".$row['nombre']."</span></div>";

                        }
                        else{
                            echo "<div class='p-3 mb-2 bg-info text-white'>".$row2['nombre']."<span class='badge badge-primary float-right'>".$row['nombre']."</span></div>";

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