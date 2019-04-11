<?php

/*
nous allons utiliser des classes exterieurs à ce fichier
il est donc necessaire de les appeler.

nous n'utilisons pas les namespaces dans cet exercice
car nous n'avons pas d'autoloader

nous utilisons require_once car nous exigeons l'appel des fichiers
mais que nous ne voulons éviter que des classes soient appelées plusieurs fois
*/
require_once "Voiture.php";
require_once "Moto.php";


/*tests pour la moto*/
$maMoto = new Moto();
$maMoto->freiner();
$maMoto->faireWheeling();

/*tests pour la voiture*/
$maVoiture = new Voiture("electrique");
$maVoiture->accelerer();
$maVoiture->faireLePleinCarburant("diesel");
$maVoiture->faireLePleinCarburant("electrique");
