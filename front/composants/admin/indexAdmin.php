<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../../../back/modeles/Chanson.php';

$chanson = new Chanson();
$allChansons = $chanson->getAllChansons();
?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styleAdmin.css"></link>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
        <title>Admin</title>
    </head>
    <body>
    <header>
        <a href="../../../back/controller/logout.php">Se déconnecter</a>
    </header>

    <main>
        <div>
            <h2>Liste des chansons</h2>
            <ul>
                <?php foreach ($allChansons as $chanson): ?>
                    <li>
                        <p>Chemin : <?php echo htmlspecialchars($chanson['chemin']); ?></p>
                        <p>Votes : <?php echo htmlspecialchars($chanson['vote']); ?></p>

                        <form method="POST" action="../../../back/controller/isValid.php" class="chanson-form">
                            <input type="hidden" name="chanson_id" value="<?php echo $chanson['id']; ?>">
                            <input type="hidden" name="isValid" value="1">
                            <button type="submit">Valider</button>
                        </form>

                        <form method="POST" action="../../../back/controller/isValid.php" class="chanson-form">
                            <input type="hidden" name="chanson_id" value="<?php echo $chanson['id']; ?>">
                            <input type="hidden" name="isValid" value="0">
                            <button type="submit">Refuser</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>

    </body>
    </html>
<script src="scriptAdmin.js"></script>
<?php
