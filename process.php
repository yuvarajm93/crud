<?php

$conn =new mysqli('localhost', 'root','root', 'crud')or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
	$name = $_POST['name'];
	$location = $_POST['location'];


	$conn->query("INSERT INTO data(name,location)VALUES('$name','$location')")or die($mysqli->error);
}





?>
