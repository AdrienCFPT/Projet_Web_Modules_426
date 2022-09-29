<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
            $servername = 'localhost';
            $username = 'adriengvn';
            $password = 'root';
            
            //On établit la connexion
            $conn = new PDO("mysql:host=$servername;dbname=Connection", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                    //$lastupdated = date(/*'Y-m-d H:i:s'*/'2018-12-05 12:39:16');
                    $date = new DateTime();
                    $lastupdated = $date->format('Y-m-d H:i:s');
                    $sql = "INSERT INTO information (nom_utilisateur_connect, date_connection)
                    VALUES ('$user', '$lastupdated')";
                    $conn->exec($sql);
                }
            ?>
            <META http-EQUIV="Refresh" CONTENT="5; url=../index.php?value=1">
            <h1 id="chronometre">5</h1>
        </div>
        <script src="../js/redirection.js"></script>
    </body>
</html>