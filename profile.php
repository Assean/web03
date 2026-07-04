<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./assets/js/jqueryv3.7.1.js"></script>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
</head>
<body>
    
    <div id="profile-page" class="container" >

        <?php include_once('./include/header.php');
        $sql_user= "SELECT * FROM `user` WHERE `username` = '{$_SESSION['user']}'";
        $user = $pdo->query($sql_user)->fetch();
        ?>
            <section class="profile-header  card" style="width: auto; height: auto;">
                <form method="post" action="./api/update_img.php" enctype="multipart/form-data">
                    <input type="file" name="header" style="display: none;" id="img" onchange="this.form.submit()" accept="image/*">
                    <label for="img">
                        <img  src="<?=htmlspecialchars($user['header'])?>" alt="大頭貼" class="profile-avatar">
                    </label>

                </form>
                <div class="card-body">
                    <div class="profile-username"><h3>使用者名稱:<?=$_SESSION['user']?></h3></div>
                    <h3>個人簡介:</h3>
                    <div class="card card-body">
                        <div class="profile-bio" id="bio"><span  ><?=htmlspecialchars($user['bio'])?></span></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <a href="./add_article.php" class=" new-post-link "><h4 class="pt-5" style="font-weight:bolder;">新增文章</h4></a>
            <?php
            $sql="SELECT * FROM `article` WHERE `created_user` = '{$_SESSION['user']}' ";
            $articles = $pdo->query($sql)->fetchAll ();
            ?>
            <section class="profile-article">
                <?php
                if($articles):
                forEach($articles as $article):
                ?>
                <div class="article-item card p-3 m-3">
                    <div class="article-title"><h4><?=$article['title']?></h4></div>
                    <time class="article-date"><?=$article['created_at']?></time>
                    <div class="article-readmore"><a href="article.php?id=<?=$article['id']?>"class="float-right">閱讀文章連結</a></div>
                </div>
                <?php
                endforeach;
                else:
                ?>
                目前尚無文章
                <?php endif;?>
            </section>
        </div>

    </div>
    <script src="./assets/css/bootstrap.js"></script>
    <script>
        $("#bio").click(function(){
            if($("#edit_bio").length) return;

            let oldText = $("#bio").text().trim();
            $(this).html(`<input value="${oldText}" type="text" id="edit_bio" class="form-control">`)

            $("#edit_bio").focus()
                .blur(function(){
                    $("#bio").text(oldText)
                    alert('簡介更新失敗')
                })
                .keypress(function(e){
                    if(e.which == 13){
                        let newText = $(this).val();
                        if(newText !== ''){
                            $.post("./api/update_bio.php" , {bio : newText} , function(){
                                $("#bio").text(newText)
                            })
                        }
                        
                    }
                })
                
        })
    </script>
</body>
</html>