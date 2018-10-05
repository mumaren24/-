<?php
    header('Content-Type:text/html;charset=utf-8');
    $conn = mysqli_connect("localhost","root","root","mybase");
    if (!$conn){
        die('Could not connect: ' . mysql_error());
    }
    $sql="INSERT INTO teacher (username, password, name,school,age)
    VALUES
    ('$_POST[username]','$_POST[password]','$_POST[name]','$_POST[school]','$_POST[age]')";

    if (!mysqli_query($conn,$sql)){
      die('数据库查询失败');
    }
    echo '{"status":"ok"}';
?>