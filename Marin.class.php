<?php
/**
 * Created by PhpStorm.
 * User: Timothee
 * Date: 27/09/2019
 * Time: 10:01
 */
class Marin {
    private $nom ;
    private $fonction ;

    /**
     * Marin constructor.
     * @param $nom
     * @param $fonction
     */
    public function __construct($unParametreNom, $unParametreFonction)
    {
        $this->nom = $unParametreNom;
        $this->fonction = $unParametreFonction;
    }

    /**
     * @return mixed
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param mixed $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public static function quiSuisJe(){
        echo "Je suis un gentil marin <BR>" ;

}

    public function __toString(){
    return "Le nom est : ".$this->getNom()." et la fonction est : ".$this->getFonction();
}

}