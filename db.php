<?php
  $username = "root";
  $password = "";
  $hostname = "localhost";
  $dbname    = "like-dislike";

  $conn = mysqli_connect( $hostname, $username, $password, $dbname ) or die( "Database not connected!" );
?>
