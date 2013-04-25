<?php
header('Content-type: application/json');

$response=array("error"=>"", "success"=>"");

if(!empty($_FILES['studentsignupprofilePicture'])){
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$filename=$_FILES["studentsignupprofilePicture"]["name"];
	$extension = strtolower(substr($filename, strpos($filename,'.')+1));
	if ( (($_FILES["studentsignupprofilePicture"]["type"] == "image/gif")
		|| ($_FILES["studentsignupprofilePicture"]["type"] == "image/jpeg")
		|| ($_FILES["studentsignupprofilePicture"]["type"] == "image/jpg")
		|| ($_FILES["studentsignupprofilePicture"]["type"] == "image/pjpeg")
		|| ($_FILES["studentsignupprofilePicture"]["type"] == "image/x-png")
		|| ($_FILES["studentsignupprofilePicture"]["type"] == "image/png")) 
		&& in_array($extension, $allowedExts))
	{
		if ($_FILES["studentsignupprofilePicture"]["error"] > 0)
		{
			$response["error"]=$response["error"]." ".$_FILES["studentsignupprofilePicture"]["error"];
		}
		else
		{

			if (file_exists("./pics/" . $_FILES["studentsignupprofilePicture"]["name"]))
			{
				$response["error"]=$response["error"]." ".$_FILES["studentsignupprofilePicture"]["name"] . " already exists. ";
				
			}
			else
			{
				move_uploaded_file($_FILES["studentsignupprofilePicture"]["tmp_name"],
					"./pics/" . $_FILES["studentsignupprofilePicture"]["name"]);
				$response["success"]=$response["success"]." ". "Picture uploaded";
			}
		}
	}
	else
	{
		$response["error"]=$response["error"]." "."Invalid file type";
	}
}

echo json_encode($response);

?>
