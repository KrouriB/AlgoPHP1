<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
<br> Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$taux = 100 / 15.24;
$franc = rand(101, 100000);
$euro = $franc / $taux;
echo "pour " . $franc . " Francs vous avez " . round($euro, 2) . "€";

?>