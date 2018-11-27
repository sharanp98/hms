<?php include "db.php"?>
<?php
	$username = $_POST['username'];
	$username = mysqli_real_escape_string($conn, $username);
	$password = $_POST['password'];
	$password = mysqli_real_escape_string($conn, $password);
	$sql = "SELECT * FROM login_details WHERE username='$username' and password = '$password' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$sql1 = "INSERT INTO login_timestamp values('$username', now() );";
		include('c_search.php');
	}
	else{
		include('wrong_login.html');
	}
?>