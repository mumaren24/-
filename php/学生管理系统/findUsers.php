<?php
header('content-type:text/html;charset=utf8');
    /*返回json格式数据*/
    $conn = mysqli_connect("localhost","root","root","mybase");
    if (!$conn){
        die('数据库连接失败');
    }
    
    $pageNum = $_GET['pageNum'];
    $pageSize = $_GET['pageSize'];
    
    if(!isset($_GET['pageNum'])){
        echo '<h1 style="color:red;font-size:60px;">同学，你有没有传pageNum参数(当前第几页)，让同桌帮你看下<h1>';
        die;
    }
    if(!isset($_GET['pageSize'])){
        echo '<h1 style="color:red;font-size:60px;">同学，你有没有传pageSize参数(总共几页)，问下同桌帮你看下</h1>';
        die;
    }

    $start=($pageNum-1) * $pageSize;
    $sql="select id,name,age,username,school from teacher order by id desc limit $start , $pageSize";
    $sql1 = "select count(*) as total from teacher";
    $result1 = mysqli_query($conn,$sql1);
    $total = mysqli_fetch_assoc($result1);
    $total = $total['total'];
    $result = mysqli_query($conn,$sql);
    $list = [];   
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    header('content-type:application/json');
    echo json_encode(
        [
            'list'=>$list,
            'pageSize'=>(int)$pageSize,
            'pageNum'=>(int)$pageNum,
            'total'=> (int)$total
        ]
    );
?>