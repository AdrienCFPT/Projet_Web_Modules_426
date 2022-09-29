<?php
$changementPage = filter_input(INPUT_GET, "value", FILTER_VALIDATE_INT)
?>
<!DOCTYPE html>
<html lang="fr">
<!-- 
        Projet: SCRUM
        Details: page index fr
        Date: 15.09.2022
        Auteurs: Muthulingam Kajan, Gavin Adrien,Shah Fahad
     -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;1,200&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>KDAM</h1>
        <ul>
            <li><a href="">Homepage</a></li>
            <li><a href="">Match</a></li>
            <li><a href="pages/equipe.html">Equipe</a></li>
            <li><a href="">Joueurs</a></li>
        </ul>
        <form action="Connection/connection.php" method="post">
            <!-- <?php
            if ($changementPage == 1) {
                echo "<img name=\"imgLogin\" id=\"imgLogin\" src=\"img/BonomeConnection.jpg\" alt=\"Connection\">";
            }
            ?> -->
            <button type="submit" id="btnlogin">Login</button>
            <div id="langue">
                <a href="indexEn.html">EN</a>
                <p>|</p>
                <a href="index.html">FR</a>
            </div>
        </form>
    </header>
    <main>
        <section id="winner">
            <img id="winnerImg" src="./img/france_cdm.jpg" alt="France">
        </section>
        <aside>
            <p>World cup winner:</p>
            <select name="winYear" id="winYear">
                <option value="2018" id="2018">2018</option>
                <option value="2014" id="2014">2014</option>
                <option value="2010" id="2010">2010</option>
                <option value="2006" id="2006">2006</option>
                <option value="2002" id="2002">2002</option>
            </select>
        </aside>
    </main>
    <footer>
    <p>KDAM</p>
    <p>Fahad Shah</p>
    <p>Muthulingam Kajan</p>
    <p>Adrien gavin</p>
    <p>2022</p>

    </footer>
    <script src="js/script.js"></script>
    <script src="js/redirection.js"></script>
    <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    <script>
        let list = document.querySelectorAll(".navigation li");


        function ActiveBtn() {
            list.forEach((item) =>
                item.classList.remove("active"));
            this.classList.add("active");
        }
        list.forEach((item) =>
            item.addEventListener("click", ActiveBtn))
    </script>
</body>

</html>