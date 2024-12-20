<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../../../back/modeles/Chanson.php';

$chanson = new Chanson();
$allValidChansons = $chanson->getValidSongs();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Vote</title>
</head>
<body>
    <header>
         <nav class="navbar">
        <a href="../../../back/controller/logout.php" class="btn">Se déconnecter</a>
        <ul>
        <li><a href="../accueil/index.php" class="btn">Accueil</a></li>
            <li><a href="../vote/vote.php" class="btn">Vote</a></li>
            <li><a href="../chanson/indexChanson.php" class="btn">Ajouter une chanson</a></li>
            <li><a href="../classement/classement.php" class="btn">Classement</a></li>
        </ul>
    </nav>
    </header>
    <main class="vote">
        <div class="container">
        <h1>Votez pour la meilleure chanson de Noël 2024</h1>
        <h2>Liste des chansons de Noël</h2>
            <ul>
                <?php
                require_once '../../../back/controller/voteController.php';
                $chansons = getChansons(); 
                foreach ($allValidChansons as $chanson) {
                    $audioUrl = $chanson['chemin'];  
                    echo "<li>
                        <h3>{$chanson['nom']}</h3>
                        <p>Nombre de votes : {$chanson['vote']}</p>
                        <audio controls>
                            <source src='../{$audioUrl}' type='audio/mpeg'>
                            Votre navigateur ne supporte pas l'élément audio.
                        </audio>
                        <form method='POST' action='../../../back/controller/voteController.php'>
                            <input type='hidden' name='chanson_id' value='{$chanson['id']}'>
                            <button type='submit' name='vote'>Voter</button>
                        </form>
                    </li>";
                }
                ?>
            </ul>
        </div>    
    </main>
    <script src="app.js"></script>
</body>
</html>