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
	<h1>Registered Students</h1>
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
		echo "</tr>";
	}

	?>
</table>
</center>
</body>
</html>