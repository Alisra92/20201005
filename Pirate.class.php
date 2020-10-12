<?php

class Pirate extends Marin implements Piraterie
{
    private $degreSauvagerie ;

    /**
     * Pirate constructor.
     * @param $degreSauvagerie
     */
    public function __construct($nom,$fonction,$degreSauvagerie)
    {
        parent::__construct($nom,$fonction);
        $this->degreSauvagerie = $degreSauvagerie;
    }

    /**
     * @return mixed
     */
    public function getDegreSauvagerie()
    {
        return $this->degreSauvagerie;
    }

    /**
     * @param mixed $degreSauvagerie
     */
    public function setDegreSauvagerie($degreSauvagerie)
    {
        $this->degreSauvagerie = $degreSauvagerie;
    }

    public function pillage(Navire $navire)
    {
        if ($this->getDegreSauvagerie() > 50)
        {
            $navire->setEquipage(array());
        }

    }



}