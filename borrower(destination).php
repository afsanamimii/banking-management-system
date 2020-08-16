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
	<title>
		borrower adding
	</title>
</head>
<body>
	<?php

	if(isset($_POST['submit']))
	{

   $id=$_POST['Customer_ID'];
   $branch=$_POST['Branch'];
     $loan =$_POST['loan_ammount'];
     $year=$_POST['year'];
     $month=$_POST['month'];
     $day=$_POST['day'];
     $taking=$year.'/'.$month.'/'.$day;
     $interest=$_POST['interest_rate'];
     $duration=$_POST['duration'];

     $sql="insert into loan(customer_ID,branch,loan_ammount,taking_date,interest_rate,duration)"."values('$id','$branch','$loan',' $taking',' $interest','$duration')";

     $res=mysqli_query($conn,$sql);
     if(!$res)
     {
     	echo"error adding data";
     	
     }

     else
     {
     	echo"successfully added data data";
     }



   

	}
	?>
	<a href="menu.php">back to main menu</a>


</body>
</html>