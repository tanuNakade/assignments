<?php


if(isset($_POST['upload'])){

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$filetype = $_FILES['uploadfile']['type'];

move_uploaded_file($filetmpname,'img/'.$filename);
}
?>

<html>
  <head>
     <title>upload file</title>
  </head>
     <body>
         <form method="post" enctype="multipart/form-data">
            <input type="file" name="uploadfile" id="uploadfile">
            <input type="submit" name="upload" value="upload file">
		</form>
</body>
</html>		
            						