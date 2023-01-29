<h1>Exercice 1</h1>

<p>Soit la phrase «Notre formation DL commence aujourd'hui».
<br>Ecrire un algorithme permettant de compter le nombre de caractèrescontenus dans cette phrase (espaces inclus).</p>

<h2>Résultat</h2>

<?php

$ligne = "Notre formation DL commence aujourd'hui";
echo "La phrase « " . $ligne . " » contient " . strlen($ligne) . " caractères.";

?>