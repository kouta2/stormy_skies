<?php
	include_once("db.php");
	$name = $_POST['Name'];
	$height = $_POST['Height'];
	$last_eruption = $_POST['Last_Eruption'];
	$location = $_POST['Location'];

	$sql = "INSERT INTO volcanoes VALUES ('$name', '$height', '$last_eruption','$location')";

	if(mysqli_query($link, $sql))  // mysql_query("INSERT INTO fires VALUES ('$data', $size, '$name', '$area')"))
                echo "success!";
        else
                echo "FAILED!!!";
        mysqli_close($link);
?>
