<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Pagina segreta</title>
</head>
<body>
    <h1>Informazioni riservate</h1>
    <p>Questa pagina è accessibile solo agli utenti autenticati.</p>
    <p><a href="dashboard.php">Torna alla dashboard</a></p>
    <p><a href="logout.php">Esci</a></p>
</body>
</html>
