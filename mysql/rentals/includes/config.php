<?php

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

// check connection
if(!$conn){
  echo 'Connection error: '. mysqli_connect_error();
}

// Site-wide config
$site_title = "Beach Spear" . " " ."Inc.";
$indexed_array = ['one', 'two' => 'two', 'three'];

?>