<?php
/**
 * Created by PhpStorm.
 * User: Timothee
 * Date: 27/09/2019
 * Time: 10:13
 */
// Your custom class dir

require "autoload.php" ;

/* echo Marin::quiSuisJe();
$gentilMarin = new Marin("Robert", "prof") ;
echo "$gentilMarin" ;

$robert = new Capitaine("Robert", "prof", "senior") ;
$robert->commande() ;

/*public function __toString(){
    return "Le nom est : ".$this->getNom." et la fonction est : ".$this->
}//

echo "$robert" ;*/

$robert = new Capitaine("Robert","prof","senior");
$isra = new Capitaine("Isra","élève","mousaillon");

$equipage=array();

$unNavire = new Navire($equipage,60,"Corvette");

$unNavire->ajouteMarin($robert);
$unNavire->ajouteMarin($isra);
$unNavire->ajouteMarin(new Marin("LetteVouetto","mousaillon"));

echo "Avant que le vilain pirate attaque ..."."<BR>";

echo $unNavire;

echo "Après l'attaque ..."."<BR>";

$BarbeNoire = new Pirate("BarbeNoire","Massacreur",60) ;
$BarbeNoire->pillage($unNavire);

echo $unNavire;
