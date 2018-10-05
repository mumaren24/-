<?php 
//1.读取文件
$str = file_get_contents('fruit.txt');
//2.将文件内容转换为我们最终的数组格式
// print_r(explode("\n",$str));
$arr = explode("\n",$str);
foreach($arr as $value){
    $result[] = explode("|",$value);
}
// print_r($result);
//3.遍历数组生成我们需要的结构
foreach($result as $value){?>
<li>
    <img src="<?php echo $value[1] ?>" alt="">
    <a href="./detail.php?id=<?php echo $value[0];?>"><?php echo $value[2] ?><php echo $value[1] ?></a>
</li>
<?php } ?>
<?php 
