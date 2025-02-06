<?php
include 'includes/config.php';
include_once 'includes/header.inc.php';
$result = $db->query("SELECT id, title FROM pages");
?>

<?php while ($row = $result->fetchArray(SQLITE3_ASSOC)): ?>
    <div class="font-['MedievalSharp'] text-4xl bg-slate-950 m-4 p-4 rounded">
        <a href="page.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['title']) ?></a>
    </div>
<?php endwhile; ?>

<?php
include_once 'includes/footer.php';
?>
</body>

</html>