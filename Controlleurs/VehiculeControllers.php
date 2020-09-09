<?php

require_once './Models/Vehicule.php';

class VehiculeControllers
{
    public function ajouterVehicule()
    {

        echo ("Mon role est d'ajouter des vehicules en base");
        $vehicule = new Vehicule();
   
        require_once "./Vues/ajouterVehicule.html";


      if(isset($_POST['submit'])){

        $marque =  $vehicule->setMarque($_POST['marque']);
        $modele =  $vehicule->setModele($_POST['modele']);
        $couleur =  $vehicule->setCouleur($_POST['couleur']);
        $immatriculation =  $vehicule->setImmatriculation($_POST['immatriculation']);
        
        
        $vehicule->insert( $marque,$modele,$couleur,$immatriculation);

        // var_dump('je soumets le form');
        // die;
       

      }


    }
   
  public function afficherVehicule (){

    $vehicule = new Vehicule();
    $affichage = $vehicule->list();
    
   require_once "./Vues/afficherVehicule.php";

  }

       
}

?>