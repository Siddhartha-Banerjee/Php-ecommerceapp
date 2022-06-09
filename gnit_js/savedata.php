<?php

$conn = mysqli_connect("localhost","root","","gnit_2");

$name = $_POST['nm'];
$email = $_POST['em'];
$pwd = $_POST['pwd'];

$query = mysqli_query($conn,"INSERT INTO users VALUES (0,'$name','$email','$pwd','')");
if($query){
	echo 'Data saved successfully';
}
else
{
	echo "ERROR ".mysqli_error($conn);
}

?>