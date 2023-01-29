<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>

<h2>Résultat</h2>

<?php

$apayer = rand(1, 2000);
echo "<br><br>la somme a payé est de " . $apayer . "€";
$averser = rand($apayer, $apayer * rand(2, 5));
echo "<br>la somme payé est de " . $averser . "€";
$reste = $averser - $apayer;
echo "<br>la somme a retourné est de " . $reste . "€";
$billet10 = intdiv($reste, 10);
$ModuloReste10 = fmod($reste, 10);
if ($ModuloReste10 >= 5) {
	$billet5 = intdiv($ModuloReste10, 5);
	$ModuloReste5 = fmod($ModuloReste10, 5);
	switch ($ModuloReste5) {     /* calcul des piece avec billet de 5 */
		case 0:
			$piece2 = 0;
			$piece1 = 0;
			break;
		case 1:
			$piece2 = 0;
			$piece1 = 1;
			break;
		case 2:
			$piece2 = 1;
			$piece1 = 0;
			break;
		case 3:
			$piece2 = 1;
			$piece1 = 1;
			break;
		case 4:
			$piece2 = 2;
			$piece1 = 0;
			break;
	}
} else {    /* calcul des piece sans billet de 5 */
	$billet5 = 0;
	switch ($ModuloReste10) {
		case 0:
			$piece2 = 0;
			$piece1 = 0;
			break;
		case 1:
			$piece2 = 0;
			$piece1 = 1;
			break;
		case 2:
			$piece2 = 1;
			$piece1 = 0;
			break;
		case 3:
			$piece2 = 1;
			$piece1 = 1;
			break;
		case 4:
			$piece2 = 2;
			$piece1 = 0;
			break;
	}
}
if ($billet10 > 1) {              /* x billets 10*/
	if ($billet5 == 1) {          /* 1 billet 5*/
		if ($piece2 == 2) {
			echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€,1 billet de 5€ et 2 pièces de 2€";
		} elseif ($piece2 == 1) {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€,1 billet de 5€ ,1 pièce de 2€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€,1 billet de 5€ et 1 pièce de 2€";
			}
		} else {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€,1 billet de 5€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€ et 1 billet de 5€";
			}
		}
	} else {                      /*pas de billet 5*/
		if ($piece2 == 2) {
			echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€ et 2 pièces de 2€";
		} elseif ($piece2 == 1) {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€ ,1 pièce de 2€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€ et 1 pièce de 2€";
			}
		} else {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de " . $billet10 . " billets de 10€";
			}
		}
	}
} elseif ($billet10 == 1) {        /*1 billet 10*/
	if ($billet5 == 1) {          /* 1 billet 5*/
		if ($piece2 == 2) {
			echo "<br><br>la somme retourné est de 1 billet de 10€,1 billet de 5€ et 2 pièces de 2€";
		} elseif ($piece2 == 1) {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de 1 billet de 10€,1 billet de 5€ ,1 pièce de 2€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de 1 billet de 10€,1 billet de 5€ et 1 pièce de 2€";
			}
		} else {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de 1 billet de 10€,1 billet de 5€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de 1 billet de 10€ et 1 billet de 5€";
			}
		}
	} else {                      /*pas de billet 5*/
		if ($piece2 == 2) {
			echo "<br><br>la somme retourné est de 1 billet de 10€ et 2 pièces de 2€";
		} elseif ($piece2 == 1) {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de 1 billet de 10€ ,1 pièce de 2€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de 1 billet de 10€ et 1 pièce de 2€";
			}
		} else {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de 1 billet de 10€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de 1 billet de 10€";
			}
		}
	}
} else {                          /*pas de billet 10*/
	if ($billet5 == 1) {          /* 1 billet 5*/
		if ($piece2 == 2) {
			echo "<br><br>la somme retourné est de 1 billet de 5€ et 2 pièces de 2€";
		} elseif ($piece2 == 1) {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de 1 billet de 5€ ,1 pièce de 2€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de 1 billet de 5€ et 1 pièce de 2€";
			}
		} else {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de 1 billet de 5€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de 1 billet de 5€";
			}
		}
	} else {                      /*pas de billet 5*/
		if ($piece2 == 2) {
			echo "<br><br>la somme retourné est de 2 pièces de 2€";
		} elseif ($piece2 == 1) {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de 1 pièce de 2€ et 1 pièce de 1€";
			} else {
				echo "<br><br>la somme retourné est de 1 pièce de 2€";
			}
		} else {
			if ($piece1 == 1) {
				echo "<br><br>la somme retourné est de 1 pièce de 1€";
			} else {
				echo "<br><br>il n'y a pas de somme a retourné";
			}
		}
	}
}

?>