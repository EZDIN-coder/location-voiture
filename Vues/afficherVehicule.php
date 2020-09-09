<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marque</th>
        <th scope="col">Modele</th>
        <th scope="col">Couleur</th>
        <th scope="col">Immatriculation</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
    foreach ($affichage as $vehicule){
      echo "<tr>";
      echo "<td>".$vehicule->getId_Vehicule() ."</td>"; 
      echo "<td>".$vehicule->getMarque() ."</td>"; 
      echo "<td>".$vehicule->getModele() ."</td>"; 
      echo "<td>".$vehicule->getCouleur() ."</td>"; 
      echo "<td>".$vehicule->getImmatriculation() ."</td>"; 
     
      echo "<td><img src ='./Ressources/img/modif.png' width='20'></td>";
     
      echo "<td><img src ='./Ressources/img/suppression.png' width='20'></td>";
      
      echo "</tr>";


    }

    
    ?>
    </tbody>
  </table>