<?php 
header('Content-Type:text/html;charset=utf-8');

    /* 
    连接数据库: 此处用户名,与密码要与之前设置的对应
    当前用户名: root
    当前密码: root
    */
    if(!isset($_POST['id'])){
        die('同学，你id参数传了没有');
    }
    $conn = mysqli_connect("localhost","root","root","mybase");

    if (!$conn){
        die('数据库连接失败');
    }

    $sql = "DELETE FROM teacher WHERE id = $_POST[id]";

    mysqli_query($conn,$sql);

    echo '{"status":"ok"}';
?>