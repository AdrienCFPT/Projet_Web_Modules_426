<!-- <?php
$nom_equipe = filter_input(INPUT_POST, "nom_equipe", FILTER_UNSAFE_RAW);
$changementPage = filter_input(INPUT_GET, "value", FILTER_VALIDATE_INT);
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="equipe">
    <!-- <?php
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
            $sth->execute(array(':nom_equipe'=>$_POST['nom_equipe']));
            $row = $sth->fetch(PDO::FETCH_NUM);
                if ($row[0] === 0) {
                    $sql = "INSERT INTO Equipe (nom_equipe)
                    VALUES ('$nom_equipe')";
                    $conn->exec($sql);
                    $sql = "";
                    $nom_equipe = "";
            
            }
            else {
                echo "<h1> ERREUR </h1>";
            }
        }
            // On affiche chaque recette une à une
            foreach ($equipe as $equipe) {
            ?>
            <p><?php echo $equipe['nom_equipe']; ?></p>
            <?php
            }
    ?> -->
    <header>
        <h1>KDAM</h1>
        <ul>
            <li><a href="../index.php?value= <?php echo $changementPage?>">Homepage</a></li>
            <li><a href="./match.php">Match</a></li>
            <li><a href="./equipe.php">Equipe</a></li>
            <li><a href="./histoire.html">Histoire</a></li>
            <li><a href="./classement.html">Classement</a></li>
        </ul>
        <form action="../Connection/connection.php" method="post">
            <?php
            if ($changementPage == 1) {
            echo "<img name=\"imgLogin\" id=\"imgLogin\" src=\"../img/BonomeConnection.jpg\" alt=\"Connection\">";
            }
            else {
            echo "<button type=\"submit\" id=\"btnlogin\">Login</button>";
            }
            ?>
            <div id="langue">
                <a href="indexEn.html">EN</a>
                <p>|</p>
                <a href="index.html">FR</a>
            </div>
        </form>
    </header>
    <br>
    <main class="equipe">
        <h2 class="equipe">Equipe</h2>

        <article class="equipe">
        <div class="equipe">
            <p class="nom_equipe">Suisse</p>
            <p class="coach">Murat Yakin</p>   
            <p class="date_creation">1955</p>
        </div>
        <?php
            $servername = 'localhost';
            $username = 'adriengvn';
            $password = 'root';
            
            //On établit la connexion
            $conn = new PDO("mysql:host=$servername;dbname=Jeudi_Database", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqlQuery = 'SELECT nom_equipe, NomEntraineur, dateX FROM Equipe';
            $equipeStatement = $conn->prepare($sqlQuery);
            $equipeStatement->execute();
            $equipe = $equipeStatement->fetchAll();

            // On affiche chaque recette une à une
            foreach ($equipe as $equipe) {
            ?>
            <div class="equipe">
            <p class="nom_equipe"><?php echo $equipe['nom_equipe'];?></p>
            <p class="coach"><?php echo $equipe['NomEntraineur'];?></p>   
            <p class="date_creation"><?php echo $equipe['dateX'];?></p>
            </div>
            <?php
            }
    ?>

        </article>
        <article class="creation">
        <?php if ($changementPage == 1) {
            ?>
                <button class="btnCreer">
                <a class="FakeCreation" href="formEquipe.php">Ajouter une équipe</a>
                </button>
                <?php
            } ?>         
        </article>
        
    </main>
   
</body>

</html>