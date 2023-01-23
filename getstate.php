<?php
$cid = $_POST['cid'];

$conn = mysqli_connect('localhost','root','','step_class');

$sql = "select * from states where country_id = $cid";

$query = mysqli_query($conn,$sql);

$stateoption = "<option value=''>--select state--</option>";
while( $data = mysqli_fetch_assoc($query)){
	
$stateoption .= "<option value=".$data['state_id'].">". $data['state_name']."</option>";
}
echo $stateoption;
	   
?>