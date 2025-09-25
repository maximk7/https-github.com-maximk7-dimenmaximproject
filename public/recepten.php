<?php
require '../includes/db_connect.php';

$stmt = $pdo->query("SELECT * FROM recipes");
$recepten = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Receptenlijst</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Receptenlijst</h1>
<a href="recept_form.php">Nieuw recept toevoegen</a>
<table border="1">
    <tr>
        <th>Titel</th>
        <th>Kcal per portie</th>
    </tr>
    <?php foreach ($recepten as $r): ?>
    <tr>
        <td><?php echo htmlspecialchars($r['title']); ?></td>
        <td><?php echo $r['kcal_per_serving']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
