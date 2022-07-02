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
		$sname = $_REQUEST['sname'];
		$fname = $_REQUEST['fname'];
		$mname = $_REQUEST['mname'];
		$email = $_REQUEST['email'];
		$dept = $_REQUEST['dept'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO studentdetails VALUES ('$rno',
			'$sname','$fname','$mname','$email','$dept')";
		
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


