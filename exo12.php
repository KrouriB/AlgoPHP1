<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)<br>
<br>Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG<br>
<br>Variante: trier d’abord le tableau par ordre alphabétique du prénom</p>

<h2>Résultat</h2>

<?php

$tab = ["Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG"];
foreach ($tab as $element => $langue) {
	echo "<br>";
	switch ($langue) {
		case "FRA":
			echo "Salut " . $element;
			break;
		case "ESP":
			echo "Hola " . $element;
			break;
		case "ENG":
			echo "Hi " . $element;
			break;
	}
}
ksort($tab);
echo "<br>";
foreach ($tab as $element => $langue) {
	echo "<br>";
	switch ($langue) {
		case "FRA":
			echo "Salut " . $element;
			break;
		case "ESP":
			echo "Hola " . $element;
			break;
		case "ENG":
			echo "Hi " . $element;
			break;
	}
}

?>