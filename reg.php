<?php
include('connection.php');
if(isset($_POST['submit'])) {
	$firstname = $_POST['user'];
	$lastname = $_POST['user1'];
	$phoneno= $_POST['phone'];
	$email = $_POST['email'];
	$password =$_POST['pass'];
	$confirmpass = $_POST['pass1'];
	
$date = date('Y-m-d');
echo $sql = "INSERT INTO registration(First Name,Last Name,Phone Number,Email,Password,Confirm Password,Date) VALUES ('$firstname',$lastname,$phoneno,'$email','$password','$confirmpass ','$date')";

mysqli_query($conn,$sql);
}
?>
<html>
<head>
<title>mypage</title>
</head>
<body>
<form name= singup method="post">
<table align="center" cellpadding="2" width="20%" bgcolor="skyblue" cellspacing="2">
<tr>
   <td>First Name</td>
   <td><input type="text" name="user" id="user" value="" class=""></td>
</tr>
<tr>
<td>Last Name</td>
   <td><input type="text" name="user1" id="user1"></td>
</tr>
<tr>
	<td>Phone Number</td>
	<td><input type="text" name="phone" id="phone"></td>
</tr>
<tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" id="email" value="" class=""></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" id="pass" class="" value="" placeholder=""></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="confirm password" name="pass1" id="pass1" class="" value="" placeholder=""></td>
</tr>


<tr>
<td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="save" class=""></td>
</tr>


</table>
</form>
</body>
</html>