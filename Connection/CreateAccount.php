<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            $servername = 'localhost';
            $username = 'adriengvn';
            $password = 'root';
            
            //On établit la connexion
            $conn = new PDO("mysql:host=$servername;dbname=Connection", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $username = filter_input(INPUT_POST, "username", FILTER_UNSAFE_RAW);
            $password = filter_input(INPUT_POST, "password", FILTER_UNSAFE_RAW);

            echo "Bonjour $username, merci d'avoir crée un compte. Vous êtes maintenant connecté";
            $sql = "INSERT INTO utilisateur (nom_utilisateur, mot_de_passe)
            VALUES ('$username', '$password')";
            $date = new DateTime();
            $lastupdated = $date->format('Y-m-d H:i:s');
            $sql1 = "INSERT INTO information (nom_utilisateur_connect, date_connection)
            VALUES ('$username', '$lastupdated')";
            $conn->exec($sql);
            $conn->exec($sql1);
            ?>
            <META http-EQUIV="Refresh" CONTENT="5; url=../index.php?value=1">
            <h1 id="chronometre">5</h1>
        <script src="../js/redirection.js"></script>
</body>
</html>