<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input type="text" name="user" placeholder="USERNAME" required>
	<input type="Password" name="pass" placeholder="PASSWORD" required>
	<input type="submit" name="ok">
</form>
<?php include('config.php');
if (isset($_POST['ok']))
{$u=$_POST['user'];
 $p=$_POST['pass'];
 $n=mysqli_real_escape_string($connection,$n);
 $p=mysqli_real_escape_string($connection,$p);
 $q=mysqli_query($connection,"SELECT * FROM adminlog WHERE user='$u' AND pass='$p'");
 if(mysqli_num_rows($q)==1)
 {  $row=mysqli_fetch_array($q);
 	$_SESSION['admin']=$row;
 	?>
 	<script type="text/javascript">window.location.href="adindex.php";</script>
 	<?php
 }
 else
 { ?>
 	<script type="text/javascript">alert("Wrong username or password combination.");
 	</script>
 	<script type="text/javascript">window.location.href="adminlog.php";</script>
 	
 	<?php 
 }
}
?>

