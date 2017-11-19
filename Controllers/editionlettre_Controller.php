<?php
    // Connexion à la base de données
    include_once('../Models/connexion_Model.php');
    //Chargement de la page de connexion
    include_once('../Views/accueil_view.php');
    //Recuperation des données
 
    $getnom= htmlspecialchars($_GET['nomdutilisateur']);
    $getprenom= htmlspecialchars($_GET['prenomdutilisateur']);
    //echo "Bonjour ". $getnom. " " . $getprenom . " !";
    

    //Recuperation des donnees dans la base.
    $reponse = $bdd->query('SELECT nom, prenom FROM user');
        
    while ($donnees = $reponse->fetch())
        {
            $getnom_b=$donnees['nom'];
            $getprenom_b= $donnees['prenom'];
            if(($getnom==$getnom_b)&&($getprenom==$getprenom_b))
                {
                   //echo "<a href='../Views/edition_view.php' target='_blank'> Editer votre lettre</a>";
                    //include_once('../Views/edition_view.php');
                   // require ('../Views/edition_view.php');
                    header('location:../Views/edition_view.php');
                }
        }
        
    $reponse->closeCursor();
  
     

?>
