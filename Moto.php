<?php

/* On require Vehicule.php afin de pouvoir etendre de Vehicule */
require_once "Vehicule.php";

/**
 * la classe moto est une fille de véhicule (extends)
 * c'est pourquoi elle en récupere tous les attributs et méthodes
 */
class Moto extends Vehicule
{

  /*
  il n'y a pas de constructor d'écrit car
  celui de véhicule est appelé automatiquement et qu'il suffit
  */

  /*
  la méthode faireWheeling sert juste à afficher "weee"
  */
  public function faireWheeling():self
  {
    /* un echo pour avoir un affichage de ce qui se passe */
    echo "Wheeeling de la ".get_class($this)." <br>";

    /*le return this permet de chainer les appels aux fonctions */
    return $this;
  }
}
