<?php
include 'includes/config.php';
include_once 'includes/header.inc.php';
$result = $db->query("SELECT id, title FROM pages");
?>

<h1>Middle Era Wiki</h1>
<a href="create.php">Create New Page</a>
<ul>
    <?php while ($row = $result->fetchArray(SQLITE3_ASSOC)): ?>
        <li><a href="page.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['title']) ?></a></li>
    <?php endwhile; ?>
</ul>
</body>

</html>