<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Benvenuto, <?= $username ?>!</h1>
    <p><a href="segreta.php">Vai alla pagina segreta</a></p>
    <p><a href="logout.php">Esci</a></p>
</body>
</html>
