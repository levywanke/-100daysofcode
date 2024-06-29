<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $album_id = $_POST['album_id'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    $sql = "INSERT INTO photos (album_id, filename) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$album_id, $target_file]);

    header("Location: view_album.php?id=$album_id");
}

$user_id = $_SESSION['user_id'];
$albums = $pdo->query("SELECT * FROM albums WHERE user_id = $user_id")->fetchAll();
?>

<form method="POST" action="upload_photo.php" enctype="multipart/form-data">
    <select name="album_id" required>
        <?php foreach ($albums as $album): ?>
            <option value="<?= $album['id'] ?>"><?= $album['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="file" name="photo" required>
    <button type="submit">Upload Photo</button>
</form>
