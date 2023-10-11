<?php

echo "Saisir la vitesse :\n" ;
$vitesseSaisie= rtrim( fgets( STDIN ) ) ;

if($vitesseSaisie > 0){
	echo "Vitesse: $vitesseSaisie noeud.\n";
}
else{
	echo "Vitesse : 0 noeud \n" ;
}



?>
