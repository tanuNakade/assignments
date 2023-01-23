<?php
$conn = mysqli_connect('localhost','root','','step_class');
$sql = "select * from emp";
$query = mysqli_query($conn,$sql);
$total = mysqli_num_rows($query);
echo $total;
echo '<br>';
$data = mysqli_fetch_array($query);
print_r($data);
echo '<br>';
$data = mysqli_fetch_row($query);
print_r($data);
echo '<br>';
$data = mysqli_fetch_assoc($query);
print_r($data);

?>