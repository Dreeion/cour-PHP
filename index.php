<?php





// --- Débugage ---
/*
	var_dump(", le pauvre ");//message pour l'utilisateur
	var_dump('l\'appel');//échapper un caractère
	var_dump('Warning');//message d'alerte
	var_dump($name);//débuguer une variable
	var_dump("$name, le pauvre ");
	var_dump ($T[2]);
*/

// --- Déclaration de variable ---
$a = 10;
$b = 8;
$c = $a + $b;
$name = "Bob est un homme";
$T = array(1,"il est pas très très beau","RIP",4,5,6,7,8,9,10);
$list = array (100,200,300,4452,5345,643);
// --- Setup ---
/*
 echo "$name";
 if ($c>18){
 echo ", il a $c ans, il est donc majeur.";
 } 
 else if($c==18){
		echo ", il a $c ans, il vient de devenir majeur.";
} 
else if ($c<18){
	echo ", il a $c ans, il est donc mineur.";
}
 echo ($T[2]);
*/
 for ($i = 0; $i <= 5; $i++) {
	 echo ("$list[$i], ");
	 
 }
 echo "Le nombre de valeur est de $i";