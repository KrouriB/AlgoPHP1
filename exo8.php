<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:<br>
<br>Remarque: proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>

<?php

$multiple = rand(1, 9);
echo "Table de $multiple :";
for ($i = 1; $i < 11; $i++) {
	echo "<br>$i * $multiple = " . $i * $multiple;
}

$number = rand(1, 9);
$i = 0;
echo "<br><br>Table de " . $number . " :";
while ($i < 10) {
	$i++;
	echo "<br>" . $number . " x " . $i . " = " . $number * $i;
}

?>