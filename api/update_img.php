<?php
include_once('db.php');
$path = "assets/img/" . time() . '_' . $_FILES['header']['name'];

$sql="UPDATE `user` SET `header` = ? WHERE `username` = ?";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute([
    $path,
    $_SESSION['user']
]);
move_uploaded_file($_FILES['header']['tmp_name'], "../" . $path);
if($result){
    echo "<script>alert('頭像上傳成功');location.href='../profile.php'</script>";
}else{
    echo "<script>alert('頭像上傳失敗');location.href='../profile.php'</script>";
}

?>