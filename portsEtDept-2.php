<?php

echo strtolower("Saisir le nom du port :\n") ;
$portSaisie= strtolower(rtrim( fgets( STDIN ) )) ;

switch($portSaisie){
	case "quiberon":
		$nomDept="Morbihan";
		break;
	case "sauzon":
		$nomDept="Morbihan";
		break;
	case "le Palais":
		$nomDept="Morbihan";
		break;
	case "Concarneau":
		$nomDept="Finistère";
		break;
	case "douarnenez":
		$nomDept="Finistère";
		break;
	case "piriac-sur-Mer":
		$nomDept="Loire-Atlantique";
		break;
	case "pornic":
		$nomDept="Loire-Atlantique";
		break;
	case "ile-d'yeu":
		$nomDept="Vendée";
		break;
	default :
		$nomDept="inconnu";
}
if($nomDept=="inconnu"){
		echo "Port non recensé\n";
}
else{
	echo "Departement : $nomDept\n";
	}

?>
