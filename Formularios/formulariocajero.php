<?php
echo "
<FORM ACTION='cajero.php' METHOD=POST>
<H1> - BIENVENIDO A TU CAJERO - <BR> SELECCIONA UNA OPCION:<BR></H1>

<INPUT TYPE=RADIO NAME=Respuesta VALUE='Consultar'>Consultar<BR><BR>

<INPUT TYPE=RADIO NAME=Respuesta VALUE='Abonar'>Abonar<BR>
Cantidad a Abonar: <INPUT TYPE=TEXT NAME=Abonar><BR><BR>

<INPUT TYPE=RADIO NAME=Respuesta VALUE='Retirar'>Retirar<BR>
Cantidad a Retirar: <INPUT TYPE=TEXT NAME=Retirar><BR><BR>

<INPUT TYPE=RADIO NAME=Respuesta VALUE='Eliminar Cuenta'>Eliminar Cuenta<BR><BR>


<INPUT TYPE='SUBMIT' VALUE='SIGUIENTE'> 

";
?>