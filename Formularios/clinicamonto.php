<body style="background-color:#8BF668;">
<h1>CLINICA DENIQUE</h1>
<h2>MONTOS PARA CADA AREA DE LA CLINICA</h2>
<TABLE BORDER = 2>
	<img src="denique.jpg">
<?php
$monto=$_POST["clinicamonto"];
$Urgencias=$monto*.45;
$Patologia=$monto*.30;
$Edoscopia=$monto*.25;

echo "<br><h3>La cantidad ingresada fue de $monto<h3>";
echo "<tr><td><h3>En el area de Urgencias tiene el monto total de $monto al cual le corresponde una cantidad de $Urgencias</td></tr>";
echo "<tr><td><h3>En el area de Patologia tiene el monto total de $monto al cual le corresponde una cantidad de $Patologia</td></tr>";
echo "<td><h3>En el area de Edoscopia por el monto total de $monto al cual le corresponde una cantidad de $Edoscopia</td>";
?>