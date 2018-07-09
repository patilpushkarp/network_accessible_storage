<?php 
$user=$_POST['username'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root','','jay');
$query="select * from `users` WHERE `username` LIKE '$user' AND `password` LIKE '$pass';";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);
if($count===1){
	//print("user logged in");
	
	
	
		echo"alert(\"logged in\")";
	
	
	header('Location:http://localhost/jay/home.html');
}
else{
	
	
			echo"alert(\"invalid\")";
	
	
	
	header('Location:http://localhost/jay/login.html');
}
//echo "num of users"+$count


?>