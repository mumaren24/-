<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // print_r($_FILES);
    $file = $_FILES['photo'];
    if(!empty($file) && $file['error']==0){
        move_uploaded_file($file['tmp_name'],'./upload/'.$file['name']);
    }
}
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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <input type="file" name="photo">
        <input type="submit" value="提交">
    </form>
</body>
</html>