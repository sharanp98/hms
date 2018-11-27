<?php 
	include "db.php";
	$CName = $_POST['CName'];
	$CAddress = $_POST['CAddress'];
	$CDriver = $_POST['CDriver'];
	$PMonth = $_POST['PMonth'];
	$sql = "INSERT INTO patients (pname,proom,phistory,pmonth) values ('$CName','$CAddress','$CDriver','$PMonth');";
	if ($conn->query($sql) === TRUE) {
	    include ("c_details.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>