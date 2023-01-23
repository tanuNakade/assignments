<?php

session_start();

session_destroy();

unset($_SESSION['userDetails']);

header("location:login.php");
?>