<?php
include 'includes/config.php';
include_once 'includes/header.inc.php';

$id = intval($_GET['id']);
$result = $db->querySingle("SELECT * FROM pages WHERE id = $id", true);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($result['title']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($result['title']) ?></h1>
    <?php if ($result['image1']): ?>
        <img src="uploads/<?= htmlspecialchars($result['image1']) ?>" style="max-width:400px;">
    <?php endif; ?>
    <p><?= nl2br(htmlspecialchars($result['content1'])) ?></p>
    <a href="index.php">Back to Home</a>
</body>
</html>
