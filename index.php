<?php

require_once 'Vues/header.html';

require_once 'Controlleurs/ConducteurControllers.php';
require_once 'Controlleurs/VehiculeControllers.php';

// $conducteur = new ConducteurControllers();

// if (isset($_GET['action'])){

//   if (isset($_GET['action']) == 'ajouter'){

//    // var_dump('ajouter');

//     $conducteur->ajouterConducteur();
//   }


// }
// else{

//   $conducteur->afficherConducteur();
// }

$vehicule = new VehiculeControllers();

if (isset($_GET['action'])){

  if (isset($_GET['action']) == 'ajouter'){

   // var_dump('ajouter');

    $vehicule->ajouterVehicule();
  }


}
else{

  $vehicule->afficherVehicule();
}

?>