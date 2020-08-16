<?php


$host="localhost";
$dbuser="admin";
$pass="12345";
$dbname="banking_management";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
  die("connection failed....!!!!" .mysqli_connect_errno());
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>monthly_update_balance</title>
</head>
<body>
	<?php
   
   if(isset($_POST['submit'])){
       
	$sql="update loan set loan_ammount=loan_ammount+((loan_ammount)*0.05)";
	$sql1="update deposite set deposite_ammount=deposite_ammount+((deposite_ammount)*0.05)";
	$res=mysqli_query($conn,$sql);
	$res1=mysqli_query($conn,$sql1);
	if(!$res && !$res1)
	{
		echo"failed to update value....!!";
	}

	else
	{
		echo"succesfully updated value";
		echo "<br />";
	}
}
	?>
   <a href="menu.php">back to main page</a>

</body>
</html>