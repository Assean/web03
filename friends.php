<?php include_once('./include/header.php');?>
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
    
    <div id="friends-page" >

        <div class="border-bottom"></div>
        <div class="container">
            <form action="#" method="get">
                <div class="friends-search-section card">搜尋
                <input type="text" id="keyword" name="keyword" class="form-control">
                <button type="submit"  id="search">搜尋</button>
                <div id="result">

               
                </div>
                
            </form>
            </div>
            <div class="friend-list-section">我的好友列表</div>
            <div class="incoming-requests-section">我商道的好友邀請</div>
            <div class="sent-requests-section">我送出的好友申請區塊</div>    
        </div>

    </div>
    <script src="./assets/css/bootstrap.js"></script>
</body>
</html>