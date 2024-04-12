
<?php
// PDO php提供第三代資料庫連線程式
// mysql第一代，他有安全問題，PHP7.0以上禁止使用
// mysqli第二代，他修正原有的安全問題，7.0以上可以繼續使用，相容性問題，PDO連線程式，可完整處裡多種資料庫的對連。
$dsn="mysql:host=localhost;dbname=lincan;charset=utf8";
$user="sales";
$password="123456";
$link=new PDO($dsn,$user,$password);
?>