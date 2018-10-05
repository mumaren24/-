<?php 
$arr = ["name"=>"小明","age"=>20,"arr"=> [2, 3, 4]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $arr['name'] ?></h3>
    <p><?php echo $arr['age'] ?></p>
    <ul>
        <?php for($i=0;$i<count($arr['arr']);$i++){ ?>
         <li></li>
        <php } ?>
    </ul>
</body>
</html>