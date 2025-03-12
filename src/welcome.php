<?php
require_once 'config.php';

if (!isset($_SESSION["telegram_id"])) {
    header('Location: index.html');
    exit;
}

echo "Benvenuto, " . htmlspecialchars($_SESSION['telegram_first_name']);
?>
<a href="logout.php">Logout</a>
