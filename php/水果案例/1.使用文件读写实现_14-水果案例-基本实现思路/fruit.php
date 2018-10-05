<?php 
$data = [
    ["id" => 1, "name" => "香蕉", "src" => "img/banana1.jpg"],
    ["id" => 2, "name" => "苹果", "src" => "img/apple1.jpg"],
    ["id" => 3, "name" => "橙?", "src" => "img/orange1.jpg"],
    ["id" => 4, "name" => "菠萝", "src" => "img/pineapple1.jpg"]
];

// foreach($data as $key=>$value){
//     // print_r($value);
//     echo $value["name"];
// }
$arr = [2,3,4];
// print_r($arr);
// foreach($arr as $key=>$value){
//     echo '<h1>'.$value.'</h1>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="javascript:;">水果</a>
        </p>
        <ul>
            <?php 
            foreach($data as $key=>$value){
            ?>
            <li>
                <img src="<?php echo $value['src'] ?>" alt="">
                <a href="#"><?php echo $value['name']; ?></a>
            </li>
            <?php 
            }
            ?>
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>
