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
    
    <div id="game-play" >
        <?php include_once('./include/header.php')?>
        <div class="container" >
            <div class="current-game-title"></div>
            <section class="game-area"><iframe src="./1/index.html"  style="width:500px;height:500px;" frameborder="0" class="game-frame"></iframe></section>    
            <aside class="game-leaderboard">
                <div class="leaderbord-item">
                    <div class="player-rank"></div>
                </div>
            </aside>
        </div>
        
    </div>
    <script src="./assets/css/bootstrap.js"></script>
</body>
</html>