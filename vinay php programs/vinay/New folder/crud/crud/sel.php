<?php
$con = mysqli_connect("localhost", "root", "", "divA");
$sql = 'select * from emp';
$i = 1;
$res = mysqli_query($con, $sql);
?>
<table border="1" width="100%">
<tr>
<td>id</td>
<td>NAME</td>
<td>EMAIL</td>
<td>UPDATE</td>
<td>DELETE</td>
<?php
while ($row = mysqli_fetch_assoc($res)) {
?> <tr>
<td><?= $i++; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['email']; ?></td>
<td><a href="upd.php?id=<?=$row['id'];?>">UPDATE</a></td>
<td><a href="del.php?id=<?=$row['id'];?>">DELETE</a></td>
<?php } ?>
</table>