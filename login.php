

<html>
	<head>
		<title>
			Registration Form
		</title>
	</head>

	<body>
	
		<?php if(!empty($_GET['error'])){echo 'Access Denied';}?>
		<form name="login" method="post" action="submit.php">
			<table>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" id="pass"></td>
				</tr>
				
				<tr>
					
					<td><input type="submit" name="login" value="Sign In"></td>
				</tr>
				
			</table>
		
		</form>
	</body>
	</html>