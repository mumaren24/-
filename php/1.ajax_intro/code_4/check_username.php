<?php
header('content-type:text/html;charset=utf-8');
// print_r($_POST);
$str = file_get_contents('./data.json');
$arr = json_decode($str, true);
$username = $_GET['username'];
$isExist = false;//默认不存在
foreach ($arr as $key => $value) {
    if ($value['name'] == $username) {
        $isExist = true;
    }
}
if ($isExist) {
    echo json_encode(["code"=>1,"info"=>"用户名不可用"]);
} else {
    echo json_encode(["code"=>2,"info"=>"用户名可用"]);
}
header('refresh:2;url=register.php');
?>