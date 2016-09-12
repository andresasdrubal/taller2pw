<?php  
echo "<h3>Taller 2</h3><br>";
echo "1. Ciclo While<br><br>";


	echo "<br>a. Imprimir en pantalla los numeros del 1 al 10.<br>";
	$num = 1;
	while ($num <= 10) {
		echo "Numero: ".$num."<br>";
		$num ++;
	}

	//1.b..
	
	echo "<br>b. Sumar los números del 1 al 100<br><br>";

	$num1 = 0;
	$num2 = 0;
    
	while ($num1 <= 100) {
		$num2=$num2+$num1;
		
		$num1++;
	}echo $num2."<br>";
	//************************************
     
     //c
	echo "<br><br>c. Sumar los numeros pares del 1 al 50<br>";

	$pares = 0;
	$n=1;
	$resut;
    $imp=0;
	while ($n <= 50) {
		if ($n % 2 == 0) {
		
			 $pares =$pares+$n;
			
		} else {
		           $nimp;
			
		}
		$n++;
	}
	echo "la suma de los mumeros  es ".$pares;

	//d....

	echo "<br><br>. Sumar los numeros impares del 1 al 50<br>";

	$pares = 0;
	$n=1;
	$resut;
    $nimp=0;
	while ($n <= 50) {
		if ($n % 2 == 1) {
		
			 $nimp=$nimp+$n;
			
		} else {
		           
			$pares =$pares+$n;
		}
		$n++;
	}
	echo "la suma de los mumeros  es ".$nimp;

?>