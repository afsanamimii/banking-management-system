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
	<title>login</title>
</head>
<body>
	<?php 


	 if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."' AND Pass='".$password."'  limit 1";
    //$sql1="select customer_ID,first_name,last_name,address,phone_number,email,date_of_birth from customerinfo";
    
    $res=mysqli_query($conn,$sql);

    
    if(mysqli_num_rows($res)==1)
    {
       
        include("menu.php");
       

        
        }  
    
    else{
       
        echo " You Have Entered Incorrect Password";
       
       
    } 
        
}
?>


</body>
</html>





