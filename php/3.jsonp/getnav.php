<?php
    //这就是请求时所传递过来的函数名称
    $callback = $_GET['callback'];
    //读取数据
    $data = file_get_contents('nav.json');
    echo $callback.'('.$data.')';
?>