<?php
include 'includes/config.php';
include_once 'includes/header.inc.php';
$result = $db->query("SELECT id, title FROM pages");
?>

<div class="mt-20 mb-10 grid md:grid-cols-2 sm:grid-cols-1">
    <?php while ($row = $result->fetchArray(SQLITE3_ASSOC)): ?>
        <div class="font-['MedievalSharp'] text-4xl bg-slate-950 m-4 p-4 rounded flex items-center justify-center hover:scale-125 transition-all duration-500">
            <a href="page.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['title']) ?></a>
        </div>
    <?php endwhile; ?>
</div>

<?php
include_once 'includes/footer.php';
?>
</body>

</html>