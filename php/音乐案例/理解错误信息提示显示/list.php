<?php 
//读取数据文件 -json
$jsonStr = file_get_contents('music.json');
//将json字符串转换为php数组
$musicArr = json_decode($jsonStr,true);
// print_r($musicArr);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center display-3 py-3">音乐列表</h1>
        <hr>
        <a href="./upload.php" class="btn btn-dark">新增歌曲信息</a>
        <table class="table table-bordered">
            <thead class="thead-inverse">
                <tr>
                    <th>标题</th>
                    <th>歌手</th>
                    <th>专辑</th>
                    <th>音乐</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($musicArr as $key=>$value){?>
                <tr>
                    <td><?php echo $value['title'];?></td>
                    <td><?php echo $value['singer']; ?></td>
                    <td><?php echo $value['album']; ?></td>
                    <td>
                        <audio src="<?php echo $value['src']; ?>" controls></audio>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary">编辑</a>
                        <a href="#" class="btn btn-danger">删除</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>