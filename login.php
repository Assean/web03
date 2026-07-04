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
        <form action="./api/login.php" method="post" class="card p-5 m-5  login-form">
            <label for="">帳號:</label>
            <input type="text" name="username" id="" class="username-input form-control">
            <label for="">密碼:</label>
            <input type="text" name="password" id="" class="password-confirm-input form-control">
            <button type="submit" class="btn  btn-outline-success login-submit-button">送出</button>
        </form>
        </div>

    </div>
    <script src="./assets/css/bootstrap.js"></script>
</body>
</html>