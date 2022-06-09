<!DOCTYPE html>
<html>
<head>
	<title>JQuery</title>
	<style type="text/css">
		label.error {
			background-color: red;
			color:white;
			padding: 5px;
			margin-left:3px;
		}
	</style>
</head>
<body>
<form method="post" id="frm">
	<table cellpadding="10">
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="nm" id="nm" required>
				
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="email" id="em" name="em" required>
				
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" name="pwd" id="pwd" required>
				
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="ok" value="Sign Up">
			</td>
		</tr>
	</table>
</form>
<div id="messages"></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//$("#frm").validate();
		$("#frm").validate({
			rules:{
				nm:{
					required:true,
					minlength:3
				},
				em:{
					required:true,
					email:true
				},
				pwd:{
					required:true,
					minlength:6
				}
			},
			messages:{
				nm:{
					required:" Whats your name?",
					minlength:" Name should have atleast 3 chars"
				},
				pwd:{
					required:" Whats your password?",
				}
			},
			submitHandler:function(){
				$("#frm").append("<h4 id='ldr'>Please wait...</h4>");

			// submit the form data using ajax
			$.ajax({
				type:"POST",
				data:$("#frm").serialize(),
				url:"savedata.php",
				error:function(response){
					console.log(response.status);
				},
				success:function(response){
					$("#messages").fadeIn(1000);
					$("#messages").html(response);
					$("#ldr").hide();
					$("#frm")[0].reset();
					$("#messages").fadeOut(1000);
				}
			});

		}
		})
	});

</script>
</body>
</html>