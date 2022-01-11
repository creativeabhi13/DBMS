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
		
		
		$tno = $_REQUEST['tno'];
		$dname = $_REQUEST['dname'];
		$dphone = $_REQUEST['dphone'];
		
	
		
		
			
			$table1 = "INSERT INTO dependent VALUES ($tno, '$dname','$dphone')";
			mysqli_query($conn, $table1);

			if(mysqli_query($conn, $table1)){
               $_SESSION['status']="Data Inserted Successfully";
               header('location: adddependent.php');
			    
			
		    } else{
			     echo "ERROR: Hush! Sorry $sql. "
				    . mysqli_error($conn);
		    }	
        
			/* echo "<h1>DATA STORED SUCCESSFULLY !"
				. " </h1>";

			echo nl2br("\n$tno\n $dname\n "
				. "$dphone\n"); */
			 
          


		
			

        ;mysqli_close($conn);?>
<a href="index.php"> <button style="color:black; background-color:red;">ADMIN</button> </a>
	</center>
</body>

</html>


