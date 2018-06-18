<?php

  $myVar = $_POST["myVar"];
  $conn = mysqli_connect("localhost", "root", "", "curldb");
  
  $result = mysqli_query($conn, "SELECT * FROM `users` WHERE id=" . $myVar );
  
  $data = array();

    while ($row = mysqli_fetch_assoc($result))  {
    $data[] = $row;
    }

  echo json_encode($data);
?>
