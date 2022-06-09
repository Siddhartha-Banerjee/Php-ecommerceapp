<?php include('config.php');
if(!isset($_SESSION['admin']))
{ ?> <script type="text/javascript">window.location.href="adminlog.php"</script>
<?php } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update or delete products</title>
</head>
<body>
<table border="2px">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Type</th>
		<th>Image Path</th>
		<th>Price</th>
		<th>Description</th>
		<th>Screen</th>
		<th>RAM</th>
		<th>ROM</th>
		<th>Battery</th>
		<th>Warrenty</th>
		<th>Processor</th>
		<th>Camera</th>
		<th>Quantity</th>
	</thead>
	<tbody>
		<?php $q=mysqli_query($connection,"SELECT * FROM products");
		while($row=mysqli_fetch_array($q)) { ?>
		<tr>
			<td><?php echo $row[0] ?></td>
			<td><?php echo $row[1] ?></td>
			<td><?php echo $row[2] ?></td>
			<td><?php echo $row[3] ?></td>
			<td><?php echo $row[4] ?></td>
			<td><?php echo $row[5] ?></td>
			<td><?php echo $row[6] ?></td>
			<td><?php echo $row[7] ?></td>
			<td><?php echo $row[8] ?></td>
			<td><?php echo $row[9] ?></td>
			<td><?php echo $row[10] ?></td>
			<td><?php echo $row[11] ?></td>
			<td><?php echo $row[12] ?></td>
			<td><?php echo $row[13] ?></td>
			<form method="POST">
			<td>
			<input type="number" name="id" value="<?php echo $row[0] ?>" hidden>
            <input type="submit" name="Remove" value="Remove">
            </td>
            <td>
            <input type="submit" name="Update" value="Update">	
            </td>
            </form>
		</tr>
	<?php } ?>
	</tbody>
</table>
<?php
if(isset($_POST['Remove']))
{
	$id=$_POST['id'];
	$q=mysqli_query($connection,"DELETE FROM products WHERE id='$id'");
	?> <script type="text/javascript">window.location.href="delpro.php";</script>
	<?php
}

if(isset($_POST['Update']))
{ $id=$_POST['id'];
?> <script type="text/javascript">window.location.href="update.php?id=<?php echo $id ?>"</script>
<?php	
}
?>
</body>
</html>