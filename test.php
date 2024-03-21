<?php
$servername = "127.0.0.1";
$username = "mysite";
$password = "zWFkfyYCGL45678";
$dbname = "mysite";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
