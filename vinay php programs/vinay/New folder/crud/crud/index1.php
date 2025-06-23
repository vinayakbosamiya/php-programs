<?php
// INSERT INTO `notes` (`sno`, `title`, `des`, `tstemp`) VALUES (NULL, 'vinayq', 'sdfasdfasdfsdfsafdsa', current_timestamp());
$servername = "localhost";
$username = "root";
$pas = "";
$database = "note";
$insert = false;
$update = false;
$delete = false;

// CONNECT DATABASE WITH PHPMYADMIN
$conn = mysqli_connect($servername, $username, $pas, $database);

if (!$conn) {
  die("sorry connection failed" . mysqli_connect_error());
}

// echo $_SERVER['REQUEST_METHOD'];
if (isset($_GET["d"])) {
 $sno =$_GET["d"];
 $sql = "DELETE FROM `notes` WHERE `notes`.`sno` = $sno";
 $res = mysqli_query($conn,$sql);
 if($res){
  $delete = true;
 }
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['snoEdit'])) {
    $sno = $_POST['snoEdit'];
    $title = $_POST["titleEdit"];
    $des = $_POST["descriptionEdit"];
    $sql = "UPDATE `notes` SET `title` = '$title', `des` = '$des' WHERE `notes`.`sno` =  $sno";
    $res = mysqli_query($conn, $sql);
    if ($res) {
      $update = true;
    }
    // } else {
    // or
  } else if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST["title"];
    $des = $_POST["des"];

    $sql = "INSERT INTO `notes` (`title`,`des`) VALUES ('$title','$des')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
      // echo "your data is inserted in your table";
      $insert = true;
    } else {
      echo "your data is not inserted in your table------>" . mysqli_error($conn);
    }
  }
}
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="JQuery.js"></script> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</head>

<body>

  <!-- Modal -->
  <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">
          <form action="index1.php" method="post">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="mb-3">
              <label for="title" class="form-label">Edit Note Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
              <label for="des" class="form-label">Edit Note Discription</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary"> Update Now </button>

          </form>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <?php
  if ($insert == true) {
    echo "<div class='alert alert-success' role='alert' style='background-color:rgb(0, 163, 65); color: #ffffff;'>
  <b>Your notes is added succsessfully! </b>
</div>
";
  }
  if ($update == true) {
    echo "<div class='alert alert-success' role='alert' style='background-color:rgb(44, 139, 0); color: #ffffff;'>
  <b>Updated Succsessfully!</b>
</div>
";
  }
  if ($delete == true) {
    echo "<div class='alert alert-success' role='alert' style='background-color:rgb(255, 2, 2); color: #ffffff;'>
  <b>Your Record is deleted Succsessfully!</b>
</div>
";
  }

  ?>
  <div class="container my-5">
    <h3> Add A Note </h3>
    <br>
    <form action="index1.php" method="post">
      <div class="mb-3">
        <label for="title" class="form-label">Note Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">

      </div>

      <div class="mb-3">
        <label for="des" class="form-label">Note Discription</label>
        <textarea class="form-control" id="des" name="des" rows="3"></textarea>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary" id="b">Submit</button>
    </form>
  </div>
  <div class="container">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col"> &nbsp &nbsp Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT *FROM `notes`";
        $res = mysqli_query($conn, $sql);
        $sno = 0;

        // CHECK CONDITION DATABASE IS CONNECT OR NOT CONNENCT
        if (!$conn) {
          die("sorry we feild to connect " . mysqli_connect_error());
        }
        while ($r = mysqli_fetch_assoc($res)) {
          $sno++;
          echo " <tr>
          <th scope='row'>" . $sno . "</th>
          <td>" . $r['title'] . "</td>
          <td>" . $r['des'] . "</td>
          <td>   <button class='btn btn-sm btn-primary edit' id=" . $r['sno'] . ">Edit</button> / <button class='btn btn-sm btn-primary delete' id=" . $r['sno'] . ">Delete</button> </td> 
        </tr>";
        }
        ?>
      </tbody>
    </table>

  </div>
  <script>
    let table = new DataTable('#myTable');
  </script>
  <script>
    let edit = document.getElementsByClassName('edit');
Array.from(edit).forEach(el => {
  el.addEventListener("click", (e) => {
    tr = e.target.parentNode.parentNode;
    console.log("edit", tr);
    title = tr.getElementsByTagName("td")[0].innerText;
    des = tr.getElementsByTagName("td")[1].innerText;
    console.log("title", title);
    console.log("discription", des);
    titleEdit1 = document.getElementById('titleEdit');
    descriptionEdit1 = document.getElementById('descriptionEdit');
    sno1 = document.getElementById("snoEdit");
    titleEdit1.value = title;
    descriptionEdit1.value = des;
    sno1.value = e.target.id;
    console.log("sno = ", sno1.value);

    //          OR

    // titleEdit.value = title;
    // descriptionEdit.value = des;
    $('#EditModal').modal('toggle');

  })
})
// DELETE FROM `notes` WHERE `notes`.`sno` = 13
let del = document.getElementsByClassName('delete');
Array.from(del).forEach(el => {
  el.addEventListener("click", (e) => {
    // console.log("edit", tr);
    sno = e.target.id;
    if(confirm("Are You Sure This Row Is delete ?")){
      console.log("yes");
      window.location = `index1.php?d=${sno}`;
    }
    else{
      console.log("No");
    }
  })
})
  </script>
  <!-- <script src="edit.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>