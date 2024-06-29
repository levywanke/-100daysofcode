<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$albums = $pdo->query("SELECT * FROM albums WHERE user_id = $user_id")->fetchAll();
?>

<a href="create_album.php">Create Album</a>
<a href="upload_photo.php">Upload Photo</a>

<h2>Your Albums</h2>
<ul>
    <?php foreach ($albums as $album): ?>
        <li><a href="view_album.php?id=<?= $album['id'] ?>"><?= $album['name'] ?></a></li>
    <?php endforeach; ?>
</ul>
