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






	//CICLO FOR:

	//a
	
	echo "<br>.Imprimir los números del 1 al 100 <br>";
	$c;
	for ($c=0; $c<=100; $c++)
		echo "<br>".$c;

  //b
	echo "<br>Imprimir las tablas de multiplicar de un número del 1 al 20<br>";

	$j=20;

	
	for ($i=1; $i<=20; $i++){
			echo $j. " * ".$i." = " .$i*$j;
			echo"<br>";
		}
		
		



   //C.....
	echo "<br>c. Solucionar el factorial de un número<br>";

	$n1= 5;
	$fac = 1;

	echo "Factorial ".$n1." = ";

	for ($i=1; $i<=$n1; $i++) { 
		$fac = $fac*$i;
	}
	
	echo $fac;



	//d.......

	echo "<br><br>d. Solucionar el numero de Fibonacci<br><br>";

	 $ant=0;
$actu=1; 
$b; 
 $numero=10; // este es el numero de veces que se va a repetir 
 $i; 
echo $ant." <br>"; 
for ($i=0; $i<$numero;$i++){ 
echo $actu." <br>" ; 
$b=$actu; 
$actu=$actu+$ant; 
$ant = $b; 
}



//b..
	echo "<br>Crear un programa que devuelva el código ascii de un número ingresado del 0 al 9 <br>";

	switch ($numero) {
		case 'acci':
				for($i=0; $i<=9 ; $i++ )
	
	   echo"El codigo ASCII de la numero" + $numero + " es: " + $i;
		
			break;
		
		
	}




	

?>