<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

$leformat = new IntlDateFormatter('fr_FR', IntlDateFormatter::SHORT, IntlDateFormatter::NONE); //formater la date
$today = new DateTime(); //création date actuelle
$anniv = new DateTime("1985-01-17"); //création date de l'anniversaire
$interval = date_diff($anniv, $today); // différence de de temps entre les 2 dates
echo $interval->format('%y ans'); // afficher différence de temps en lui appliquant un certain format

?>