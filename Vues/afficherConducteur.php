<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
    foreach ($affichage as $conducteur){
      echo "<tr>";
      echo "<td>".$conducteur->getId_Conducteur() ."</td>"; 
      echo "<td>".$conducteur->getPrenom() ."</td>"; 
      echo "<td>".$conducteur->getNom() ."</td>"; 
     
      echo "<td><img src ='./Ressources/img/modif.png' width='20'></td>";
     
      echo "<td><img src ='./Ressources/img/suppression.png' width='20'></td>";
      
      echo "</tr>";


    }

    
    ?>
    </tbody>
  </table>