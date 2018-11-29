<?php include "db.php"?>
<?php
if(isset($_POST['all']))
{	$query1 = "SELECT * FROM patients";
	$result = mysqli_query($conn,$query1);
}	
if(isset($_POST['button']))
{	$CName= $_POST['CName'];
	$CName=mysqli_real_escape_string($conn, $CName);
	$query="SELECT * FROM patients WHERE pname='$CName' ";
	$result = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patients Details</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/boostrap.css">
</head>
<body>
	<div>
		<h3 style="width: 50%; float: left;padding-left: 2%; ">Details</h3>
	</div>
	<div>
		<a style="width: 50%; float: right;color: white; text-align: right; padding-right: 3%;" href="index.html" style="color: red;"> <b><em>Log Out</em></b> </a> 
	</div>
	<br><br>
	<div>
		<a href="bargraph.html"><button style="background-color: #f44336;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;">Analyze All Patients</button></a>
	</div>
	<div id="the">
		<table>
			<div>
				<tr>
					<th>Patient Number</th>
					<th>Patient Name</th>
					<th>Patient Room</th>
					<th>Patient History</th>
					<th>Patient Month</th>
				</tr>
			<div>	
		<?php 
			if (!$result)
				die("Query Failed");
			else{
				// output data of each row
				while($row=mysqli_fetch_assoc($result)) {
					$no = $row['pno'];
					$name = $row['pname'];
					$add = $row['proom'];
					$pref = $row['phistory']; 
					$book = $row['pmonth'];
		?>		
			<div>
				<tr>
					<td> <?php echo($no); ?> </td> 
					<td> <?php echo($name); ?> </td>
					<td> <?php echo($add); ?> </td>
					<td> <?php echo($pref); ?> </td>
					<td> <?php echo($book);?> </td>
				</tr>
			</div>
			<?php    }
			}
		?>
		</table>
	</div>	
	<br>
	<div style="text-align: center;">
		<a style="display: inline-block; color: red;" href="c_search.php" style="color: red;"> <u><b><em>Go Back</em></b></u> </a>
	</div>
	
	
</body>
</html>