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
		
		
		$tname = $_REQUEST['tname'];
		$aptno = $_REQUEST['aptno'];
		$tphone = $_REQUEST['tphone'];
		$type = $_REQUEST['type'];
		$block = $_REQUEST['block'];
		$rent = $_REQUEST['rent'];
		$date = $_REQUEST['date'];
		$date = date("d-m-Y",strtotime($date));
	
		
		for ($i = 1; $i <= 99999; $i++)
		{
            $tno = mysqli_query($conn,"SELECT TNO FROM tenant WHERE TNO = '$tname'");
			if (mysqli_num_rows($tno) == 0)
			{
				$table1 = "INSERT INTO tenant VALUES ($i,'$tname', $tphone)";
				mysqli_query($conn, $table1);
				$table2 = "INSERT INTO apartment VALUES ($aptno,$i, '$type',$block)";
				mysqli_query($conn, $table2);
				$table3 = "INSERT INTO finance VALUES ($date,0,0,0,$aptno)";
				mysqli_query($conn, $table3);
				$table4 = "INSERT INTO rent VALUES ($date,$i,'$rent')";
				mysqli_query($conn, $table4);
				break;
            }
		
			echo "<h1>DATA STORED SUCCESSFULLY !"
				. " </h1>";

			
		

			

        }
		
		
		;mysqli_close($conn);
		?>


	</center>
</body>

</html>


