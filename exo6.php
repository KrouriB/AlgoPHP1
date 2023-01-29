<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$prixHT = rand(1, 300);
$nbArticle = rand(1, 9);
$Tva = [1.2, 1.1, 1.055, 1.021];
$TvaP = ["20%", "10%", "5.5%", "2.1%"];
$appliquer = rand(0, 3);
$prixTTC = $prixHT * $Tva[$appliquer];
echo "<br>Prix unitaire de l'article : " . $prixHT . "€";
echo "<br>Quantité : " . $nbArticle;
echo "<br>Taux de TVA : " . $TvaP[$appliquer];
echo "<br>Le montant de la facture a régler est de : " . round($prixTTC * $nbArticle, 2) . "€";

?>