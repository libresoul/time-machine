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

    <h1>Create New Page</h1>

    <form method="POST" action="create.php" enctype="multipart/form-data">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" required>
        </div>
        <div>
            <label for="content1">Content</label>
            <textarea name="content1" required></textarea>

        </div>
        <div>
            <label for="image1">Image</label>
            <input type="file" name="image1">
        </div>
        <div>
            <label for="content2">Content (Optional)</label>
            <textarea name="content2"></textarea>
        </div>
        <div>
            <label for="image2">Image (Optional)</label>
            <input type="file" name="image2">
        </div>
        <div>
            <button type="submit">Create Page</button>
        </div>
    </form>

    <a href="index.php">Back to Home</a>
</body>

</html>