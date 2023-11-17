<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'db_smk_jjk';

  $conn = mysqli_connect($host, $user, $pass, $db);
  if($conn){
    //echo "berhasil";
  }

  mysqli_select_db($conn, $db);
?>