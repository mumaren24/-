<?php
header('content-type:text/html;charset=utf-8');
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$str = file_get_contents('./data.sql');
$arr = json_decode($str, true);
foreach ($arr as $key => $value) {
    if ($value['id'] == $id) {
        $data = $value;
        echo json_encode($data);
    }
}
?>