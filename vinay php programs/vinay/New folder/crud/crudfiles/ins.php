<?php
if(isset($_POST['fn']) && isset($_POST['ln'])){
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $conn = mysqli_connect("localhost","root","","note");
    $sql = "INSERT INTO `newnotes` (`firstname`, `lastname`) VALUES ('$fn', '$ln')";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "inserted";
    }
    else{
        echo "not inserted";
    }
}
else{
    echo "form error---->";
    
}

?>