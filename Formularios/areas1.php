<body style="background-color:#10B1CA;">
<title>AREAS Y PERIMETROS</title>
<center>
<h1>CALCULO DE AREAS</h1>
<h3>RESULTADO DE CALCULO</h3>
<TABLE BORDER = 2>
<tr>
<?php

$base=$_POST["base"];
$altura=$_POST["altura"];
$resultado=($base*$altura)/2;
echo "
<td><h2>El area del triangulo es de:</h2> <center>$resultado</center> </td>
";
?>
