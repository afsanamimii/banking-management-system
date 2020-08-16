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
		depositor adding
	</title>
</head>
<body>
	<?php

	if(isset($_POST['submit']))
	{

   $id=$_POST['Customer_ID'];
   $branch=$_POST['Branch'];
     $deposite =$_POST['deposite_ammount'];
     $year=$_POST['year'];
     $month=$_POST['month'];
     $day=$_POST['day'];
     $saving=$year.'/'.$month.'/'.$day;
     $interest=$_POST['interest_rate'];
     $duration=$_POST['duration'];

     $sql="insert into deposite(customer_ID,branch,deposite_ammount,saving_date,interest_rate,duration)"."values('$id','$branch','$deposite',' $saving',' $interest','$duration')";

     $res=mysqli_query($conn,$sql);
     /*$search="select * from customer_info where customer_ID=$id";
     $res1=mysqli_query($conn,$search); */
     if(!$res)
     {
     	echo"error adding data";
     	
     }
     
     /*if(!$res1)
     {
     	die("Id not found.create an account first");
     } */

     else
     {
     	echo"successfully added data data";
     	

     }

	}
	?>
	<a href="menu.php">back to main menu</a>


</body>
</html>
