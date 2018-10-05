<?php 
//1.读取json文件 
//大家一定要理解，这里读取出来的仅仅只是一个字符串
$data = file_get_contents('music.json');
$arr = json_decode($data,true);
print_r($arr);
// $arr = array(
//     "name"=>"jack",
//     "age"=>"20",
//     "gender"=>true
// );
// $str = json_encode($arr);
// echo $str;
?>