<?php
	include('connection.php');
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
		
		$sql = "SELECT * FROM users where Email= '$email' AND  Password='$pass' ";
		
		$query = mysqli_query($conn,$sql);
		
		$total = mysqli_num_rows($query);
		
		if($total > 0){
			
			$data = mysqli_fetch_array($query);
			//echo '<pre>';
			//print_r($data);
			session_start();
			
			$_SESSION['userDetails'] = $data;
			
			header("location:profile.php");
			
		}
		else {
			
			//echo 'Access Denied';
			header("location:login.php?error=1");
		}
	}
?>