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
		$aptno = $_REQUEST['aptno'];
		$staff_sal = $_REQUEST['staff_sal'];
		
		$misc_charges = $_REQUEST['misc_charges'];
		$repaircharges = $_REQUEST['repaircharges'];
		$rent = $_REQUEST['rent'];
		$date = $_REQUEST['date'];
		
	    
		
		
	
	
				$table1 = "INSERT INTO finance VALUES ($date,$repaircharges, $staff_sal,$misc_charges,$aptno)";
				mysqli_query($conn, $table1);
             
				$table2 = "INSERT INTO rent VALUES ($date,$tno,$rent)";
				mysqli_query($conn, $table2);
                
            

                 echo 
				    "DATA SAVED SUCCESSFULLY";
                echo nl2br("\n$tno\n $aptno\n "
				    ."$staff_sal\n $misc_charges\n $repaircharges \n$rent\n$date");
			
				 
		
		;mysqli_close($conn);
		?>

<a href="index.php"> <button style="color:black; background-color:red;">ADMIN</button> </a>
	</center>
</body>

</html>


