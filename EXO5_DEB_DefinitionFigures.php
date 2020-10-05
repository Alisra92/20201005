<?php

class Point {
private $abscisse;
private $ordonnee;

function __construct($uneAbscisse, $uneOrdonnee)
{
  $this->abscisse = $uneAbscisse ;
  $this->ordonnee = $uneOrdonnee;
}

function getAbscisse(){
  return $this->abscisse ;
}

function getOrdonnee(){
  return $this->ordonnee ;
}


}

class Rectangle {
private $pointHautGauche;
private $pointBasDroite;

function __construct($premierPoint, $deuxiemePoint)
{
  $this->pointHautGauche = $premierPoint ;
  $this->pointBasDroite = $deuxiemePoint;
}

function getPointHautGauche() {
  return $this->pointHautGauche ;
}

function getPointBasDroite() {
  return $this->pointBasDroite ;
}


}

class Cercle {
    private $pointCentre;
    private $rayon ;

    function __construct ($point, $rayon){
        $this->pointCentre = $point ;
        $this->rayon = $rayon;
    }


    function getPointCentre(){
        return $this->pointCentre;
    }

    function getRayon(){
        return $this->rayon ;
    }

   // Calcul du périmètre


    // Calcul de la surface


}


?>
