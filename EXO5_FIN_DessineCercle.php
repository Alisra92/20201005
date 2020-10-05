<?php
require "EXO5_DEB_DefinitionFigures.php";

class dessineCercle {

public $blue ;

public $cercles = array() ;

// Constructeur de cercles


function dessineMoi() {

    $canvas = imagecreatetruecolor(800, 800) ;


    // Cf documentation

    header('Content-Type: image/png');

    imagepng($canvas);
    imagedestroy($canvas);
}

}

// création de 2 points , par exemple 100,300 et 300,400


// création de 2 cercles


// création et affichage du dessin

?>
