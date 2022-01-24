<!DOCTYPE html>
<html>

<head>
	<title>CONNECT PHP</title>
</head>

<body>
	<center>
		<?php
session_start();
		
		$conn = mysqli_connect("localhost", "root", "", "apt_mgmt");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		
		$sql = "INSERT INTO contact_us VALUES ('$name',
			'$email','$subject','$message')";


		
		if(mysqli_query($conn, $sql)){
               $_SESSION['status']="Data Inserted Successfully";
               header('location: index.php');
			    /* echo "<h1>DATA STORED SUCCESSFULLY !"
				. " </h1>";
                echo nl2br("\n$name\n $email\n "
				. "$subject\n $message\n ") */;
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>
			<a href="index.php">
				<button style="color:black; background-color:red;">ADMIN</button>
			</a>
	</center>
</body>

</html>