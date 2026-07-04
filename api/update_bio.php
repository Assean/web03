<?php
include_once('db.php');
$sql="UPDATE `user` SET `bio` = ? WHERE `username` = ?";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute([
    $_POST['bio'],
    $_SESSION['user']
])

?>