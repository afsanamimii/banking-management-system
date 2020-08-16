<?php 


echo"<br \>";
echo"<br \>";

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


<html>
<head>
	<title>data adding</title>
</head>
<body>
	<?php
    
    if(isset($_POST['submit']))
    {

    	$first=$_POST['first_name'];
    	$last=$_POST['last_name'];
    	$address=$_POST['address'];
    	$phone=$_POST['phone_number'];
    	$gender=$_POST['gender'];
    	$email=$_POST['email'];
    	$branch=$_POST['branch'];
    	$year=$_POST['year'];
        $month=$_POST['month'];
        $day=$_POST['day'];
        $dob=$year.'/'.$month.'/'.$day;

        $sql="insert into customer_info(first_name,last_name,address,phone_number,gender,email,branch,date_of_birth)"."values('$first','$last','$address','$phone','$gender','$email','$branch',' $dob')";
        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
        	die("queri failed error.....!!!!!!!!");
        }

        else{ echo "successfully added data";}

    }

	?>
	<a href="menu.php">back to main menu</a>


</body>
</html>