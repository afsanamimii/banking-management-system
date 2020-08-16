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
	<title>delete borrower</title>
</head>
<body>
	<?php
     if(isset($_POST['submit']))

     {
     	$id=$_POST['customer_ID'];
     	$branch=$_POST['Branch'];

     	$sql="delete from deposite where customer_ID=$id AND branch='$branch' and deposite_ammount=0";
     	$res=mysqli_query($conn,$sql);
          
     	if(!$res)
     	{
     		echo "unable to delete";
     	}
     else
     {
        echo "successfully deleted record of id:$id from $branch branch";
         echo"<br \>";
    }
}

     
     ?>

     <a href="menu.php">back to main page</a>
 </body>
 </html>
 
