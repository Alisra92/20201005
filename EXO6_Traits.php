<?php

trait NomTrait {
private $nomLivre;

public function getNom() {
	return $this->nomLivre;
	}

public function setNom($leNom) {
	return $this->nomLivre = $leNom;
	}
}

class Livre {
use NomTrait ;


public function affiche()
{
	echo "le nom du livre est: " .$this->getNom()."<BR> " ;
	
}	

}

// Implémentation à ajouter ici, identique à celle avec une interface

?>