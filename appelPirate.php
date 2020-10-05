<?php
/**
 * Created by PhpStorm.
 * User: Timothee
 * Date: 27/09/2019
 * Time: 10:13
 */
// Your custom class dir

require "autoload.php" ;

echo Marin::quiSuisJe();
$gentilMarin = new Marin("Robert", "prof") ;
// echo "$gentilMarin" ;

$robert = new Capitaine("Robert", "prof", "senior") ;
$robert->commande() ;

// echo "$robert" ;

