<?php
// $con=mysqli_connect("localhost","root","","v")
// ;
// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
//     }
//     $sql = "SELECT firstname, lastname FROM vinay ORDER BY
//     Lastname";
//     $result = mysqli_query($con,$sql);
//     // Numeric array
//     $row = mysqli_fetch_array($result);
//     printf ("%s (%s)\n", $row[0], $row[1]);
//     // Associative array
//     $row = mysqli_fetch_array($result);
//     printf ("%s (%s)\n", $row["firstname"], $row["lastname"]);
//     // Free result set
//     mysqli_free_result($result);
//     mysqli_close($con);



// $to = "vinayakbosamiya69@gmail.com";
// $sub = "code of php";
// $msg = "copy and run and understand for exam";
// $header = "from:bosamiyavinay80@gmail.com";
// $res = mail($to,$sub,$msg,$header);
// if ($res == true) {
//     echo "mail sended";
// }
// else{
//     echo "not sent mail";
// }

?>

<!-- Warning: mail(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\xampp\htdocs\vinay\session\ex.php on line 6
not sent mail -->
<button id="fadeButton">Fade To</button>
<div id="box" style="width:100px;height:100px;background:red;"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$("#fadeButton").click(function(){
  $("#box").fadeTo("slow", 0.60, function() {
    alert("Fade complete!");
  });
});
</script>
