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
        $aptno=$_REQUEST['aptno'];
		$tno = $_REQUEST['tno'];
		$tphone = $_REQUEST['tphone'];
		$type = $_REQUEST['type'];
		$block = $_REQUEST['block'];
	    $dname = $_REQUEST['dname'];
		$dphone = $_REQUEST['dphone'];
		
		
                $table1="update tenant set TNAME = '$tname' where TNO = '$tno'";


                $table2="update tenant set TPHONE = '$tphone' where TNO = '$tno'";

                $table3="update apartment set TYPE = '$type' where TNO = '$tno'";

                $table4="update apartment set BLOCK = '$block' where TNO = '$tno'";

                $table5="update dependent set DNAME = '$dname' where TNO = '$tno'";

                $table6="update dependent set DPHONE = '$dphone' where TNO = '$tno'";
		                  
		        
				
                if(mysqli_query($conn, $table1)){
                    $_SESSION['status']="Data Updated Successfully";
                    header('location: Update.php');
			    } 
			
				if(mysqli_query($conn, $table2)){
                    $_SESSION['status']="Data Updated Successfully";
                    header('location: Update.php');
			    } 
                if(mysqli_query($conn, $table3)){
                    $_SESSION['status']="Data Updated Successfully";
                    header('location: Update.php');
			    } 
			
				if(mysqli_query($conn, $table4)){
                    $_SESSION['status']="Data Updated Successfully";
                    header('location: Update.php');
			    } 
				if(mysqli_query($conn, $table5)){
                    $_SESSION['status']="Data Updated Successfully";
                    header('location: Update.php');
			    } 
				if(mysqli_query($conn, $table6)){
                    $_SESSION['status']="Data Updated Successfully";
                    header('location: Update.php');
			    } 
			
			
		    
		
		;mysqli_close($conn);
		?>
			<a href="index.php">
				<button style="color:green">ADMIN</button>
			</a>
	</center>
</body>

</html>