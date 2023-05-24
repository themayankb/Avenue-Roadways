<?php

  $server = "sql201.epizy.com";
  $username = "epiz_34262391";
  $password = "UNPEsl5V7D3KQ";
  $dbname = "epiz_34262391_avenueroadways";

  $conn = mysqli_connect($server, $username, $password, $dbname);

  if(!$conn){
    die("Connection Failed:" .mysql_connect_error());
  }

?>