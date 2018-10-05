<?php
header('content-type:text/html;charset=utf-8');
$id = isset($_GET['id'])? $_GET['id']:1;
$str = file_get_contents('./data.sql');
$arr = json_decode($str,true);
foreach ($arr as $key => $value) {
    if($value['id'] == $id){
        $data = $value;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .banner_area{
        background:#202020;
    }
    .banner{
        width:80%;
        margin:0 auto;
        height:30px;
        background:url('./banner.jpg') center center;
        background-size:cover;
    }
    .wrapper{
        width:80%;
        margin:0 auto;
    }
    .wrapper h3{
        margin-top:20px;
        margin-bottom:20px;
    }
    .page{
        list-style:none;
        display:flex;
        justify-content:space-around;
    }
    .page a{
        text-decoration:none;
    }
    footer{
        display:flex;
        justify-content:center;
        
    }
    </style>
</head>
<body>
    <div class="banner_area">
        <div class="banner"></div>
    </div>
    <div class="wrapper">
        <h3><?php echo $value['title'] ?></h3>
        <hr>
        <p><?php echo $value['content'] ?></p>
        <ul class="page">
            <li><a href="./test.php?id=1">第一页</a></li>
            <li><a href="./test.php?id=2">第二页</a></li>
            <li><a href="./test.php?id=3">第三页</a></li>
        </ul> 
    </div>
    <footer>
        我是底部内容
    </footer>
</body>
</html>