<?php include('config.php');
if (isset($_POST['ok']))
{
	$n=$_POST['name'];
	$e=$_POST['email'];
	$p=$_POST['password'];
	$cp=$_POST['cpassword'];
	$ba=$_POST['baddress'];
	$sa=$_POST['saddress'];
	
	$n=mysqli_real_escape_string($connection,$n);
	$e=mysqli_real_escape_string($connection,$e) ;
	$p=mysqli_real_escape_string($connection,$p);
	$cp=mysqli_real_escape_string($connection,$cp);
	if($p!=$cp)
	{ ?>
		<script type="text/javascript">alert("Passwords did not match!!!");
		window.location.href="register.php";</script>
		<?php
	}
	else
	{
		$q=mysqli_query($connection,"SELECT * FROM customers WHERE Email='$e'");
		$co=mysqli_num_rows($q);
		if($co==1)
		{ ?>
		<script type="text/javascript">alert("Email provided has already been taken!!!");
		window.location.href="register.php";</script>
		<?php

		}
		else
		{
			$i=mysqli_query($connection,"INSERT INTO customers VALUES(0,'$n','$e','$p','$ba','$sa')");
			$i1=mysqli_query($connection,"SELECT * FROM customers WHERE Email='$e'");
			$id=mysqli_fetch_array($i1);
			$q=mysqli_query($connection,"CREATE TABLE cart$id[0](id INT AUTO_INCREMENT,pid INT ,pname TEXT,pfile TEXT,ifile TEXT,price INT,qty INT,primary key(id))");
			if ($i)
			 {?>
			<script type="text/javascript">alert("Registered successfully!!!");
			 window.location.href="login1.php";</script>
			<?php }
		}
	}
}
?>