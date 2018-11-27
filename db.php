<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "hms";

   $conn = mysqli_connect($servername, $username, $password, $database);
   if(!$conn)
      die("Database connection failed !");
  else
  {
  	// echo 'Success';
  }
?>