<?php

$conn = mysqli_connect("localhost", "root", "", "note");
$sql = "SELECT * FROM `newnotes`";
$res = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $id = 0;
      while ($row = mysqli_fetch_assoc($res)) {
        $id++;
      ?>
        <tr>
          <th scope='row'> <?= $id ?></th>
          <td> <?= $row['firstname']; ?></td>
          <td> <?= $row['lastname']; ?></td>
          <td><a href="upd.php?id = <?= $row['id'];?>">UPDATE</a>/<a href="del.php?id = <?= $row['id']; ?>">Delete</a></td>
        </tr>
      
      <?php
      }
      ?>
    </tbody>
  </table>
</body>

</html>
