<?php include('config.php');
if(!isset($_SESSION['admin']))
{ ?> <script type="text/javascript">window.location.href="adminlog.php"</script>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
	<title>View messages</title>
</head>
<body>
	<button onclick="window.location.href = 'adindex.php';">BACK</button>
<table border="2px" padding="3px">
	<thead>
		<th>ID</th>
		<th>Email</th>
		<th>Messages</th>
		
	</thead>
	<tbody>
		<?php $q=mysqli_query($connection,"SELECT * FROM message ");
		while($row=mysqli_fetch_array($q)) { ?>
		<tr>
			<td><?php echo $row[0] ?></td>
			<td><?php echo $row[1] ?></td>
			<td><?php echo $row[2]?></td>
			

		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="adlogout.php">Logout</a>
</body>
</html>