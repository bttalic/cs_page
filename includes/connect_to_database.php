<?php
function connect(){
	@ $username="cs_page";
	@ $password="cspage2013";
	@ $host="localhost";
	@ $database="cs_page";

	@ $db=new mysqli($host,$username,$password,$database);

	if (mysqli_connect_errno()) {
		return false;
	}

	return $db;
}
?>