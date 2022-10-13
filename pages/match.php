<?php
$changementPage = filter_input(INPUT_GET, "value", FILTER_VALIDATE_INT);
?>
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
    <header>
        <h1>KDAM</h1>
        <ul>
        <li><a href="../index.php">Homepage</a></li>
            <li><a href="./match.php">Match</a></li>
            <li><a href="./equipe.php">Equipe</a></li>
            <li><a href="./histoire.html">Histoire</a></li>
            <li><a href="./classement.html">Classement</a></li>
        </ul>
        <form action="Connection/connection.php" method="post">
             <?php
            if ($changementPage == 1) {
                echo "<img name=\"imgLogin\" id=\"imgLogin\" src=\"img/BonomeConnection.jpg\" alt=\"Connection\">";
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
        <h2 class="equipe">Match</h2>

        <article class="equipe">
            <div class="equipe">
                <p class="nom_equipe">Real Madrid</p>
                <p class="nom_equipe">Barcelone</p>   
                <p class="stade">Camp Nou</p>
                <p class="date">16 Mars 2023</p>
        </div>

        <article class="equipe">
            <div class="equipe">
                <p class="nom_equipe">Real Madrid</p>
                <p class="nom_equipe">Barcelone</p>   
                <p class="stade">Parc des princes</p>
                <p class="date">12 février 1987</p>
            </div>
            <?php
            $servername = 'localhost';
            $username = 'adriengvn';
            $password = 'root';
            
            //On établit la connexion
            $conn = new PDO("mysql:host=$servername;dbname=Jeudi_Database", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $matchQuery = 'SELECT equipeDomicile, equipeExterieur, stade, dateMatch FROM Matchs';
            $matchStatement = $conn->prepare($matchQuery);
            $matchStatement->execute();
            $match = $matchStatement->fetchAll();

            // On affiche chaque recette une à une
            foreach ($match as $match) {
            ?>
                <div class="equipe">
                <p class="nom_equipe"><?php echo $match['equipeDomicile'] ?></p>
                <p class="nom_equipe"><?php echo $match['equipeExterieur'] ?></p>   
                <p class="stade"><?php echo $match['stade'] ?></p>
                <p class="date"><?php echo $match['dateMatch'] ?></p>
            </div>
            <?php
            }
    ?>

        </article>
        <article class="creation">
            <button class="btnCreer">
                <a class="FakeCreation" href="formEquipe.php">Ajouter un Match</a>
            </button>
           
        </article>
        
    </main>
   
</body>

</html>