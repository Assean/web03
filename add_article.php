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
    
    <div id="login" >

        <?php include_once('./include/header.php');?>
        <div class="container">
        <form action="./api/add_article.php" method="post" class="article-create-form card p-5 m-5">
            <label for="">文章標題</label>
            <input type="text" name="title" id="" class="article-title-input form-control">
            <label for="">文章內容:</label>
            <textarea name="content" id="" cols="30" rows="20" class="pb-3 article-content-input form-control"></textarea>
            <button class="article-submit-button btn btn-outline-success " style="width:100%;">發布文章</button>
        </form>
        </div>

    </div>
    <script src="./assets/css/bootstrap.js"></script>
</body>
</html>