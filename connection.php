<?php
$servername="localhost";
$username="root";
$password="";
$dbname="accounts";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
$user=$_POST["username"];
$em=$_POST["email"];
$pass=$_POST["password"];
$sql="INSERT INTO customers(username,email,password)
VALUES('$user','$em','$pass')";
if(mysqli_query($conn,$sql)){
	echo "new record created successfully";
}
else{
	echo"error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>
