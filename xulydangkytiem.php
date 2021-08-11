<?php
  $servername = "localhost";
  $database = "dktiemchung";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $injectionAddress = $_POST['injection_address'];
  $priority = $_POST['priority'];
  $appointmentDatetime = $_POST['appointment_datetime'];
  
  echo $appointmentDatetime;

  mysqli_close($conn);
?>