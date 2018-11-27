<?php
	//database
	define('DB_HOST', '127.0.0.1');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'hms');

	//get connection
	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if(!$mysqli){
		die("Connection failed: " . $mysqli->error);
	}
	$query = "SELECT pmonth from patients;";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_assoc($result)) {
		if ($row['pmonth'] == 'JAN')
		{
			$sql = "UPDATE patients SET pmonthno=1 WHERE pmonth='JAN'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}
		if ($row['pmonth'] == 'FEB')
		{
			$sql = "UPDATE patients SET pmonthno=2 WHERE pmonth='FEB'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}
		if ($row['pmonth'] == 'MAR')
		{
			$sql = "UPDATE patients SET pmonthno=3 WHERE pmonth='MAR'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}		if ($row['pmonth'] == 'APR')
		{
			$sql = "UPDATE patients SET pmonthno=4 WHERE pmonth='APR'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}
		if ($row['pmonth'] == 'MAY')
		{
			$sql = "UPDATE patients SET pmonthno=5 WHERE pmonth='MAY'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}
		if ($row['pmonth'] == 'JUN')
		{
			$sql = "UPDATE patients SET pmonthno=6 WHERE pmonth='JUN'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}
		if ($row['pmonth'] == 'JUL')
		{
			$sql = "UPDATE patients SET pmonthno=7 WHERE pmonth='JUL'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}
		if ($row['pmonth'] == 'AUG')
		{
			$sql = "UPDATE patients SET pmonthno=8 WHERE pmonth='AUG'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}

		if ($row['pmonth'] == 'SEP')
		{
			$sql = "UPDATE patients SET pmonthno=9 WHERE pmonth='SEP'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}
		if ($row['pmonth'] == 'OCT')
		{
			$sql = "UPDATE patients SET pmonthno=10 WHERE pmonth='OCT'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}

		if ($row['pmonth'] == 'NOV')
		{
			$sql = "UPDATE patients SET pmonthno=11 WHERE pmonth='NOV'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}

		if ($row['pmonth'] == 'DEC')
		{
			$sql = "UPDATE patients SET pmonthno=12 WHERE pmonth='DEC'";
			   if (mysqli_query($mysqli, $sql))
			   {
      				echo '<p hidden></p>';
  			   }
		}
		
	}
?>