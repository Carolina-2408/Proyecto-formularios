<body style="background-color:#2CE822;">
<title>AREAS Y PERIMETROS</title>
<center>
<h1>CALCULO DE PERIMETROS</h1>
<h3>Calcula el perimetro de cualquier triangulo</h3>
<TABLE BORDER = 2>
	<tr>
<?php
echo "
<form action=calcularPeri.php method=post>
<h2> Elige el tipo de triangulo</h2>
<select name=triangulo>
<option value=equ>EQUILATERO</option>
<option value=iso>ISOCELES</option>
<option value=esq>ESCALENO</option>
</select><br><br>
</tr>
<tr>
<td>Inserta la medida del lado 1 <input type=text name=1 value=><br><br></td>
<td>Inserta la medida del lado 2 <input type=text name=2 value=><br><br></td>
<td>Inserta la medida del lado 3 <input type=text name=3 value=><br><br></td>
</tr>
<tr>
<td>
<center><td><input type=submit name=Calcular value=calcular perimetro></td></center>
</td>
<td></td>
</form></tr>
";
?>