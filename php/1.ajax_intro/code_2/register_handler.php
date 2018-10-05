<?php
header('content-type:text/html;charset=utf-8');
// print_r($_POST);
$str = file_get_contents('./data.json');
$arr = json_decode($str,true);
$username = $_POST['username'];
if(trim($username) == ''){
    echo '用户名不可以使用';
    header('refresh:2;url=register.php');
    die();
}
$isExist = false;//默认不存在
foreach ($arr as $key => $value) {
    if($value['name'] == $username){
        $isExist = true;
    }
}
if($isExist){
    echo '用户名不可以使用';
}else{
    echo '用户名可以使用';
}
header('refresh:2;url=register.php');
?>