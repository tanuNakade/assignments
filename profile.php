<?php
session_start();
//echo '<pre>';
//print_r($_SESSION['userDetails']);

echo 'Hi '.$_SESSION['userDetails']['Name'];
?>

<a href="logout.php">Logout</a>