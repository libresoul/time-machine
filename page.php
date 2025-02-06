<?php
include 'includes/config.php';
include_once 'includes/header.inc.php';

$id = intval($_GET['id']);
$result = $db->querySingle("SELECT * FROM pages WHERE id = $id", true);
?>

<div class="flex flex-col justify-center items-center sm:w-full sm:p-6 md:size-[80%] text-2xl transition-all duration-500">
    <div class="font-['MedievalSharp'] text-6xl m-10 font-extrabold bg-slate-950 p-8 rounded hover:scale-125 transition-all duration-500">
        <h1 class="text-center"><?= htmlspecialchars($result['title']) ?></h1>
    </div>
    <div>
        <p class="text-justify"><?= nl2br(htmlspecialchars($result['subtitle'])) ?></p>
    </div>
    <?php if ($result['image1']): ?>
        <div class="flex justify-center items-center">
            <img src="uploads/<?= htmlspecialchars($result['image1']) ?>" class="w-full h-full m-8">
        </div>
    <?php endif; ?>
    <div>
        <p class="text-justify"><?= nl2br(htmlspecialchars($result['content1'])) ?></p>
    </div>
    <?php if ($result['image2']): ?>
        <div class="flex justify-center items-center">
            <img src="uploads/<?= htmlspecialchars($result['image2']) ?>" class="w-full h-full m-8">
        </div>
    <?php endif; ?>
    <div>
        <p class="text-justify"><?= nl2br(htmlspecialchars($result['content2'])) ?></p>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>
</body>

</html>