<?php
include('connection.php');
$sql = "select * from users" ;
$query = mysqli_query($conn,$sql);
?>
<html>
	<head>
		<title>
			report module
		</title>
	</head>
<body>
      <table width="100%" border="1">
	     <tr>
		      <th>Name</th>
			  <th>Email</th>
			  <th>Address</th>
			  <th>Date</th>
			  <th>Action</th>
		</tr>
    <?php while( $data = mysqli_fetch_array($query)){
         //echo '<pre>';
         //print_r($data);
    ?>
           <td><?php echo $data['Name'] ?></td>	
		   <td><?php echo $data['Email'] ?></td>	
		   <td><?php echo $data['Address'] ?></td>	
		   <td><?php echo $data['Date'] ?></td>	
		   <td><a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a> / <a href="delete.php?id=<?php echo $data['id'] ?>">Delete</a></td>
		   </tr>
	<?php } ?>
	  </table>
	  </body>
	  </html>