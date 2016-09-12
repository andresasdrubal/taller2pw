<?php


	$nombre1=$_POST['nombre1'];
	$nom1=$nombre1;

	$nombre2=$_POST['nombre2'];
	$nom2=$nombre2;

	$nombre3=$_POST['nombre3'];
	$nom3=$nombre3;
	
	$nombre4=$_POST['nombre4'];
	$nom4=$nombre4;

	$nombre5=$_POST['nombre5'];
	$nom5=$nombre5;


    $resul= array($nom1, $nom2, $nom3, $nom4, $nom5, );
    asort($resul);
    	foreach ($resul as $resultado =>$total) {
    		echo "$total <br>";
    	}
?>
