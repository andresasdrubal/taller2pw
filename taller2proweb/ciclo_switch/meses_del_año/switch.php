<?php
echo "<h3>Taller 2</h3><br>";
echo "1. Ciclo switch<br><br>";


switch (date("F")) {
	case "January":
		$mese="enero";
		break;
	case "Febrary":
		$mese="febrero";
		break;
	case "March":
		$mese="marzo";
		break;
	case "April":
		$mese="abril";
		break;
	case "May":
		$mese="mayo";
		break;
	case "June":
		$mese="junio";
		break;
	case "july":
		$mese="julio";
		break;
	case "August":
		$mese="agosto";
		break;
	case "September":
		$mese='septiembre';
		break;
		case "October":
		$mese="octubre";
		break;
		case "November":
		$mese="noviembre";
		break;
		case "December":
		$mese="diciembre";
		break;
	
	
	
}
 echo "el mes correspondiente es ".$mese;
	

?>