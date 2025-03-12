<?php
require_once 'config.php';

if (isset($_SESSION["telegram_id"])) {
    header('Location: welcome.php');
    exit;
}

if (isset($_GET['hash'])) {
    $check_hash = $_GET['hash'];
    unset($_GET['hash']);

    ksort($_GET);
    $check_string = implode("\n", array_map(fn($k, $v) => "$k=$v", array_keys($_GET), $_GET));

    $secretKey = hash('sha256', BOT_TOKEN, true);
    $hash = hash_hmac('sha256', $check_string, $secretKey);

    if ($hash === $check_hash) {
        $_SESSION['telegram_id']  = $_GET['id'];
        $_SESSION['telegram_username']  = $_GET['username'] ?? null;
        $_SESSION['telegram_first_name'] = $_GET['first_name'] ?? null;
        $_SESSION['telegram_last_name']  = $_GET['last_name'] ?? null;

        header('Location: welcome.php');
        exit;
    } else {
        header('Location: error.php?type=Codice di autenticazione non valido!');
        exit;
    }
}
?>
