<?php
class Personnage
{
  private $_experience = 50;

  public function afficherExperience()
  {
    echo $this->_experience;
  }
  public function gagnerExperience()
  {
    $this->_experience = $this->_experience + 10;
  }
 } 

$perso = new Personnage;
$perso->gagnerExperience();
$perso->afficherExperience();
//echo $perso->_experience;
?>