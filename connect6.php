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
                $result1 = "DELETE FROM tenant
                        where TNO = '$tno'";
                $result2 = "DELETE FROM apartment
                        where TNO = '$tno'";
                $result3 ="DELETE FROM rent
                        where TNO = '$tno'";
                $result4="DELETE FROM dependent
                        where TNO = '$tno'";

                if(mysqli_query($conn, $result1)){
                    $_SESSION['status']="Data Deleted Successfully";
                    header('location: Details.php');
			    } 
			
				if(mysqli_query($conn, $result2)){
                    $_SESSION['status']="Data Deleted Successfully";
                    header('location: Details.php');
			    } 
                if(mysqli_query($conn, $result3)){
                    $_SESSION['status']="Data Deleted Successfully";
                    header('location: Details.php');
			    } 
			
				if(mysqli_query($conn, $result4)){
                    $_SESSION['status']="Data Deleted Successfully";
                    header('location: Details.php');
			    } 
				

;mysqli_close($conn);?>
			<a href="Details.php">
				<button style="color:black; background-color:red;">ADMIN</button>
			</a>
	</center>
</body>

</html>