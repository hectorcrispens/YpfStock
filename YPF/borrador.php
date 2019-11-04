
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
<form action="LubriGuardador.php" method="post">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <br><h3>
                    Estanteria Principal
                </h3>
                <?php
                include_once 'db.php';
                $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                if(!$con){
                    die("imposible conectarse: ".mysqli_error($con));
                }
                if (@mysqli_connect_errno()) {
                    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
                }

                $sql="SELECT * FROM `casillas`";
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

                <button type="submit">Actualizar</button>

</form>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>