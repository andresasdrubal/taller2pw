<?php 

$v=$_POST['vocal'];



switch ($v) {
	case 'a':
		echo"elcodigo es: 97";
		break;
	case 'e':
		echo"elcodigo es: 101";
		break;
	case 'i':
		echo"elcodigo es: 105";
		break;
	case 'o':
		echo"elcodigo es: 111";
		break;
	case 'u':
		echo"elcodigo es: 117";
		break;
	case 'A':
		echo"elcodigo es: 65";
		break;
	case 'E':
		echo"elcodigo es: 69";
		break;
	case 'I':
	    echo"elcodigo es: 73";
		break;
	case 'O':
		echo"elcodigo es: 99";
		break;
	case 'U':
		echo"elcodigo es: 85";
		break;
	default:
		echo "lo ingresado no corresponde a una vocal";
		break;
	
}





 ?>