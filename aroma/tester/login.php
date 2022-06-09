<?php include('config.php');
if (isset($_POST['ok']))
{$n=$_POST['name'];
 $p=$_POST['pass'];
 $n=mysqli_real_escape_string($connection,$n);
 $p=mysqli_real_escape_string($connection,$p);
 $q=mysqli_query($connection,"SELECT * FROM customers WHERE Email='$n' AND Password='$p'");
 if(mysqli_num_rows($q)==1)
 {  $row=mysqli_fetch_array($q);
 	$_SESSION['web12']=$row;
 	?>
 	<script type="text/javascript">window.location.href="index.php";</script>
 	<?php
 }
 else
 { ?>
 	<script type="text/javascript">alert("Wrong email or password combination.");
 	</script>
 	<script type="text/javascript">window.location.href="login1.php";</script>
 	
 	<?php 
 }
}
?>
