<?php
// if(isset($_FILES['img'])){
//     echo "<pre>";
//     print_r($_FILES);
//     echo "</pre>";
// } 

$file_name = $_FILES['img']['name'];
$file_type = $_FILES['img']['type'];
$file_tmp_name = $_FILES['img']['tmp_name'];
$file_size = $_FILES['img']['size'];

if(move_uploaded_file($file_tmp_name,"uploadfiles/".$file_name))
{
    echo " file is uploaded!";
}else{
    echo "Sorry File is not Uplaod!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Upload Image: <input type="file" name="img"><br><br>
      <input type="submit">
    </form>
</body>
</html>