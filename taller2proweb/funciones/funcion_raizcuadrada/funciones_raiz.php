<?php


	$numero1=$_POST['numero1'];
	$num1=(float)$numero1;

	


	function raiz_cuadrada($n1){
		$raiz_cuadra= sqrt($n1);
		return $raiz_cuadra; 
	}
		$resultado=raiz_cuadrada($num1);

		echo "la raiz cuadrada del numero ".$num1. " = " ,$resultado, "<br>";

	


    
?>
