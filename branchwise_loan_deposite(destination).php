

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
	<title>branch oberview</title>
</head>
<body>
	<?php
     if(isset($_POST['submit']))

     {
     	$branch=$_POST['Branch'];

     	$sql="SELECT branch, sum(loan_ammount) as total_loan  from loan where branch='$branch' ";
     	$sql1="SELECT  branch,sum(deposite_ammount) as total_deposite from deposite where branch='$branch'";
     	$res=mysqli_query($conn,$sql);
     	$res1=mysqli_query($conn,$sql1);
     	if(!$res && !$res1)
     	{

              die("queri failed");
     	}

     	while($row=mysqli_fetch_assoc($res))
  {

  

  	foreach($row as $key=>$value)
  	{
  		echo" {$key}:"."{$value}";
  	      echo "||";
  	
  	}
    echo "<br /><br /><hr />"; 



     }

     while($row=mysqli_fetch_assoc($res1))
  {

  

  	foreach($row as $key=>$value)
  	{
  		echo" {$key}:"."{$value}";
  	      echo "||";
  	
  	}
    echo "<br /><br /><hr />"; 
}
}


     ?>
     <a href="menu.php">back to main menu</a>


</body>
</html>