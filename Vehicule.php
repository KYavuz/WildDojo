<?php

/**
 * la classe vehicule est la classe mere dans notre petit exercice
 * c'est elle qui donne les attributs et methode de base des futurs motos
 * et voitures
 */
class Vehicule
{
  /*
  on déclare 2 attributs de classes
  ils sont privés afin qu'on ne puisse les manipuler
  qu'avec les setters et getters
  */
  private $vitesse;
  private $niveauDeCarburant;

  /*
  Le constructeur nous permet de définir les valeurs de bases
  des attributs de la classes.
  */
  function __construct()
  {
    $this->vitesse=0;
    $this->niveauDeCarburant=200;
    /* un echo pour avoir un affichage de ce qui se passe */
    echo "On contruit un objet de type ".get_class($this)." <br>";
  }

  public function accelerer()
  {
    /*
    lorsque le véhicule accelere, il gagne 10 de vitesse
    et perd 5 de carburant.
    On utilise les setters et getters pour manipuler les valeurs
    de l'objet afin d'être sur de ne pas ajouter une vitesse trop grande
    ou d'avoir un niveau de carburant trop bas.
    */
    $this->setVitesse($this->getVitesse()+10);
    $this->setNiveauDeCarburant($this->getNiveauDeCarburant()-5);

    /* un echo pour avoir un affichage de ce qui se passe */
    echo "L'objet ".get_class($this)." accelere <br>";
    echo "Sa vitesse est desormais de ".$this->getVitesse()." et son carburant de ".$this->getNiveauDeCarburant()." <br>";

    /*le return this permet de chainer les appels aux fonctions */
    return $this;
  }

  public function freiner()
  {
    /*
    lorsque le véhicule freine, il perd 10 de vitesse
    et perd 5 de carburant.
    On utilise les setters et getters pour manipuler les valeurs
    de l'objet afin d'être sur de ne pas ajouter une vitesse trop basse
    ou d'avoir un niveau de carburant trop bas.
    */
    $this->setVitesse($this->getVitesse()-10);
    $this->setNiveauDeCarburant($this->getNiveauDeCarburant()-5);

    /* un echo pour avoir un affichage de ce qui se passe */
    echo "L'objet ".get_class($this)." freine <br>";
    echo "Sa vitesse est desormais de ".$this->getVitesse()." et son carburant de ".$this->getNiveauDeCarburant()." <br>";

    /*le return this permet de chainer les appels aux fonctions */
    return $this;
  }

  protected function faireLePlein()
  {
    /*
    La méthode faire le plein permet de remettre le niveau d'essence au maximum
    On arrete la voiture avant de faire le plein
    */
    $this->setVitesse(0);
    $this->setNiveauDeCarburant(200);

    /* un echo pour avoir un affichage de ce qui se passe */
    echo "L'objet ".get_class($this)." fait le plein <br>";
    echo "Son carburant de ".$this->getNiveauDeCarburant()." <br>";

    /*le return this permet de chainer les appels aux fonctions */
    return $this;
  }

    /**
     * Pour récuperer la valeur de la vitesse
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Pour donner une valeur à la vitesse
     * on met des conditions afin d'éviter de dépasser les limites
     */
    public function setVitesse(int $vitesse)
    {
      if($vitesse >= 130)
      {
        $this->vitesse = 130;
      }else if ($vitesse <= 0)
      {
        $this->vitesse = 0;
      }else {
        $this->vitesse = $vitesse;
      }
        return $this;
    }

    /**
     * Pour récuperer la valeur de niveau de carburant
     */
    public function getNiveauDeCarburant()
    {
        return $this->niveauDeCarburant;
    }

    /**
     * Pour donner une valeur au niveau de carburant
     * on met des conditions afin d'éviter de dépasser les limites
     */
    private function setNiveauDeCarburant(int $niveauDeCarburant)
    {
      if($niveauDeCarburant>=200)
      {
        $this->niveauDeCarburant = 200;
      }else if ($niveauDeCarburant<=0)
      {
          $this->niveauDeCarburant = 0;
      }else {
        $this->niveauDeCarburant = $niveauDeCarburant;
      }
        return $this;
    }


}
