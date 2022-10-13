<?php
$nom_equipe = filter_input(INPUT_POST, "nom_equipe", FILTER_UNSAFE_RAW);
$changementPage = filter_input(INPUT_GET, "value", FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire</title>
    <link rel="stylesheet" href="../css/classement.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;1,200&display=swap" rel="stylesheet">
</head>

<body class="equipe">
    <header>
        <h1>KDAM</h1>
        <ul>
            <li><a href="../index.php?value=<?php echo $changementPage ?>">Homepage</a></li>
            <li><a href="./match.php?value=<?php echo $changementPage ?>">Match</a></li>
            <li><a href="./equipe.php?value=<?php echo $changementPage ?>">Equipe</a></li>
            <li><a href="./histoire.php?value=<?php echo $changementPage ?>">Histoire</a></li>
            <li><a href="./classement.php?value=<?php echo $changementPage ?>">Classement</a></li>
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
    <main>
        <img src="../img/Groupes-CDM-2022.jpg" alt="">

        <div id="titreT">
            <h1>Premier tour</h1>
        </div>

        <div>
            <p> Les équipes sont réparties dans 8 groupes de 4 équipes au premier tour. Le format est celui d'un tournoi
                toutes rondes simple : chaque équipe joue un match contre toutes les autres équipes de son groupe.</p>
        </div>

        <div>
            <p>Les deux premiers de chaque groupe sont qualifiés pour les huitièmes de finale.
                Le système suivant d'attribution de points est appliqué :</p>
            <p>3 points pour un match gagné ;</p>
            <p>1 point pour un match nul ;</p>
            <p>0 point pour un match perdu.</p>
        </div>

        <div>
            <p>Dans un groupe,lorsque des équipes se retrouvent à égalité de points, elles sont classées et départagées
                suivant :</p>
            <p> La meilleure différence de buts ;</p>
            <p> Le plus grand nombre de buts marqués ;</p>
            <p>Le plus grand nombre de points obtenus dans les matchs entre équipes concernées ;</p>
            <p>La meilleure différence de buts dans les matchs entre équipes concernées ; </p>
            <p>Le plus grand nombre de buts marqués dans les matchs entre équipes concernées ;</p>
            <div>
                <p> Le plus petit nombre de points disciplinaires sur l'ensemble des matchs du groupe suivant le barème
                    : 1
                    point pour un avertissement reçu par un joueur non suivi d'une expulsion, 3 pts pour le second
                    avertissement dans un match reçu par le même joueur entraînant une expulsion, 4 pts pour une
                    expulsion directe, 5 pts pour une expulsion directe d'un joueur déjà averti dans le match.
                </p>
            </div>

            <p> Si, à l'issue de la dernière journée, le départage des équipes à égalité dans un groupe est impossible
                suivant les critères ci-dessus et qu'une place qualificative ou le placement dans le tableau final est
                en jeu, alors un tirage au sort est effectué par la commission d'organisation de la FIFA.</p>

        </div>
        <div>
            <p>Pour la suite de la compétition :</p>
            <p>en huitièmes de finale, le premier d'un groupe affronte le deuxième du groupe voisin : 1er du groupe A
                contre 2e du groupe B, 1er du groupe B contre 2e du groupe A, idem entre les groupes C/D, E/F et G/H ;
                le tableau de la phase à élimination directe est établi de sorte que deux équipes issues d'un même
                groupe ne peuvent s'affronter à nouveau avant la finale ou le match pour la 3e place.</p>
        </div>
        <div id="linksrc"><a href="https://fr.wikipedia.org/wiki/Coupe_du_monde_de_football_2022">Source du texte : Wikipédia</a></div>
        <img src="../img/poule_classement.png" alt="">

    </main>
    <footer>
        <p>KDAM</p>
        <p>Fahad Shah</p>
        <p>Muthulingam Kajan</p>
        <p>Adrien gavin</p>
        <p>2022</p>

    </footer>
</body>

</html>