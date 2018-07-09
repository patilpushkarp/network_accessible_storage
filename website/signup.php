<?php 
$user=$_POST['username'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root','','jay');
$query="INSERT INTO `users`(`username`, `password`) VALUES ('$user','$pass');";
$res=mysqli_query($con,$query);
IF($res){
	?><script type="text/javascript">
	console.log("registered successfully");
		alert("registered successfully");
	</script><?php
	header('Location:http://localhost/jay/login.html');
}
else{
	header('Location:http://localhost/jay/signup.html');
}

?>