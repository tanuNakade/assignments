<html>
	<head>
		<title>
			Registration Form
		</title>
	</head>

	<body>
	
		<?php if(!empty($_GET['error'])){echo 'Access Denied';}?>
		<form name="Register" method="post" action="submit.php">
			<table>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="password" name="pass" id="pass"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" id="pass"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="pass" id="pass"></td>
				</tr>
				
				<tr>
					
					<td><input type="submit" name="Create Account" value="Sign In"></td>
				</tr>
				
			</table>
		
		</form>
	</body>
	</html>