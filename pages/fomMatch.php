<?php
$stade = filter_input(INPUT_POST, "stade", FILTER_UNSAFE_RAW);
$nomEquipeDom = filter_input(INPUT_POST, "nomEquipeDom", FILTER_UNSAFE_RAW);
$NomEquipeExt = filter_input(INPUT_POST, "NomEquipeExt", FILTER_UNSAFE_RAW);
$dateMatch = filter_input(INPUT_POST, "dateMatch", FILTER_UNSAFE_RAW);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de match</title>
    <link rel="stylesheet" href="../css/add.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>

<body>

    <div style="display: flex; justify-content: center; align-items:center;">

        <div style="width: 45%;">
            <h1>Table <span style="color: red;">Match</span></h1>
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

                        <label for="nomEquipeDom">Equipe Domicile<span style="color: crimson;"> :</span></label><br>
                        <input type="text" id="nomEquipeDom" name="nomEquipeDom" placeholder="Manchester City"><br>

                        <label for="NomEquipeExt">Equipe exterieure<span style="color: crimson;"> :</span></label><br>
                        <input type="text" id="NomEquipeExt" name="NomEquipeExt" placeholder="Manchester United"><br>

                        <label for="stade">Stade<span style="color: crimson;"> :</span></label><br>
                        <input type="text" id="stade" name="stade" placeholder="Ethiad Stadium"><br>

                        <label for="dateMatch">Heure du match<span style="color: crimson;"> :</span></label><br>
                        <input type="date" id="dateMatch" name="dateMatch" placeholder=""><br>
                    </div>
                    <div class="column">
                    </div>
                </div>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span> <button type="submit">Ajouter des données</button>
            </div>
            </form>
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

            if ($nomEquipeDom != "") {
            /*$sth = $conn->prepare("SELECT count(*) FROM Match where 
            stade = '".$stade."'");
            $sth->fetch(PDO::FETCH_NUM);*/
            $sql = "INSERT INTO Matchs (stade, equipeDomicile, equipeExterieur, dateMatch, nomAjouterPersonne)
            VALUES ('$stade', '$nomEquipeDom', '$NomEquipeExt', '$dateMatch', '$user')";
            $conn->exec($sql);
            $sql = "";
            $nomEquipe = "";
            header('Location: match.html');
            }
    ?>
    <div id="rtrn">
        <a href="equipe.html">
            <span></span>   
            <span></span>
            <span></span>
            <span></span> Retour
        </a>
    </div>

</body>

</html>