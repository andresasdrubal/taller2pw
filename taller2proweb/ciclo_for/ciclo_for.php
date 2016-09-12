	<?php  	
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
