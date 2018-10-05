<?php 
header('content-type:text/html;charset=utf-8');
setcookie('isLogin','',time()-1,'/');
echo '退出成功';
header('Location:main.php');
?>