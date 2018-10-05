<?php
$str = file_get_contents('data.txt');
$value = explode('|',$str);
?>
<li>
    <img src="<?php echo $value[0] ?>" alt="">
    <a href="#"><?php echo $value[1] ?><php echo $value[1] ?></a>
</li>