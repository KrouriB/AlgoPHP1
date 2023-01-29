<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.<br>
<br>$p1 = new Personne("DUPONT","Michel", "1980-02-19");
<br>$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");</p>

<h2>Résultat</h2>

<?php

class Personne{
    public string $nom;
    public string $prenom;
    public DateTime $birthday;

    public function __construct($nom, $prenom, $birthday){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birthday = new DateTime($birthday);
    }

    public function calcAge(){
        $today = new DateTime();
        $age = date_diff($this->birthday,$today);
        return $age->format('%y ans<br>');
    }

    public function infoP(){
        $display = "";
        $display .= $this->nom;
        $display .= " ";
        $display .= $this->prenom;
        $display .= " a ";
        $display .= self::calcAge();
        echo $display;
    }


}
$p1 = new Personne("DUPONT","Michel", "1980-02-19");
$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");
$p1->infoP();
$p2->infoP();

?>