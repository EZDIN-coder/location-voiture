<?php
class Vehicule {


private $id_Vehicule;
private $marque;
private $modele;
private $couleur;
private $immatriculation;


public function getID_Vehicule (){
    return $this->id_Vehicule;
}



public function getMarque (){
    return $this->marque;
}
public function setMarque ($marque){

    return $this->marque= $marque;
}
public function getModele (){
    return $this->modele;
}
public function setModele ($modele){

    return $this->modele= $modele;
}

public function getCouleur (){
    return $this->couleur;
}
public function setCouleur ($couleur){

    return $this->couleur= $couleur;
}
public function getImmatriculation (){
    return $this->immatriculation;
}
public function setImmatriculation ($immatriculation){

    return $this->immatriculation= $immatriculation;
}

public function getConnection(){
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=vtc',"root","");

}
catch ( PDOException $e){
  print "Erreur".$e->getMessage();
  
}
return $bdd;
}

public function insert($marque,$modele,$couleur,$immatriculation){

    $bdd = $this->getConnection();

    $sql = $bdd->prepare("INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES ('$marque','$modele','$couleur','$immatriculation')");

    var_dump($sql);
    echo "</br>";
    $sql->execute();
    
    if (!$sql->execute()){

        die("Oups, il y'a une erreur dans la requete");
    }
    header("Location: index.php");
}



public function list(){

    $bdd = $this->getConnection();

    $sql = $bdd->prepare("SELECT * FROM vehicule");

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, 'vehicule');
    return $result;
    
}
}

?>