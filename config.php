<?php 

$conn = mysqli_connect("localhost","i4216652_wp1","T*D86(BaxtKY54aIKb.16*~2");

try {
	if(!$conn)
	{
		echo "Connection failed !";
	}
	else
	{
		mysqli_select_db($conn,'i4216652_wp1');
	}
} catch (Exception $e) {
	echo $e;
}

?>