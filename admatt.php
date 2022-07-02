<!DOCTYPE html>
<html>

<head>
	<title>Insert Page </title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "project");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$rno = $_REQUEST['rno'];
		$sem1 = $_REQUEST['sem1'];
		$sem2 = $_REQUEST['sem2'];
		$sem3 = $_REQUEST['sem3'];
		$sem4 = $_REQUEST['sem4'];
		$sem5 = $_REQUEST['sem5'];
		$sem6 = $_REQUEST['sem6'];
		$total = $_REQUEST['total'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO attendance VALUES ('$rno',
			'$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$total')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<a href="adportal.html">
<input type="button" class="btn"  value="GO BACK"></a>
	</center>
</body>

</html>
