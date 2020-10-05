<?php
require "EXO5_DEB_DefinitionFigures.php";

class dessineRectangle {

public $rose ;

public $rectangles = array() ;

function __construct (... $listeRectangle) {
  $this->rectangles=$listeRectangle ;
}

function listeRectangles(){
  foreach ($this->rectangles as $rectangle){
    echo "$rectangle";
  }
}

function dessineMoi() {

  $canvas = imagecreatetruecolor(800, 800) ;
  $rose =  imagecolorallocate($canvas, 255, 105, 180) ;

    //inspirez vous du constructeur pour boucler sur des rectangles
    // et dessiner chacun des rectangles


header('Content-Type: image/jpeg');

imagejpeg($canvas);
imagedestroy($canvas);
}

}

// Créez 2 points et un rectangle



// Créez 2 autres points et un nouveau rectangle



// Créez un nouveau dessinRectangle avec 2 rectangles puis dessinez les



?>
