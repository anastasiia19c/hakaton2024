<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../connexion"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleChanson.css"></link>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>Chanson</title>
</head>
<body>
    <header>
        <a href="../../../back/controller/logout.php">Se déconnecter</a>
    </header>

    <main>
        <div>
            <h2>Poster une chanson</h2>
            <form action="../../../back/controller/chansonController.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="nom">Nom de la chanson :</label>
                    <input id="nom" name="nom" type="text" required>
                </div>
                <div>
                    <label for="file">Fichier audio ou vidéo :</label>
                    <input id="file" name="file" type="file" accept="audio/*,video/*" required>
                </div>
                <div>
                    <button type="submit">Poster</button>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div>
            <h3>Hackathon 2024</h3>
        </div>
    </footer>
</body>
</html>
