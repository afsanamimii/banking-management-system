<?php


$host="localhost";
$dbuser="admin";
$pass="12345";
$dbname="banking_management";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("connextion failed....!!!!" .mysqli_connect_errno());
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>cash deposite</title>
</head>
<body>
	<?php
     if(isset($_POST['submit']))

     {

     	$id=$_POST['customer_ID'];
     	$branch=$_POST['Branch'];
     	$ammount=$_POST['ammount'];

     	$sql="update deposite set deposite_ammount=deposite_ammount-$ammount where customer_ID=$id and branch='$branch'";
     	$res=mysqli_query($conn,$sql);
     	if(!$res)
     	{
     		die("error updating");
     	}
     	else 
     	{
     		echo "succesfully updated data";
     	}
     }

	?>
		<a href="menu.php">back to main menu</a>


</body>
</html>

