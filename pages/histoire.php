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
    <link rel="stylesheet" href="../css/histoire.css">
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
                <a href="">EN</a>
                <p>|</p>
                <a href="">FR</a>
            </div>
        </form>
    </header>
    <main>
        <div>
            <p>La création de la Coupe du monde de football trouve son origine en 1904 lors de la création de la
                Fédération
                internationale de football association (FIFA) qui regroupe les Pays-Bas, la Belgique, la Suède, le
                Danemark,
                la Suisse, l'Espagne et la France. Lors d'une première assemblée, il est décidé d'organiser une
                compétition
                internationale en Suisse, qui sera refusée par les britanniques. Le premier tournoi mondial officiel de
                football à lieu lors des Jeux olympiques à partir de 1908. Ce n'est qu'en 1930, sous l'impulsion de son
                président, Jules Rimet, que la FIFA inaugurera la Coupe du monde de football.</p>
        </div>
        <div>
            <p> La Coupe du monde de football 2022 est la 22e édition de la Coupe du monde de football, compétition
                organisée
                par la FIFA et qui réunit les meilleures sélections nationales. Elle se déroulera au Qatar du 20
                novembre au
                18
                décembre 2022, jour de la fête nationale du Qatar et une semaine avant Noël, avec une estimation du
                marché
                télévisuel potentiel à 3,2 milliards de téléspectateurs. La période inédite à laquelle se déroulera le
                tournoi
                est liée au climat du Qatar et aux trop fortes chaleurs y régnant, particulièrement aux mois où se
                déroule
                habituellement la compétition : juin et juillet.</p>
        </div>
        <div>
            <p>
                La présence du Qatar, qualifié d'office en tant que pays hôte de la compétition, perpétue la tradition
                des
                équipes faisant leur apparition pour la première fois dans l'histoire de la Coupe du monde même s'il
                s'agit
                de
                la première fois qu'aucune nouvelle nation ne se qualifie sur le terrain. Dépourvu d'infrastructures
                sportives
                adaptées, l'État qatari doit engager de grands chantiers de construction qui soulèvent de fortes
                critiques.
                Plus
                de 37 ouvriers étrangers trouvent la mort sur les chantiers du Mondial 2022 selon les sources
                gouvernementales,
                un chiffre que de nombreuses organisations et journalistes estiment fortement sous-évalué.</p>
        </div>

        <div>
            <p>La Coupe du monde de 2022 est la septième et dernière édition du Mondial à compter 32 participants
                (depuis
                1998). En 2018, la FIFA envisage cependant la possibilité d'anticiper le passage du tournoi à 48 équipes
                prévu
                pour 2026 et de l'appliquer en 2022, mais elle renonce à cette idée dès le printemps 2019 en raison
                de
                trop
                grandes difficultés à surmonter pour modifier et adapter une organisation initialement prévue pour
                accueillir 32
                équipes et non 48. En novembre 2021, l'équipe du Brésil se qualifie et demeure la seule sélection à
                avoir
                disputé l'intégralité des phases finales. Avec l'équipe Auriverde cinq fois titrée, tous les champions
                du
                monde,
                sauf l'Italie éliminée en barrages, ont décroché leur place : Allemagne, Angleterre, Espagne, France,
                Argentine
                et Uruguay. La Russie, engagée dans les barrages, est exclue de la compétition par la FIFA à la suite de
                l'invasion de l'Ukraine par l'armée russe.</p>
        </div>


        <div id="tirage"><p>Le tirage au sort des poules du premier tour de la phase finale a eu lieu le 1er avril à Doha.</p></div>
        <div id="linksrc"><a href="https://fr.wikipedia.org/wiki/Coupe_du_monde_de_football_2022">Source du texte : Wikipédia</a></div>
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