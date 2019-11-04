<?php
include "resumendb.php";
include "casillaselect.php";
?>
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
    <style>

      .borded{
        border-color: black; border: 1px solid;
      }
      </style>

  </head>
  <body>
  <div class="container-fluid">
  <?php
        include "nav.php";
        ?></div><hr>

      <div class="container-fluid" style="margin-rigth = 10px">
      
          <div class="row">
            <div class="col-md-12">
                      
              <!-- fila 1-->
              <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("A1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("B1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("C1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("D1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("E1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("F1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 1-->

               <!-- fila 2-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("A2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("B2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("C2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("D2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("E2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("F2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 2-->

               <!-- fila 3-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("A3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("B3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("C3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("D3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("E3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("F3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 3-->

               <!-- fila 4-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("A4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("B4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("C4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("D4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("E4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("F4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 4-->

               <!-- fila 5-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("A5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("B5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("C5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("D5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("E5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("F5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 5-->

               <!-- fila 6-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("A6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("B6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("C6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("D6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("E6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("F6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 6-->

              <!-- a partir de aca cierra el md-12 y el row -->
            </div>
          </div>


          <hr>


          <div class="row">
            <div class="col-md-12">
                      
              <!-- fila 1-->
              <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("G1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("H1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("I1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("J1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 1-->

               <!-- fila 2-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("G2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("H2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("I2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("J2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 2-->

               <!-- fila 3-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("G3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("H3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("I3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("J3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                             </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 3-->

               <!-- fila 4-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("G4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("H4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("I4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("J4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                             </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 4-->

               <!-- fila 5-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("G5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("H5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("I5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("J5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                             </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 5-->

               <!-- fila 6-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("G6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("H6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("I6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                         
                          $casilla = new selector($conect);
                          $casilla->setCasilla("J6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M6");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 6-->

              <!-- a partir de aca cierra el md-12 y el row -->
            </div>
          </div>


          <hr>

          <div class="row">
            <div class="col-md-12">
                      
              <!-- fila 1-->
              <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("K1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("L1");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6></h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M7");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 1-->

               <!-- fila 2-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("K2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("L2");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6></h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M8");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 2-->

               <!-- fila 3-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("K3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("L3");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6></h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                             </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M9");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 3-->

               <!-- fila 4-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("K4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("L4");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6></h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                             </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M10");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 4-->

               <!-- fila 5-->
               <div class="row">
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                           <?php
                          $casilla = new selector($conect);
                          $casilla->setCasilla("K5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("L5");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6></h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6> </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                             </h6>
                        </li>
                        
                      </ul>
                </div>
                <div class="col-md-2 borded">
                    <ul style="background: white">
                        <li><br>
                          <h6>
                            <?php
                          
                          $casilla = new selector($conect);
                          $casilla->setCasilla("M11");
                          echo "<span class=\"badge badge-success\">".$casilla->getNombre()."</span>";
                          echo "&nbsp;&nbsp;";
                          echo $casilla->getLubricante();
                          for($i=0; $i<1; $i++){
                            echo "&nbsp;";

                          }
                          
                          echo "<span class=\"badge badge-danger\">".$casilla->getCantidad()."</span>";
                          ?> </h6>
                        </li>
                        
                      </ul>
                </div>
              </div>
              <!-- end fila 5-->

               

              <!-- a partir de aca cierra el md-12 y el row -->
            </div>
          </div>

        </div>

    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>