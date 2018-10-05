<?php
/**
 * select 查询操作
 * @param mixed $sql 示例参数："select * from demo";
 * @return mixed 如果返回值为false,则说明查询失败，否则返回值为数组，建立使用var_dump来打印返回值
 */
function select($sql)
{
    //建立数据库连接 主机域名localhost 账号root 密码root 连接的数据库mybase 
    $conn = mysqli_connect('localhost', 'root', 'root', 'mybase');
    if (!$conn) {
        die('连接失败');
    }
    //设置编码为utf8
    mysqli_set_charset($conn, 'utf8');
    $res = mysqli_query($conn, $sql);
    if ($res && mysqli_num_rows($res) > 0) {
        while ($arr = mysqli_fetch_assoc($res)) {
            $result[] = $arr;
        }
        mysqli_close($conn);//释放连接
        return $result;
    } else {
        mysqli_close($conn);//释放连接
        //不管操作失败还是没获取数据统一返回false
        return false;
    }
}

/**
 * opt 增删改操作相关函数
 * @param mixed $sql 
 * @return mixed 如果返回值为true，说明操作成功，如果返回值为false，说明操作失败
 */
function opt($sql)
{
    $conn = mysqli_connect('localhost', 'root', 'root', 'mybase');
    mysqli_set_charset($conn, 'utf8');
    $res = mysqli_query($conn, $sql);
    if ($res && mysqli_affected_rows($conn) > 0) {
        return true;//表示成功影响了行数，操作成功
    } else {
        return false;
    }
    mysqli_close($conn);
}
?>