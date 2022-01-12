

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
$result = mysqli_query($conn,"SELECT * FROM tenant where tno=$tno");

while($row = mysqli_fetch_array($result))

{
echo "<table border='1'>
<tr>
<th>TENANT NUMBER</th>
<th>TENANT NAME</th>
<th>TENANT PHONE</th>
</tr>";

echo "<tr>";
echo "<td>" . $row['TNO'] . "</td>";
echo "<td>" . $row['TNAME'] . "</td>";
echo "<td>" . $row['TPHONE'] . "</td>";
echo "</tr>";
echo "<br/>";echo "<br/>";

echo "</table>";
echo "<br/>";



}
$result = mysqli_query($conn,"SELECT APTNO,TYPE,BLOCK FROM apartment,tenant where tenant.tno=$tno and apartment.tno=tenant.tno");

while($row = mysqli_fetch_array($result))

{

echo "<table border='2'>
<tr>
<th>APARTMENT NUMBER</th>
<th>APARTMENT TYPE</th>
<th>APARTMENT BLOCK</th>
</tr>";

echo "<tr>";
echo "<td>" . $row['APTNO'] . "</td>";
echo "<td>" . $row['TYPE'] . "</td>";
echo "<td>" . $row['BLOCK'] . "</td>";
echo "</tr>";
echo "<br/>";echo "<br/>";

echo "</table>";
echo "<br/>";


}
$result = mysqli_query($conn,"SELECT DNAME,DPHONE  FROM dependent,tenant where tenant.tno=$tno and dependent.tno=tenant.tno");

while($row = mysqli_fetch_array($result))

{

echo "<table border='3'>
<tr>
<th>DEPENDENT NAME</th>
<th>DEPENDENT PHONE</th>

</tr>";

echo "<tr>";
echo "<td>" . $row['DNAME'] . "</td>";
echo "<td>" . $row['DPHONE'] . "</td>";
echo "</tr>";
echo "<br/>";echo "<br/>";

echo "</table>";
echo "<br/>";


}
$result = mysqli_query($conn,"SELECT DATE,AMOUNT  FROM rent,tenant where tenant.tno=$tno and rent.tno=tenant.tno");

while($row = mysqli_fetch_array($result))

{
echo "<table border='4'>
<tr>
<th>PAYMENT DATE</th>
<th>TOTAL AMOUNT</th>

</tr>";

echo "<tr>";
echo "<td>" . $row['DATE'] . "</td>";
echo "<td>" . $row['AMOUNT'] . "</td>";
echo "</tr>";
echo "<br/>";echo "<br/>";

echo "</table>";
echo "<br/>";echo "<br/>";


}
/* $result = mysqli_query($conn,"SELECT * FROM apartment,tenant where tenant.tno=$tno and apt.tno=tenant.tno");

while($row = mysqli_fetch_array($result))

{




echo $row['DATE '] . " " . $row['REPAIR_CHARGES']. " " . $row['STAFF_SALARIES']. " " . $row['MISC_CHARGES'];
echo "<br/>";
echo $row['DNAME'] . " " . $row['DPHONE'];
echo "<br/>";
echo $row['DATE'] . " " . $row['AMOUNT'];
echo "<br/>";

} */


;mysqli_close($conn);?>
<a href="Details.php"> <button style="color:black; background-color:red;">ADMIN</button> </a>
	</center>
</body>

</html>


