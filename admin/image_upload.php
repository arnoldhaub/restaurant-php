<?php


session_start();
$db ="gallery";
require('../db.php');


if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['name'])){


	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name);
    $title = $_POST['name'];
	$image_name = $title.".".$ext;
	$tmp = $_FILES['image']['tmp_name'];


	if(move_uploaded_file($tmp, '../upload/'.$image_name)){


		$sql = "INSERT INTO gallery (name, image) VALUES ('".$_POST['name']."', '".$image_name."')";
		$conn->query($sql);


		$_SESSION['success'] = 'Image Uploaded successfully.';
		header("Location: /admin/$db.php");
	}else{
		$_SESSION['error'] = 'image uploading failed';
		header("Location: /admin/index.php");
	}
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: /admin/$db.php");
}


?>