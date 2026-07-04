<?php include_once('./api/db.php') ?>
<header class="container d-flex p-3 site-header">
            <div class="brand pr-5">
                
                <a href="./index.php" style="color:black;"  class="brand-link "><img style="height:70px; width:70px;" src="./assets/icon/mainicon.gif" alt=""></a>

            </div>

            <nav class="main-nav" style="padding-left: 100px;">
                <a href="./index.php" class="btn btn-outline-dark home-link">首頁</a>
                <a href="./games.php" class="btn btn-outline-dark gameslink">遊戲</a>
                <a href="./friends.php?keyword=" class="btn btn-outline-dark friends-link">好友</a>
            </nav>

            <div class="user-area" style="padding-left: 400px;">
                <?php
                if(!isset($_SESSION['user'])):
                ?>
                    <a href="./login.php" class="login-link btn btn-outline-dark">登入</a>
                    <a href="./register.php" class="register-link btn btn-outline-dark">註冊</a>
                <?php
                else:
                ?>
                    <div class="user-badge"><?=$_SESSION['user']?></div>
                    <a href="./profile.php" class="profile-link btn btn-outline-dark">個人頁面入口</a>
                    <a href="./logout.php" class="logout-link btn btn-outline-dark">登出</a>
                <?php
                endif;
                ?>
            </div>
        </header>