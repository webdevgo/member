<?php
//连接数据库服务器
$conn = mysqli_connect("mysql10.serv00.com","m10322_eslfit","Bodhi365","m10322_bodhi");
if(!$conn){
    die("连接数据库服务器失败");
}
//第二步，设置字符集
mysqli_query($conn,"set names utf8");