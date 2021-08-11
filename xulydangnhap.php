<?php
  $servername = "localhost";
  $database = "dktiemchung";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $sqlCheckUserExists = "SELECT * FROM user WHERE username = '".$username."'";

  $resultCheckUserExists = $conn->query($sqlCheckUserExists);

  if ($resultCheckUserExists->num_rows == 0) {
    readfile('index.php');
  }

  $row = $resultCheckUserExists->fetch_assoc();

  if ($row['password'] != $password) {
    readfile('index.php');
  }

  header('username: '.$username);
  readfile('dangkytiem.php');

  mysqli_close($conn);
?>