<?php 
session_start();
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>  这是首页!  </h1>
	<?php if((isset($_SESSION['isLogin'])) && ($_SESSION['isLogin'] == true)){ ?>
		<a href="logout.php">退出</a>
	<?php }else{ ?>
		<a href="login.php">登录</a>
	<?php } ?>
</body>
</html>