<?php
include('connection.php');
if(isset($_POST['submit'])) {
	$name = $_POST['user'];
	$email = $_POST['email'];
	$password = md5($_POST['pass']);
	$address = $_POST['address'];
	
$date = date('Y-m-d');
echo $sql = "INSERT INTO users (Name,Email,Password,Address,Date) VALUES ('$name','$email','$password','$address','$date')";

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
<td>Name</td>
<td><input type="text" name="user" id="user" value="" class=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" id="email" value="" class=""></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" id="pass" class="" value="" placeholder=""></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address" id="address" class="" value=""></textarea></td>
</tr>


<tr>
<td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="save" class=""></td>
</tr>


</table>
</form>
</body>
</html>
