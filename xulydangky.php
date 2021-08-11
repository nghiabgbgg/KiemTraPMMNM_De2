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
  $fullName = $_POST['fullName'];
  $phone = $_POST['phone'];
  
  $sqlCheckUserExists = "SELECT * FROM user WHERE username = '".$username."'";

  $resultCheckUserExists = $conn->query($sqlCheckUserExists);

  if ($resultCheckUserExists->num_rows > 0) {
    readfile('dangkythatbai.php');
  }

  $sqlCreateUser = "INSERT INTO user(username,password,phone_number,full_name) VALUES('".$username."', '".$password."', '".$phone."', '".$fullName."')";

  $resultCreateUser = $conn->query($sqlCreateUser);

  if ($resultCreateUser != TRUE) {
    readfile('dangkythatbai.php');
  }

  readfile("dangkythanhcong.php");

  mysqli_close($conn);
?>