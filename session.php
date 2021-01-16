

  <?php session_start();?>  <?php include("header.php");?>  <?php include("navAdmin.php");?>  
  <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Mot de passe</th>
      

    </tr>
  </thead>
  <tbody>
    <?php  

require_once'db.php';

    /*
          $databaseName = 'smartlady';
          $databaseUser = 'root';
          $databasePassword = 'root';
          $databaseHost = 'localhost';
          $conn =  myqli_query($databaseHost, $databaseUser, $databasePassword, $databaseName);
          
          // verification de la connexion 
          if ($conn) {​​​​​​​
            echo"a";
              //conexion echouer
              die("Connection echouer:" .$conn->connect_error);
          }​​​​​​​
          */

          //connexion reussi
          //echo "connexion reussi</br>";
          //recherche comment faire la selection avec pdo et recupére le resultat
          $req="SELECT nom,prenom,email,mot_de_passe as mot_de_passe FROM compte";
          $resultat = $conn->query($req);
          $infoAdmin = mysqli_fetch_assoc($resultat);
            while(isset($infoAdmin)){​​​​​​​
              echo"<tr>" ;
              echo"<td>".$infoAdmin['nom']."</td>";
              $_SESSION['nom de attribue']=valeur;
              echo"<td>".$infoAdmin['prenom']."</td>";
              echo"<td>".$infoAdmin['email']."</td>";
              echo"<td>".$infoAdmin['mot_de_passe']."</td>";
              echo"<td><a href='SupprimerClient.php?emailClient=".$infoAdmin["email"]."'>Supprimer</a>/<a href='a.php?emailClient=".$infoAdmin["email"]."'>Modifier</a> </td>";
              echo"</tr>";
              $infoAdmin = mysqli_fetch_assoc($resultat);
            }​​​​​​​
            ?></tbody>



    
      
  
</table>