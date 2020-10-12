<?php

class Navire
{
    private $equipage = array();
    private $taille;
    private $modele;

    /**
     * Navire constructor.
     * @param array $equipage
     * @param $taille
     * @param $modele
     */
    public function __construct(array $unParametreEquipage, $unParametreTaille, $unParametreModele)
    {
        $this->equipage = $unParametreEquipage;
        $this->taille = $unParametreTaille;
        $this->modele = $unParametreModele;
    }

    /**
     * @return array
     */
    public function getEquipage()
    {
        return $this->equipage;
    }

    /**
     * @param array $equipage
     */
    public function setEquipage($equipage)
    {
        $this->equipage = $equipage;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function ajouteMarin(Marin $unMarin)
    {

        // array_push( $this->equipage, $unMarin)

        $this->equipage[] = $unMarin;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        $aRetourner = "Le navire est de taille " . $this->getTaille() . " et son modèle est: " . $this->getModele() . "<BR>";

        foreach ($this->getEquipage() as $unMarin) {
            $aRetourner .= $unMarin;
        }
        return $aRetourner;


    }
}
