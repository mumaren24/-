<?php
header('content-type:text/html;charset=utf8');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  print_r($_POST);
  $username = $_POST['username'];
  $password = $_POST['password'];
  $str = file_get_contents('./users.json');
  $arr = json_decode($str,true);
  foreach ($arr as $key => $value) {
    if($username == $value['username'] && $password == $value['password']){
      setcookie('isLogin','1',time()+10,'/');
      echo '登录成功';
      header('refresh:2;url=main.php');
      die;
    }
  }
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
  <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <h1>登录</h1>   
    <div class="form-group">
      <label for="username">用户名</label>
      <input type="text" class="form-control" id="username" name="username"">
    </div>
    <div class="form-group">
      <label for="password">密码</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary btn-block">登录</button>
  </form>
</body>
</html>