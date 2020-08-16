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
	<title>Branchwise borrower list</title>
</head>
<body>
	<?php

	if(isset($_POST['submit']))
	{

		$branch=$_POST['Branch'];

		$sql="select * from borrower where branch='$branch'";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("query failed");
		}

	
			while($row=mysqli_fetch_assoc($res))
			{
				foreach($row as $key=>$value)
				{
					echo"{$key}:"."{$value}";
					echo "||";
				}
				echo "<br /><br />";
			}

	}
	?>
<a href="menu.php">back to main menu</a>

</body>
</html>