<?php
include('connection.php');
$id= $_GET['id'];

$sql ="select * from users where id=$id";

$query = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($query);

if(isset($_POST['update'])) {
	$name = $_POST['user'];
	$email = $_POST['email'];
	$password = md5($_POST['pass']);
	$address = $_POST['address'];
	$userid = $_POST['userid'];

$sql = "update users set Name='$name', Email='$email', Password='$password',Address='$address' where id=$userid";

mysqli_query($conn,$sql);
header("location:report.php");
}


?>
<html>
<head>
<title>mypage</title>
</head>
<body>
<form name= singup method="post">
  <input type="hidden" name="userid" id="userid" value="<?php echo $id?>">
<table align="center" cellpadding="2" width="20%" bgcolor="skyblue" cellspacing="2">
<tr>
<td>Name</td>
<td><input type="text" name="user" id="user" value="<?php echo $data['Name']?>" class=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" id="email" value="<?php echo $data['Email']?>" class=""></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" id="pass" class="" value="<?php echo $data['Password']?>" placeholder=""></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address" id="address" class="" value=""><?php echo $data['Address']?></textarea></td>
</tr>


<tr>
<td align="center" colspan="2"><input type="submit" name="update" id="update" value="update" class=""></td>
</tr>


</table>
</form>
</body>
</html>
