<?php


	$numero1=$_POST['numero1'];
	$num1=$numero1;

	$numero2=$_POST['numero2'];
	$num2=$numero2;

	$opera=$_POST['opera'];


	function calculadora($n1, $n2, $opr){
		switch ($opr) {
			case '+':
				$resultado=$n1 + $n2;
				break;
				case '-':
				$resultado=$n1 - $n2;
				break;
				case '*':
				$resultado=$n1 * $n2;
				break;
				case '/':
				$resultado=$n1 / $n2;
				break;
		
		}
		return $resultado; 
	}
		echo "el restultado de: " , "$num1 $opera $num2  = ".$resu=calculadora($num1, $num2, $opera);
    
?>
