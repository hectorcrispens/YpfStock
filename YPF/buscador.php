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
        <form action="ProcesarBusqueda.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2>elegir lubricante</h2>
                <!--select-->
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


                        
                        $sql2="SELECT * FROM `lubricantes`";
                
                            echo"<label for='lubricantes'>Lubricantes</label>";
                            echo "<select id='mySelect' name='idlubricante' onchange='myFunction()'>";
                            $queryLubri = mysqli_query($con,$sql2);

                            while ($row2=mysqli_fetch_array($queryLubri)){
                                
                                    echo "<option value='".$row2['id']."'>".$row2['nombre']."</option>";
                                
                            }

                            echo "</select>";
                        

                        ?>

<button type="submit" class="btn btn-success">
                                    Buscar
                                </button>
</form>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>