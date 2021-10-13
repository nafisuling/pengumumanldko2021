<?php
session_start();
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Invited</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<center>
	<br><br><br>
	<h1>
	<div style="color: white;">
	<div style="font-family: Consolas;">
	<?php 

	//$Color = "white";
    $Text = $username;

    echo $Text;

	?>
	</div>
	</div>
	</h1>
	</center>
</body>
<style>
body {
  background-image: url('invited.png');
  background-color: black;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}
</style>
</html>