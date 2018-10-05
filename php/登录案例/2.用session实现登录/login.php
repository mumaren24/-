<?php
header('content-type:text/html;charset=utf-8');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // print_r($_POST);
  $str = file_get_contents('./users.json');
  $arr = json_decode($str,true);
  // print_r($arr);
  foreach ($arr as $key => $value) {
    if($value['username'] == $_POST['username'] && $value['password'] == $_POST['password']){
      session_start();
      $_SESSION['isLogin'] = true;
      header('location:main.php');
      die;
    }
  }
  header('location:' . $_SERVER['PHP_SELF']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>登录</title>
  <link rel="stylesheet" href="bootstrap.css">
  <style>
    body {
      background-color: #f8f9fb;
    }

    .login-form {
      width: 360px;
      margin: 100px auto;
      padding: 30px 20px;
      background-color: #fff;
      border: 1px solid #eee;
    }

    .login-form h1 {
      font-size: 30px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <form class="login-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <h1>登录</h1>   
    <div class="form-group">
      <label for="username">用户名</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
      <label for="password">密码</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary btn-block">登录</button>
  </form>
</body>
</html>