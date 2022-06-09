<?php include('config.php');
if(!isset($_SESSION['admin']))
{ ?> <script type="text/javascript">window.location.href="adminlog.php"</script>
<?php } ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td><input type="submit" name="view" value="VIEW ORDERS"></td>
			<td><input type="submit" name="add" value="ADD PRODUCTS"></td>
			<td><input type="submit" name="del" value="UPDATE OR DELETE PRODUCTS"></td>
			<td><input type="submit" name="status" value="CHANGE ORDER STATUS"></td>
			<td><input type="submit" name="message" value="MESSAGE"></td>
			<td><input type="submit" name="cp" value="CHANGE PASSWORD"></td>
		</tr>
	</table>
</form>
<?php 
if (isset($_POST['view'])) {
	
	?> <script type="text/javascript">window.location.href="view.php"</script>
<?php }
if (isset($_POST['add'])) {
	?> <script type="text/javascript">window.location.href="addpro.php"</script>
<?php }
if (isset($_POST['del'])) {
	?> <script type="text/javascript">window.location.href="delpro.php"</script>
<?php }
if (isset($_POST['status'])) {
	?> <script type="text/javascript">window.location.href="status.php"</script>
<?php }
if (isset($_POST['message'])) {
	?> <script type="text/javascript">window.location.href="message.php"</script>
<?php  }
if (isset($_POST['cp'])) {
	?> <script type="text/javascript">window.location.href="cpassadm.php"</script>
<?php 	}
?>
<a href="adlogout.php">Logout</a>
</body>
</html>