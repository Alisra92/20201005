<?php
class Eleve
{

public function travaille()
    {
    echo 'Vous travaillez dur ! Continuez comme ça';
    }

} // Ici l'accolade clôt la définition de la classe.

// ci dessous on utilise la classe , dans le même fichier
$eleveSerieux = new Eleve();

$eleveSerieux->travaille() ;

?>