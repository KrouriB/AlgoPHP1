<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
<br>Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).</p>

<h2>Résultat</h2>

<?php

$sexe = ["M", "F"];
$sexe_personne = array_rand($sexe, 1); // fonction qui prend un nombre défini d'élement de manière aléatoire dans une liste 
$age = rand(16, 70);
if ($sexe_personne == 0) {
	$sexe_personne = "M";
} else {
	$sexe_personne = "F";
}
echo "<br>Age : " . $age;
echo "<br>Sexe : " . $sexe_personne;
if ($sexe_personne == "M") {
	if ($age <= 20) {
		echo "<br>La personne est non imposable";
	} else {
		echo "<br>La personne est imposable";
	}
} else {
	if ($age >= 18 and $age <= 35) {
		echo "<br>La personne est imposable";
	} else {
		echo "<br>La personne est non imposable";
	}
}

?>