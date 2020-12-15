<?php
class Cajero{
	private $Saldo;
	private $CantidadAbono;
	private $CantidadRetiro;
	function __construct($Saldo, $CantidadAbono, $CantidadRetiro)
	{
		$this->Saldo=$Saldo;
		$this->CantidadAbono=$CantidadAbono;
		$this->CantidadRetiro=$CantidadRetiro;

	}
	function Consultar(){
		echo "Tu saldo inicial es: $$this->Saldo";
	}
	function Abonar($CantidadAbono){
		$TotalAbono = ($CantidadAbono + $this->Saldo);
		echo "Tu saldo inicial es: $$this->Saldo <br>
				Tu Saldo abonado es: $$CantidadAbono
			 <br> El total del Saldo con nuevo abono es: $$TotalAbono";
	}
	function Retirar($CantidadRetiro) {
		if ($CantidadRetiro<=$this->Saldo) {
			$TotalRtetiro = ($this->Saldo - $CantidadRetiro);
		echo "Cantidad Retirada: $$CantidadRetiro<br>
				El total de saldo con nuevo retiro es $$TotalRtetiro";
		}
		else {
			echo "¡SALDO INSUFICIENTE EN SU CUENTA!";
		}
	}
	function Eliminar(){
		if ($this->Saldo == 0) {
			echo "¡CUENTA ELIMINADA EXITOSAMENTE!";
		}
		else{
			echo "Es necesario que retire todo su Saldo";
		}
	}
}
$Saldo=100;
$Respuesta=$_POST['Respuesta'];
$CantidadAbono=$_POST['Abonar'];
$CantidadRetiro=$_POST['Retirar'];
$objCajero= new Cajero($Saldo, $CantidadAbono, $CantidadRetiro);

switch ($Respuesta) {
	case 'Consultar':
		$objCajero->Consultar();
		break;
	case 'Abonar':
		$objCajero->Abonar($CantidadAbono);
		break;
	case 'Retirar':
		$objCajero->Retirar($CantidadRetiro);
		break;
	case 'Eliminar Cuenta':
		$objCajero->Eliminar();
		break;
	default:
		echo "fallo";
		break;
}
?>