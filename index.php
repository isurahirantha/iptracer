<?php
include 'function/function.php';
?>

<!doctype html>
<html>
<head>
  	<link rel="stylesheet" href="css/main.css">
	<title>PhpIpTracer</title>
</head>
<body>

<div>
	<h1>Find Ip</h1>
<form action="index.php" method="POST">
<input type="submit" name="getip">
</form>	

<?php
if(isset($_POST)){
if(isset($_POST['getip'])){
 $ip = get_ip(); 
 echo "<h1>your ip address is  $ip</h1>";
}else{
	$ip=null;
}	
}
?>
	</br>
	<?php
	echo "<table>";
		if(!empty($ip))
		{
		echo get_location($ip);
		}
	echo "</table>";
	?>

</div>
<!--comment-->
</body>
</html>
