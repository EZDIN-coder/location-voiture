<?php
class Conducteur {


private $id_Conducteur;
private $nom;
private $prenom;


public function getID_Conducteur (){
    return $this->id_Conducteur;
}



public function getNom (){
    return $this->nom;
}
public function setNom ($nom){

    return $this->nom= $nom;
}

public function getPrenom (){
    return $this->prenom;
}
public function setPrenom ($prenom){

    return $this->prenom= $prenom;
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

public function insert($nom,$prenom){

    $bdd = $this->getConnection();

    $sql = $bdd->prepare("INSERT INTO Conducteur (nom, prenom) VALUES ('$nom','$prenom')");

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

    $sql = $bdd->prepare("SELECT * FROM Conducteur");

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, 'Conducteur');
    return $result;
    
}
}

?>