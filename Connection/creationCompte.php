<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleConnection.css">
    <title>Crée un compte</title>
</head>
<body>
        <div id="container">
            <!-- zone de connexion -->
       
            <form action="CreateAccount.php" method="POST">
                <h1 id="centrer">Crée un compte</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label><b>Email</b></label>
                <input type="email" placeholder="Entrez un email" name="email" required>

                <input type="submit" id='submit' value='LOGIN' >

                <a href="connection.php">Crée un compte</a>
            </form>
        </div>
</body>
</html>