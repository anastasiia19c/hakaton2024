<?php
session_start();

session_unset();

session_destroy();

header("Location: ../../front/composants/connexion/index.php"); 
exit();
?>
