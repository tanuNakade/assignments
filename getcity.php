<?php
$cid = $_POST['cid'];

$conn = mysqli_connect('localhost','root','','step_class');

$sql = "select * from city where state_id = $cid";

$query = mysqli_query($conn,$sql);

$cityoption = "<option value=''>--select state--</option>";
while( $data = mysqli_fetch_assoc($query)){
	
$cityoption .="<option value=".$data['city_id'].">". $data['city_name']."</option>";
}
echo $cityoption;
	   
?>