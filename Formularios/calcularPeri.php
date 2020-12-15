<body style="background-color:#ED3030;">
<title>AREAS Y PERIMETROS</title>
<center>
<h1>CALCULO DE PERIMETROS</h1>
<h3>RESULTADO DE CALCULO</h3>
<TABLE BORDER = 2>
<tr>
<?php
$Selec=$_POST['triangulo'];
$v1=$_POST["1"];
$v2=$_POST["2"];
$v3=$_POST["3"];
$tipo="";
$resultado="";
switch ($Selec) {
case 'equ': 
$tipo="El perimetro para triangulo equilatero con medidas $v1, $v2 y $v3 es:";
$resultado=$v1+$v2+$v3;
break;
case 'iso':
$tipo="El perimetro para triangulo
isoseles con medidas $v1, $v2 y $v3 es: ";
$resultado=$v1+$v2+$v3;
break;
case 'esq':
$tipo="El perimetro para triangulo
escaleno con medidas $v1, $v2 y $v3 es: ";
$resultado=$v1+$v2+$v3;
break;
}
echo "
<td><center><h5> $tipo </h5> <h1>$resultado</h1></center></td>
";
?>