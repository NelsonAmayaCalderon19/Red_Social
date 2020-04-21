<!DOCTYPE html>
<html>
<head>
	<title>Red Social</title>
</head>
<body>
<?php 
session_start();
session_destroy();
header("location:../index.php");
 ?>
</body>
</html>