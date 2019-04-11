<?php

/* On require Vehicule.php afin de pouvoir etendre de Vehicule */
require_once 'Vehicule.php';


/**
 * la classe voiture est une fille de véhicule (extends)
 * c'est pourquoi elle en récupere tous les attributs et méthodes
 */
class Voiture extends Vehicule
{

  /*
  on déclare 1 attribut de classes
  il est privé afin qu'on ne puisse le manipuler
  qu'avec les setters et getters
  */
  private $typeDeCarburant;

  /*
  on redéfini le constructor car on veut que par défaut,
  une voiture ait un type de carburant
  */
  public function __construct(string $typeDeCarburantDuConstructeur)
  {
    /* on appelle le constructeur de véhicule*/
    parent::__construct();
    /* on ajoute les valeurs pour initialiser la voiture */
    $this->typeDeCarburant = $typeDeCarburantDuConstructeur;
  }

  /*
  Pour le voiture, il est décidé qu'on ne peut faire le plein que
  si le carburant proposé est le même que celui du véhicule.

  !!! on ne peut pas simplement réécrire faireLePlein en changeant
  !!! juste les parametres. Le nom de la méthode doit être différent
  !!! si les parametres sont différent de la méthode parente
  */
  public function faireLePleinCarburant($typeDeCarburantDeLaFonction)
  {
    if($typeDeCarburantDeLaFonction == $this->typeDeCarburant)
    {

      /* un echo pour avoir un affichage de ce qui se passe */
      echo "L'objet ".get_class($this)." va faire le plein de ".$typeDeCarburantDeLaFonction." <br>";

      /*
      la méthode faireLePlein est protected dans Vehicule
      si elle était private on ne pourrait pas y acceder depuis ici.
      */
      $this->faireLePlein();

      /*le return this permet de chainer les appels aux fonctions */
      return $this;

    }else {

      /* un echo pour avoir un affichage de ce qui se passe */
      echo "Le carburant ".$typeDeCarburantDeLaFonction." n'est pas le même
            que celui du véhicule ".$this->typeDeCarburant." <br>";

      /*le return this permet de chainer les appels aux fonctions */
      return $this;
    }
  }

}
