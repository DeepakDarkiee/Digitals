<?php

$con=mysqli_connect("localhost","dsmiecom_group","dsmie@group","dsmiecom_group");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>