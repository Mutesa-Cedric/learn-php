<?php

session_start();

$_SESSION["item_name"]="cedric";

$item=$_SESSION['item_name'];

echo "the item is: " . $item;

$target_dir="uploads/";
$file_path_dir=$target_dir . basename($_FILES["fileToUpload"]["name"]);
if(isset($_POST["submit"])){
	if($_FILES["fileToUpload"]["size"]>500000){
		echo "file size too big!";
	}else{
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$file_path_dir)){

			echo "your file ". basename($_FILES["fileToUpload"]["name"]) . "was uploaded!";
		}else{
			echo "sorry, there was an error uploading your file";
		}
	}	
}

?>