<?php 
//theoreme
function hypotenuse($cote1,$cote2) {
// Si un triangle est rectangle, alors le carre de la longueur de l'hypoténuse est égal a la somme
// des carrés de longueurs des deux autres cotes
	if($cote1 && $cote2)
	{
		$hyp_carre=pow($cote1,2)+pow($cote2,2);
		$hyp=sqrt($hyp_carre);
		return $hyp;
	}
	else
	{
		return false;
	}
}
