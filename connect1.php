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
		
		
		$tno = $_REQUEST['tno'];
		$dname = $_REQUEST['dname'];
		$dphone = $_REQUEST['dphone'];
		
	
		
		
			
				$table1 = "INSERT INTO dependent VALUES ($tno, '$dname','$dphone')";
				mysqli_query($conn, $table1);
if(mysqli_query($conn, $table1)){
			echo "<h1>DATA STORED SUCCESSFULLY !"
				. " </h1>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}	

			

        ;mysqli_close($conn);
		?>


	</center>
</body>

</html>


