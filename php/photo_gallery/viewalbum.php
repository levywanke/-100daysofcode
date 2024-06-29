<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$album_id = $_GET['id'];
$photos = $pdo->query("SELECT * FROM photos WHERE album_id = $album_id")->fetchAll();
?>

<a href="index.php">Back to Albums</a>
<h2>Photos in Album</h2>
<div>
    <?php foreach ($photos as $photo): ?>
        <img src="<?= $photo['filename'] ?>" width="200">
    <?php endforeach; ?>
</div>
