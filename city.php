<?php
$conn = mysqli_connect('localhost','root','','step_class');
$sql = "select * from states";
$query = mysqli_query($conn,$sql);
?>
<html>
 <head>
   <title>
      Form
	    </title>
		  </head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#states").change(function(){
var stateid = $("#states").val();

$.ajax({
	type:'POST',
	url:'getcity.php',
	data:{cid:stateid},
success:function(responce){
	$("#city").html(responce);
}
}) ;
})
})
</script>
<body>
<select name="states" id="states">
<option value=''>--select state--</option>
<?php
   while($data=mysqli_fetch_assoc($query)){
?>
<option value="<?php echo $data['state_id']?>"><?php echo $data['state_name']?></option>
<?php
   }
?>
</select>

<br><br>
<select name="city" id="city">
<option value=''>--select city--</option>
</select>
</body>
</html>   
