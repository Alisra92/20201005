<?php
/**
 * Created by PhpStorm.
 * User: Timothee
 * Date: 27/09/2019
 * Time: 10:49
 */
class Capitaine extends Marin {
    private $grade ;

    /**
     * Capitaine constructor.
     * @param $grade
     */
    public function __construct($nom, $fonction, $grade)
    {
        parent::__construct($nom, $fonction) ;
        $this->grade = $grade;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    public function commande(){
        echo "Je suis le Capitaine ".$this->getNom()." et c'est moi qui commande ! <BR>" ;
}

    public function__toString(){

    return parent::__toString()." et le grade est : ".$this->getGrade();

}

}