<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Se connecter</h1>
        <form action="../../../back/controller/connexionController.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se Connecter</button>
        </form>
        <p>Pas encore de compte ?</p>
        <a href="../inscription">Créer un compte</a>
    </div>
</body>
</html>
