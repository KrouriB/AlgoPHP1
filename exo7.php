<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:<br>
	<li>Poussin: entre 6 et 7 ans</li>
	<li>Pupille: entre 8 et 9 ans</li>
	<li>Minime: entre 10 et 11 ans</li>
	<li>Cadet: à partir de 12 ans</li>
	<li>Si la catégorie n’est pas gérée, merci de le préciser.</li>
</p>

<h2>Résultat</h2>

<?php

$age = rand(2, 17);
switch ($age) {
	case $age < 6:
		$categorie = "trop jeune";
		break;
	case $age >= 6 and $age <= 7:
		$categorie = "Poussin";
		break;
	case $age >= 8 and $age <= 9:
		$categorie =  "Pupille";
		break;
	case $age >= 10 and $age <= 11:
		$categorie = "Minime";
		break;
	case $age > 11:
		$categorie = "Cadet";
		break;
}
if ($categorie == "trop jeune") {
	echo "<br>L’enfant qui a " . $age . " ans n'appartient à aucune catégorie car trop jeune";
} else {
	echo "<br>L’enfant qui a " . $age . " ans appartient à la catégorie « " . $categorie . " »";
}

?>