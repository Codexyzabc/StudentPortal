<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location: adminlogin.php");
    exit;
}
?>

<?php

include("../conn.php");
$sql="select * from registration";
$result=mysqli_query($conn,$sql);

if(!mysqli_num_rows($result)>0) {
// 	echo "Result found";
// }
// else {
	echo "No Result found";
}

$sql1="select * from contact";
$result1=mysqli_query($conn,$sql1);

if(!mysqli_num_rows($result1)>0) {
// 	echo "Result found";
// }
// else {
	echo "No Result found";
}

?>



<html>
<head>
	<title></title>
	<style>
		body {
            background: #c8e8e9;
        }
		h1 {
			text-align: center;
		}
		th,td {
			padding: 15px;
		}

	</style>
</head>
<body>
	<h1>Delete any record of Registered Students</h1>
<center>
<table border="2">
	<tr>
	<th>Sid</th>
	<th>Name</th>
	<th>Gender</th>
	<th>DOB</th>
	<th>Semester</th>
	<th>College</th>
	<th>Email</th>
	<!-- <th>Password</th> -->
	<th>Delete</th>
	</tr>

	<?php

	while($row=mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$row['Sid']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Gender']."</td>";
		echo "<td>".$row['DOB']."</td>";
		echo "<td>".$row['Sem']."</td>";
		echo "<td>".$row['College']."</td>";
		echo "<td>".$row['Email']."</td>";
		// echo "<td>".$row['Password']."</td>";
        echo "<td><a href=\"delete.php?id=$row[Sid]\" onclick=\"return confirm('Are you sure?')\">Delete</a>";
		echo "</tr>";
	}

	?>
</table>
<br><br>
<hr>
	<h1>Messages sent by Registered Students</h1>
<center>
<table border="2">
	<tr>
	<th>Cid</th>
	<th>Name</th>
	<th>Email</th>
	<th>Message</th>
	<th>Date and Time</th>
	<th>Delete</th>
	</tr>

	<?php

	while($row=mysqli_fetch_assoc($result1)) {
		echo "<tr>";
		echo "<td>".$row['Cid']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['Message']."</td>";
		echo "<td>".$row['Datetime']."</td>";
		// echo "<td>".$row['Password']."</td>";
        echo "<td><a href=\"delete.php?cid=$row[Cid]\" onclick=\"return confirm('Are you sure?')\">Delete</a>";
		echo "</tr>";
	}

	?>
</table>
</center>
</body>
</html>