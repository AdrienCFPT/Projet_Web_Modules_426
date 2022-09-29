<?php
$nom_equipe = filter_input(INPUT_POST, "nom_equipe", FILTER_UNSAFE_RAW);
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
            $conn = new PDO("mysql:host=$servername;dbname=Jeudi_Database", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqlQuery = 'SELECT nom_equipe FROM Equipe';
            $equipeStatement = $conn->prepare($sqlQuery);
            $equipeStatement->execute();
            $equipe = $equipeStatement->fetchAll();

            if ($nom_equipe != "") {
            $sth = $conn->prepare("SELECT count(*) FROM Equipe where 
            nom_equipe = '".$nom_equipe."'");
            $sth->fetch(PDO::FETCH_NUM);
            $sql = "INSERT INTO Equipe (nom_equipe)
            VALUES ('$nom_equipe')";
            $conn->exec($sql);
            $sql = "";
            $nom_equipe = "";
            header('Location: index.php');
        }
            // On affiche chaque recette une à une
            foreach ($equipe as $equipe) {
            ?>
            <p><?php echo $equipe['nom_equipe']; ?></p>
            <?php
            }
    ?>
    <br>
    <form action="equipe.php" method="POST">
        <label for="nom_equipe">EQUIPE</label>
    <input type="text" name="nom_equipe" id="nom_equipe">
    <button type="submit">ENVOYER</button>
    </form>
</body>
</html>