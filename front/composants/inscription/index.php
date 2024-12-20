<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form>
            <label for="nom">Nom :</label> 
            <input type="text" id="nom" placeholder="Nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" placeholder="Prénom" required>

            <label for="date_naissance">Date de naissance :</label>
            <input type="date" id="date_naissance" required>

            <label for="adresse_postale">Adresse postale :</label>
            <input type="text" id="adresse_postale" placeholder="Adresse e-mail" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" placeholder="Adresse e-mail" required>

            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" placeholder="Pseudo" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" placeholder="Mot de passe" required>

            <button type="submit">S'inscrire</button>
        </form>
        <a class ="lien" href = "../connexion" >Se connecter</a>
    </div>
    <script src="app.js"></script>
</body>
</html>
