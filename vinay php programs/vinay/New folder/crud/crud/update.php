<!--update.php-->
<?php
if (!empty($_POST['nm']) && !empty($_POST['eml'])) {
$nm = $_POST['nm'];
$eml = $_POST['eml'];
$id = $_POST['id'];
$con = mysqli_connect("localhost", "root", "", "divA");
$sql = "update emp set name='$nm' , email='$eml' where id='$id'";
$res = mysqli_query($con, $sql);
if ($res == 1) {
header("location:form.php");
} else {
echo "ERROR";
}
} else {
echo "FORM ERROR";
} ?>