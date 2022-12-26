<?php

//crate connection
$conn=mysqli_connect('localhost','root'.'');

//check connection
if(!$conn)
{
	die("connection failed: ".mysqli_connect_error());
}

else
{
	echo "connected successfully";
}

?>