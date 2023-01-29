<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$base = "Engage le jeu que je le gagne";
$passpace = str_replace(" ", "", $base);
$sansmaj = strtolower($passpace);
$palindrome = strrev($sansmaj);
echo "<br>" . $base;
if ($sansmaj == $palindrome) {
	echo "<br>la phrase est un palindrome";
} else {
	echo "<br>la phrase n'est pas un palindrome";
}

?>