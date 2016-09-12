<?php


	$numero1=$_POST['numero1'];
	$num1=(int)$numero1;

	$numero2=$_POST['numero2'];
	$num2=(int)$numero2;

	$numero3=$_POST['numero3'];
	$num3=(int)$numero3;

	$numero4=$_POST['numero4'];
	$num4=(int)$numero4;

	$numero5=$_POST['numero5'];
	$num5=(int)$numero5;
	

    $resul= array($num1, $num2, $num3, $num4, $num5, );
    arsort($resul);
    	foreach ($resul as $resultado =>$total) {
    		echo "$total <br>";
    	}
?>
