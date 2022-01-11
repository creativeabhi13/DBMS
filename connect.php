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
		
		
		$tname = $_REQUEST['tname'];
		$aptno = $_REQUEST['aptno'];
		$tphone = $_REQUEST['tphone'];
		$type = $_REQUEST['type'];
		$block = $_REQUEST['block'];
		
		
	    
		
		for ($i = 1; $i <= 99999; $i++)
		{
            $tno = mysqli_query($conn,"SELECT TNO FROM tenant WHERE TNO = '$i'");
			if (mysqli_num_rows($tno) == 0)
			
			{
				$table1 = "INSERT INTO tenant VALUES ($i,'$tname', $tphone)";
				mysqli_query($conn, $table1);
				$table2 = "INSERT INTO apartment VALUES ($aptno,$i, '$type',$block)";
				mysqli_query($conn, $table2);
                if(mysqli_query($conn, $table1)){
                    $_SESSION['status']="Data Inserted Successfully";
                    header('location: adddependent.php');
			    } 
				break;
				if(mysqli_query($conn, $table2)){
                    $_SESSION['status']="Data Inserted Successfully";
                    header('location: adddependent.php');
			    } 
				break;
			
		        
				/* echo
				     "<h1>DATA STORED SUCCESSFULLY !"
				. " </h1>";
				echo nl2br("\n$i\n $tname\n "
				. "$tphone\n $type\n $block"); */ 
				
            }

	    
		
			

			
		

			

        }
		
		
		;mysqli_close($conn);
		?>

<a href="index.php"> <button style="color:green">ADMIN</button> </a>
	</center>
</body>

</html>


