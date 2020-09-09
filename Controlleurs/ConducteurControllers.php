<?php

require_once './Models/Conducteur.php';

class ConducteurControllers
{
    public function ajouterConducteur()
    {

        echo ("Mon role est d'ajouter des conducteurs en base");
        $conducteur = new Conducteur();
   
        require_once "./Vues/ajouterConducteur.html";


      if(isset($_POST['submit'])){

        $nom =  $conducteur->setNom($_POST['nom']);
        $prenom =  $conducteur->setPrenom($_POST['prenom']);
        
        
        $conducteur->insert($nom,$prenom);

        // var_dump('je soumets le form');
        // die;
       

      }


    }
   
  public function afficherConducteur (){

    $conducteur = new Conducteur();
    $affichage = $conducteur->list();
    
   require_once "./Vues/afficherConducteur.php";

  }

       
}

?>