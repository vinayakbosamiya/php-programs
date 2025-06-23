<?php
if (!empty($_POST['nm']) && !empty($_POST['eml'])) {
$nm = $_POST['nm'];
$eml = $_POST['eml'];
$con = mysqli_connect("localhost", "root", "", "divA");
$sql = "insert into emp(firstname,lastname) values('$nm','$eml')";
$res = mysqli_query($con, $sql);
if ($res == 1) {
echo "Inserted!";
} else {
echo "ERROR";
}
} else {
echo "FORM ERROR";
}
?>
