<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $album_name = $_POST['album_name'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO albums (user_id, name) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $album_name]);

    header("Location: index.php");
}
?>

<form method="POST" action="create_album.php">
    <input type="text" name="album_name" placeholder="Album Name" required>
    <button type="submit">Create Album</button>
</form>
