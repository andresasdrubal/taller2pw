<?php


	$numero1=$_POST['numero1'];
	$num1=$numero1;

	$numero2=$_POST['numero2'];
	$num2=$numero2;


	function operation($n1,$n2){
		$potencia= pow($n1,$n2);
		return $potencia; 
	}
		$resultado=operation($num1,$num2);

		echo "".$num1." ^ " .$num2. " = " ,$resultado, "<br>";

	


    
?>
