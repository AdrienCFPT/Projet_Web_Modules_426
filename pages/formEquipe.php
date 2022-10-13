<?php
$nomEquipe = filter_input(INPUT_POST, "nomEquipe", FILTER_UNSAFE_RAW);
$nomCoach = filter_input(INPUT_POST, "nomCoach", FILTER_UNSAFE_RAW);
$nbJoueurs = filter_input(INPUT_POST, "nbJoueurs", FILTER_UNSAFE_RAW);
$nom_equipe = filter_input(INPUT_POST, "nom_equipe", FILTER_UNSAFE_RAW);
$changementPage = filter_input(INPUT_GET, "value", FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InserationEquipe</title>
    <link rel="stylesheet" href="../css/add.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>

<body>

    <div style="display: flex; justify-content: center; align-items:center;">

        <div style="width: 45%;">
            <h1>Table <span style="color: red;">Equipe</span></h1>
        </div>


    </div>


    <div class="container-global">
        <div class="form-quizz">
            <div class="question-block">

                <h2>Remplissez le formulaire ci-dessous</h2>
                <br>
            <form method="post">
                <div class="row">
                    <div class="column">

                        <label for="nomEquipe">Nom Equipe<span style="color: crimson;"> :</span></label><br>
                        <input type="text" id="nomEquipe" name="nomEquipe" placeholder="Suisse"><br>

                        <label for="nomCoach">Nom Coach<span style="color: crimson;"> :</span></label><br>
                        <input type="text" id="nomCoach" name="nomCoach" placeholder="Murat Yakin"><br>

                        <label for="nbJoueurs">Date création <span style="color: crimson;"> :</span></label><br>
                        <input type="text" id="nbJoueurs" name="nbJoueurs" placeholder="1955"><br>
                    </div>
                    <div class="column">
                    </div>
                </div>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span> <button type="submit">Ajouter des données</button> 
                </form>
            </div>
        </div>
    </div>
    <?php
            $servername = 'localhost';
            $username = 'adriengvn';
            $password = 'root';
            
            //On établit la connexion
            $conn = new PDO("mysql:host=$servername;dbname=Jeudi_Database", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            /*session created*/
            session_start();
                $user = $_SESSION['username'];

            if ($nomEquipe != "") {
            $sth = $conn->prepare("SELECT count(*) FROM Equipe where 
            nom_equipe = '".$nom_equipe."'");
            $sth->fetch(PDO::FETCH_NUM);
            $sql = "INSERT INTO Equipe (nom_equipe, NomEtEquipeAjouter, NomEntraineur, dateX)
            VALUES ('$nomEquipe', '$user', '$nomCoach', '$nbJoueurs')";
            $conn->exec($sql);
            $sql = "";
            $nomEquipe = "";
            header("Location: equipe.php?value=$changementPage");
            }
    ?>
    <div id="rtrn">
        <a href="equipe.php?value=<?php echo $changementPage ?>">
            <span></span>   
            <span></span>
            <span></span>
            <span></span> Retour
        </a>
    </div>

</body>

</html>