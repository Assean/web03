<?php
include_once('db.php');
$result = $pdo->query("SELECT `username` `password` FROM `user` WHERE `username` = '{$_POST['username']}' AND `password` = '{$_POST['password']}' ")->fetchAll();

if($result){
    $_SESSION['user'] = $_POST['username'];
    echo "<script>alert('登入成功');location.href='../index.php'</script>";
}else{
    echo "<script>alert('帳號或密碼錯');location.href='../login.php'</script>";
}
?>