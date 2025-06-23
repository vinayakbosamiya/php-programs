<?php
if(isset($_POST['fn']) && isset($_POST['ln']))
{
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $id = $_POST['id'];
    $conn = mysqli_connect("localhost","root","","note");
    $sql = "UPDATE `newnotes` SET `firstname` = '$fn', `lastname` = '$ln' WHERE `newnotes`.`id` = $id";
    $res = mysqli_query($conn,$sql);
    if($res == 1)
    {
        header("location:form.php");
        // echo "updated record";
    }
    else{
    echo "not updated";
    }
}
else{
    echo "form error";
}
?>