<?php
function connect(){


	@ $db=new mysqli($host,$username,$password,$database);

	if (mysqli_connect_errno()) {
		return false;
	}

	return $db;
}
?>
