<?php
include 'includes/config.php';
include_once 'includes/header.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];

    $subtitle = $_POST['subtitle'];

    $content1 = $_POST['content1'];

    if (isset($_POST['content2'])) {
        $content2 = $_POST['content2'];
    }

    $images_main = '';
    if ($_FILES['image1']['name']) {
        $images_main = basename($_FILES['image1']['name']);
        move_uploaded_file($_FILES['image1']['tmp_name'], "uploads/" . $images_main);
    }

    if (isset($_FILES['image2'])) {
        $images_optional = '';
        if ($_FILES['image2']['name']) {
            $images_optional = basename($_FILES['image2']['name']);
            move_uploaded_file($_FILES['image2']['tmp_name'], "uploads/" . $image_optional);
        }
    }



    $stmt = $db->prepare("INSERT INTO pages (title, subtitle, content1, image1) VALUES (:title, :subtitle, :content1, :image1)");
    $stmt->bindValue(':title', $title, SQLITE3_TEXT);
    $stmt->bindValue(':subtitle', $subtitle, SQLITE3_TEXT);
    $stmt->bindValue(':content1', $content1, SQLITE3_TEXT);
    $stmt->bindValue(':image1', $images_main, SQLITE3_TEXT);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>

<div class="flex md:flex-row sm:flex-col justify-center items-center sm:gap-10 md:gap-40">
    <div class="font-['MedievalSharp'] text-5xl sm:mt-10 md:mt-0 bg-black p-10 rounded hover:scale-125 transition-all duration-500">
        <h1>Add new page</h1>
    </div>
    <form method="POST" action="create.php" enctype="multipart/form-data">
        <div class="mt-4">
            <label for="title">Title</label>
            <input type="text" name="title" class="block w-full text-sm bg-slate-600 rounded text-center" required>
        </div>
        <div class="mt-4">
            <label for="subtitle">Subtitle</label>
            <textarea rows="2" name="subtitle" class="block w-full text-sm bg-slate-600 rounded text-center" required></textarea>
        </div>
        <div class="mt-4">
            <label for="content1">Content</label>
            <textarea name="content1" rows="6" class="block w-full text-sm bg-slate-600 rounded" required></textarea>
        </div>
        <div class="mt-4">
            <label for="image1">Image</label>
            <input type="file" name="image1" class="block w-full text-sm text-white rounded-lg cursor-pointer bg-slate-600 border border-gray-300 file:bg-slate-950 file:text-slate-100 file:rounded file:p-2 file:border-0">
        </div>
        <div class="mt-4">
            <label for="content2">Content (Optional)</label>
            <textarea name="content2" rows="6" class="block w-full text-sm bg-slate-600 rounded"></textarea>
        </div>
        <div class="mt-4">
            <label for="image2">Image (Optional)</label>
            <input type="file" name="image2" class="block w-full text-sm text-white rounded-lg cursor-pointer bg-slate-600 border border-gray-300 file:bg-slate-950 file:text-slate-100 file:rounded file:p-2 file:border-0">
        </div>
        <div class="flex justify-center items-center m-4">
            <button type="submit" class="hover:scale-125 transition-all duration-500">
                <div class="bg-slate-950 mt-4 p-2 rounded text-2xl">Create Page</div>
            </button>
        </div>
    </form>
    <div class="font-['MedievalSharp'] text-3xl sm:mb-10 md:mb-0 hover:scale-125 transition-all duration-500">
        <a href="index.php"><img src="images/static/left_arrow.svg" class="w-32 h-32 object-cover"></a>
    </div>


</div>
</body>

</html>