<?php 
//1. 接收参数 如果通过get方式发送的请求，就使用$_GET来接收参数
$id = $_GET['id'];
//2.获取数据
//2.1 读取出来 -- 返回值是字符串
$str = file_get_contents('fruit.txt');
//2.2 按换行符进行分隔，获取每 一行数据
$arr = explode("\n",$str);
//2.3 遍历每一行数据，对每一行数据再次进行分隔，获取每一个具体的值
foreach($arr as $key=>$value){
    $result[] = explode("|",$value);
}
// print_r($result);
//3. 遍历，查找对应的id对应的数据
foreach($result as $value){
    if($id == $value[0]){
        $data = $value;
        break;
    }
}
// print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .container ul > li {
            float: none;
            width: 100%;
            text-align: center;
        }
        .container ul > li img {
            width: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="#">水果</a>
            <a href="#">干果</a>
            <a href="#">蔬菜</a>
        </p>
        <ul>
            <li>
                <img src="<?php echo $data[1];?>" alt="">
                <p><?php echo $data[2];?></p>
            </li>
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>