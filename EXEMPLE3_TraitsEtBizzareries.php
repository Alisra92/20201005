<?php

trait afficheMoi {
  public function __get( $uneVariable ) {
    if (isset($this->$uneVariable)) {
      return $this->$uneVariable;
    } else {
      trigger_error("tentative d acces à un attribut qui n'existe pas: $uneVariable in " . __CLASS__, E_USER_NOTICE);
      return null;
    }
  }
}

class PosePhoto {
  use afficheMoi;
  private $sourire = 'cheeeeeeese';
}

$pose = new PosePhoto();
echo $pose->sourire; // 
echo $pose->rire; //

?>