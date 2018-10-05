<?php 
function register(){
    if (!isset($_POST['username']) || trim($_POST['username']) == "") {
        echo "请输入姓名";
        // 1.如果在php结构中直接写return,那么当运行到return代码的时候，整个php文件的执行就结束了
        // 2.如果在方法中写return,那么这个return就只能结束这个方法的执行
        return;
    }
    if(!isset($_POST['nickname']) || trim($_POST['nickname']) == ""){
        echo "请输入昵称";
        return;
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    register();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 引入样式 -->
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>   
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        姓名：<input type="text" name="username">
        昵称：<input type="text" name="nickname">
        年龄：<input type="text" name="age">
        电话：<input type="text" name="tel">
        性别：<input type="radio" name="gender" value="男" checked>男
             <input type="radio" name="gender" value="女" >女
             <br>
        班级：<select name="class" >
                <option value="1">黑马1期</option>
                <option value="2">黑马2期</option>
                <option value="3">黑马3期</option>
             </select>
        头像： <input type="file" name="photo" >
        <input type="submit" value="添加信息">
    </form>
</body>
</html>