<?php
include_once('db.php');
if( $_POST['password'] == $_POST['ck_password'] ){
    $sql_select = "SELECT `username` FROM `user` WHERE `username` = '{$_POST['username']}'";
    $result = $pdo->query($sql_select)->fetchAll();
    if($result){
        echo "<script>alert('帳號已存在');location.href='../register.php'</script>";    
    }else{
        $sql = "INSERT INTO `user`(`username`,`email`,`password`) VALUES('{$_POST['username']}','{$_POST['email']}','{$_POST['password']}')";
        $r = $pdo->exec($sql);
        if($r){
            echo "<script>alert('註冊成功');location.href='../login.php'</script>";
        }else{
            echo "<script>alert('註冊失敗 請重新嘗試');location.href='../register.php'</script>";
        }
    }
}else{
    echo "<script>alert('確認密馬是否輸入一致');location.href='../register.php'</script>";
}
?>