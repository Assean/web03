<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./assets/js/jqueryv3.4.1.js"></script>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
</head>
<body>
    
    <div id="article" >

                <?php include_once('./include/header.php');?>
                <div class="border-bottom"></div>
                <?php
        
                $sql="SELECT `title`, `created_at`, `content` FROM `article` WHERE `id` = '{$_GET['id']}'";
                $article = $pdo->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                print_r($article);
                
                if($article):
                ?>
                    <header class="article-header">
                        <h1 class="article-title"><?=$article['title']?></h1>
                        <time class="article-date"><?=$article['created_at']?></time>
                    </header>

                    <section class="article-body">
                        <?=$article['conntent']?>
                    </section>
                <?php
                else:
                ?>
                發生錯誤
                <?php endif;?>

    </div>
    <script src="./assets/css/bootstrap.js"></script>
</body>
</html>