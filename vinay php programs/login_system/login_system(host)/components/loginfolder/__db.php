<?php
$host = 'sql301.infinityfree.com';
$user = 'if0_39131610';
$psw = 'v94DcafKMd9';
$database = 'if0_39131610_users';

// કનેક્શન બનાવો
$conn = new mysqli($host, $user, $psw, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
