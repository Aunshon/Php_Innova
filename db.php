<?php
  $hostname="localhost";
  $serverUsername="root";
  $serverPassword="";
  $databaseName="db_class_test";

  $connectionQuery=mysqli_connect($hostname,$serverUsername,$serverPassword,$databaseName);
  if (!$connectionQuery) {
    echo "Connection Failed 😭<br>";
  }
  // else {
  //   echo "Database Connected Successfully 😍<br>";
  // }
 ?>
