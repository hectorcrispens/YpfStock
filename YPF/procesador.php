<?php
/**
 * Created by PhpStorm.
 * User: hector
 * Date: 26/05/2018
 * Time: 02:21 AM
 */
$cl=array(
    "2T ultra x 1l",
    "2T nautico x 1l",
    "4T x 1l",
    "suplemento 1 x 1l",
    "suplemento 1 x 4l",
    "suplemento x 20l",
    "AT turbo x 1l",
    "At turbo x 4",
    "AT turbo x 20l",
    "extra vida x 1l",
    "extra vida x 4l",
    "extra vida x 20l",
    "grasa 30c x 2kg",
    "grasa 30c x 5kg",
    "grasa 30c x 18kg",
    "grasa 62l x 2kg",
    "grasa 62l x 5kg",
    "grasa 62l x 18kg"
);
$dl=array(
    "torque x 1l",
    "torque x 4l",
    "f10 x 1l",
    "f10 x 4l",
    "f30 x 1l",
    "f30 x 4l",
    "f50 x 1l",
    "f50 x 4l",
    "suv x 1l",
    "suv x 4l",
    "transmision x 4",
    "transmision x 20",
    "hipoidal x 4 ",
    "hipoidal x 20",
    "hidraulico BP x 20",
    "hidro 19 x 20",
    "hidro ATF x 20",
    "extra vida x 20"
);
$el=array(
    "2T 100ml",
    "liquido freno x 1l",
    "2t 200 cc",
    "azul 32 x 10l",
    "liquido freno 200 ml",
    "mata MM",
    "transmision 500",
    "shampoo-lata gel",
    "lubripen",
    "liquido freno 500cc",
    "silicona",
    "agua destilada x 1l",
    "agua refrigerante x 1l",
    "agua destilada x 5l",
    "agua refrigerante x 5l",
    "gas 10kg",
    "gas x 15kg",
    "gas x 45kg"
);
//COLUMNA IZQUIERDA
if(isset($_POST["2tUltra"])){
$var1=$_POST["2tUltra"];
}else {
    $var1=0;
}

if(isset($_POST["G1"])){
$var2=$_POST["G1"];
}else {
    $var2=0;
}

if(isset($_POST["G2"])){
$var3=$_POST["G2"];
}else {
    $var=0;
}
$c[0]=$_POST["2tUltra"]+$_POST["E5"]+$_POST["G5"];
$c[1]=$_POST["nautico"]+$_POST["G1"]+$_POST["H1"];
$c[2]=$_POST["elaion4t"]+$_POST["G2"]+$_POST["G4"];
//suplemento 1
$c[3]=$_POST["D1"];
$c[4]=$_POST["C1"];
$c[5]=$_POST["V1"];
//at turbo
$c[6]=$_POST["D6"];
$c[7]=$_POST["F1"]+$_POST["F5"];
$c[8]=$_POST["V2"];
//extra vida
$c[9]=$_POST["extra"]+$_POST["H2"];
$c[10]=$_POST["B5"];
$c[11]=$_POST["V3"];
//grasa 30c
$c[12]=$_POST["C6"];
$c[13]=$_POST["A6"];
$c[14]=$_POST["V4"];
//grasa litio
$c[15]=$_POST["C5"];
$c[16]=$_POST["B6"];;
$c[17]=$_POST["V5"];

//COLUMNA CENTRAL

$d[0]=$_POST["torque"]+$_POST["A2"];
$d[1]=$_POST["A5"];
$d[2]=$_POST["f10"];
$d[3]=$_POST["B2"];
$d[4]=$_POST["f30"]+$_POST["F4"];
$d[5]=$_POST["D4"];
$d[6]=$_POST["f50"]+$_POST["A3"]+$_POST["B3"]+$_POST["F2"]+$_POST["F3"];
$d[7]=$_POST["A1"]+$_POST["C3"]+$_POST["C4"]+$_POST["D2"]+$_POST["E2"]+$_POST["E3"]+$_POST["E4"];
$d[8]=$_POST["suv"]+$_POST["B1"]+$_POST["A4"];
$d[9]=$_POST["B4"]+$_POST["C2"];
//TRANSMISION
$d[10]=$_POST["E6"];
$d[11]=$_POST["W1"];
//HIPOIDAL
$d[12]=$_POST["F6"];
$d[13]=$_POST["W2"];
$d[14]=$_POST["W3"];
$d[15]=$_POST["W4"];
$d[16]=$_POST["W5"];
$d[17]=0;


//COLUMNA DERECHA

$e[0]=0;
$e[1]=$_POST["J1"]+$_POST["K1"];
$e[2]=0;
$e[3]=0;
$e[4]=4+$_POST["lf200"];
$e[5]=0;
$e[6]=1;
$e[7]=27;
$e[8]=$_POST["H4"];
$e[9]=$_POST["lf500"]+$_POST["D5"];
$e[10]=$_POST["H3"];
$e[11]=0;
$e[12]=0;
$e[13]=0;
$e[14]=0;
$e[15]=0;
$e[16]=$_POST["E1"];
$e[17]=0;

echo "<table style='border: black'> <tbody>";

for($i=0; $i<18; $i++){
    echo "<tr>";
    echo "<td style='border: solid'>".$cl[$i]."</td>"."<td style='border: solid'>".$c[$i]."</td>";
    echo "<td style='border: solid'>".$dl[$i]."</td>"."<td style='border: solid'>".$d[$i]."</td>";
    echo "<td style='border: solid'>".$el[$i]."</td>"."<td style='border: solid'>".$e[$i]."</td>";
    echo "</tr>";
}