<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$Notes = [rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20)];
$Moyenne = 0;
echo "Les notes obtenues par l’élève sont :";
foreach ($Notes as $note) {
	echo " " . $note;
	$Moyenne = $Moyenne + $note;
}
$Moyenne = $Moyenne / count($Notes);
echo "<br><br>Sa moyenne général est donc de " . round($Moyenne, 2);

?>