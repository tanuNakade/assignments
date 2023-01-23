<?php
$conn = mysqli_connect('localhost','root','','step_class');
$sql = "select * from country";
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
$("#country").change(function(){
var countryid = $("#country").val();

$.ajax({
	type:'POST',
	url:'getstate.php',
	data:{cid:countryid},
success:function(responce){
	$("#state").html(responce);
}
}) ;
})
})
</script>
<body>
<select name="country" id="country">
<option value=''>--select country--</option>
<?php
   while($data=mysqli_fetch_assoc($query)){
?>
<option value="<?php echo $data['country_id']?>"><?php echo $data['country_name']?></option>
<?php
   }
?>
</select>

<br><br>
<select name="state" id="state">
<option value=''>--select state--</option>
</select>
</body>
</html>   
