<?php
$dsn = "mysql:host=localhost;dbname=web03_db;charset=utf8";
$pdo = new PDO($dsn,'root','');
date_default_timezone_set('Asia/Taipei');
session_start();
?>