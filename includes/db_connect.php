<?php
$db_file = __DIR__ . '/../db/maaltijdplanner.db';
try {
    $pdo = new PDO("sqlite:" . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Kan geen verbinding maken met database: " . $e->getMessage());
}
?>