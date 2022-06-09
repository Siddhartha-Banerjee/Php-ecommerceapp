<!DOCTYPE html>
<html>
<head>
	<title>
		Sign Up
	</title>
	<style type="text/css">
		
	</style>
	<script type="text/javascript">
		// events -> onclick, onblur,onkeypress,onchange,onselect,onMouseOver,onMouseOut,onkeyUp,onLoad and onFocus,onsubmit

		function validateThis(){
			var name = document.getElementById('nm');
			var em = document.getElementById('em');
			var pwd = document.getElementById('pwd');
			var submit = true;
			//console.log(name.value.length);
			if(name.value.length==0){
				document.getElementById('name_error').innerHTML = "Whats your name??";
				document.getElementById('name_error').style.color = 'red';
				submit = false;
				
			}else{
				document.getElementById('name_error').innerHTML = "";
				
			}
			if(em.value.length==0){
				document.getElementById('em_error').innerHTML = "Whats your email??";
				document.getElementById('em_error').style.color = 'red';
				submit = false;
				
			}else{
				document.getElementById('em_error').innerHTML = "";
				
			}
			if(pwd.value.length==0){
				document.getElementById('pwd_error').innerHTML = "Whats your Password??";
				document.getElementById('pwd_error').style.color = 'red';
				submit = false;
				
			}else{
				document.getElementById('pwd_error').innerHTML = "";
				
			}
			return submit;
			
		}
		function check(obj){
			var value = obj.value;

			if(value.length<3){
				document.getElementById('name_error').innerHTML = "Enter atleast 3 characters in name";
				obj.style.backgroundColor = 'pink';
			}
			else
			{
				document.getElementById('name_error').innerHTML = "";
				obj.style.backgroundColor = 'white';
			}
		}
		var i = 0;
		function animate(){
			var obj = document.getElementById('head');
			var counter = 0;
			var timer = setInterval(function(){
				counter++;
				if(i==0)
				{
					obj.style.color = 'red';
					i=1;

				}
				else
				{
					obj.style.color = 'green';
					i=0;
				}
				if(counter==10){
					clearInterval(timer);
				}
				obj.innerHTML += counter;
			},1000);
		}
	</script>
</head>
<body onload="animate()">
	<h1 id="head">Register here</h1>
<form method="post" onsubmit="return validateThis()">
	<table cellpadding="10">
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="nm" id="nm" onkeyup="check(this)">
				<span id="name_error"></span>
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="email" id="em" name="em">
				<span id="em_error"></span>
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" name="pwd" id="pwd">
				<span id="pwd_error"></span>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="ok" value="Sign Up">
			</td>
		</tr>
	</table>
</form>
</body>
</html>