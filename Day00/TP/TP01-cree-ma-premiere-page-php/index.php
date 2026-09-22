<?php

$date = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma premiere page PHP</title>
</head>
<body>
    <h1>Ma premiere page PHP</h1>
    <p>Cette page est generee avec PHP.</p>
    <p>Date : <?= htmlspecialchars($date, ENT_QUOTES, 'UTF-8') ?></p>
</body>
</html>
