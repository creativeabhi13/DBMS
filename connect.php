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
		
		
		$s1 = $_REQUEST['name'];
		$s2 = $_REQUEST['email'];
		$s3 = $_REQUEST['subject'];
		$s4 = $_REQUEST['message'];
	
		
		
		$sql = "INSERT INTO contact_us VALUES ('$s1',
			'$s2','$s3','$s4')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$s1\n $s2\n "
				. "$s3\n $s4\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>


	</center>
</body>

</html>


