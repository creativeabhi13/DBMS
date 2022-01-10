<!DOCTYPE html>
<html>

<head>
	<title>CONNECT PHP</title>
</head>

<body>
	<center>

<?php

		
		$conn = mysqli_connect("localhost", "root", "", "apt_mgmt");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$name = $_REQUEST['fname'];
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		
		$sql = "INSERT INTO contact_us VALUES ('$name',
			'$email','$subject','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>DATA STORED SUCCESSFULLY !"
				. " </h1>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>


	</center>
</body>

</html>


