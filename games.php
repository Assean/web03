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
    
    <div id="games" >

        <?php include_once('./include/header.php');?>
        <div class="container">
            <div class="card " style="width: 700px;height: 400px;">
                <section class="game-list">
                    <img src="./games/1/cover.svg" alt="" class="game-cover">
                    <div class="game-title game-description">依序點擊數字，按升序完成挑戰！</div>
                    <a href="game-play.php" class="play-game-link">開始遊戲</a>
                </section>
            </div>
        </div>

    </div>
    <script src="./assets/css/bootstrap.js"></script>
</body>
</html>