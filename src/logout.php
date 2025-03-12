<?php
require_once 'config.php';

// Distruzione sessione attuale
session_destroy();
header('Location: index.html');
exit;
?>
