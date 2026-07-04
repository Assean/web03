<?php
include_once('./api/db.php');
unset($_SESSION['user']);
echo"<script>location.href='./index.php'</script>";
?>