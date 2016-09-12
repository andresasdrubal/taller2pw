<?php


	$numero1=$_POST['numero1'];
	$num_1=(float)$numero1;

	$numero2=$_POST['numero2'];
	$num_2=(float)$numero2;

	$denominador1=$_POST['denominador1'];
	$denomina=(float)$denominador1;

	$denominador2=$_POST['denominador2'];
	$denomina2=(float)$denominador2;

	$opera=$_POST['opera'];


	function calculadora_fraccionarios($num1, $num2, $dem1, $dem2, $op){
		switch ($op) {
			case '+':
				$num3 = $num1 * $dem2 + $num2 * $dem1;
				$dem3 = $dem1 * $dem2;
				echo " el resultado fraccion es: ",$num3,"/",$dem3;
				break;

				case '-':
				$num3 = $num1 * $dem2 -$num2 * $dem1;
				$dem3 = $dem1 * $dem2;
				echo " el resultado fraccion es: ",$num3,"/",$dem3;
				break;

				case '*':
				$dem3 = $dem1 * $dem2;
				$num3 = $num1 * $num2;			
				echo " el resultado fraccion es: ",$num3,"/",$dem3;
				break;

				case '/':
				$dem3 = $dem1 * $num2;
				$num3 = $num1 * $dem2;			
				echo " el resultado fraccion es: ",$num3,"/",$dem3;
				break;
		
		}
	}

$resultado=calculadora_fraccionarios($num_1, $num_2, $denomina, $denomina2, $opera);

echo"$resultado";
		

		
?>
