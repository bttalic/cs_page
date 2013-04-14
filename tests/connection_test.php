<?php
	
	include("../includes/connect_to_database.php");

	@ $db=connect();

	if(!$db){
		echo "Connection problem!";
		exit;
	}
	
	$query="select * from test_table";
	$result=$db->query($query);

	while($row=$result->fetch_assoc()){
		echo $row["id"]." | ".$row["num"];
		echo "</br>";
	}

?>