<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'adriengvn';
    $db_password = 'root';
    $db_name     = 'Connection';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
   /*$servername = 'localhost';
   $username = 'adriengvn';
   $password = 'root';
   
   //On établit la connexion
   $db = new PDO("mysql:host=$servername;dbname=Connection", $username, $password);

   if(!$db){
         die("Error: Failed to connect to database!");
   }*/
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    //$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    //$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    $username = filter_input(INPUT_POST, "username", FILTER_UNSAFE_RAW);
    $password = filter_input(INPUT_POST, "password", FILTER_UNSAFE_RAW);
    

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>
