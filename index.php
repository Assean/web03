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
    
    <div id="home" >

        <?php include_once('./include/header.php');?>
        <div class="border-bottom"></div>

        <section class="article">
            <?php
            $sql="SELECT * FROM `article`";
            $articles = $pdo->query($sql)->fetchAll();
            ?>
            <div class="">
                <?php
                if($articles):
                forEach($articles as $article):
                ?>
                <article class="article-item card p-3 m-3">
                    <div class="article-title"><h4><?=$article['title']?></h4></div>
                    <time class="article-date"><?=$article['created_at']?></time>
                    <div class="article-excerpt">文章摘要:</div>
                    <div class="article-readmore"><a href="article.php?id=<?=$article['id']?>"class="float-right">閱讀更多</a></div>
                </article>
                <?php
                endforeach;
                else:
                ?>
                目前尚無文章
                <?php endif;?>
            </div>
        </div>
        </section>
        <aside class="notifications">
            <div class="notification card">
                    <div class="notification-title">通知標題</div>
                    <div class="notitfication-date">發布日期</div>
            </div>
        </aside>

    </div>
    <script src="./assets/css/bootstrap.js"></script>
</body>
</html>