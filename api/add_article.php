 <?php
 include_once('db.php');
    $sql = "INSERT INTO `article`(`title`,`content`,`created_user`) VALUES('{$_POST['title']}','{$_POST['content']}','{$_SESSION['user']}')";
    $r = $pdo->exec($sql);
    if($r){
        echo "<script>alert('發表成功');location.href='../profile.php'</script>";
    }else{
        echo "<script>alert('發表失敗 請重新嘗試');location.href='../add_article.php'</script>";
    }

?>