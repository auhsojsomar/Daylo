<?php
	$db = mysqli_connect("localhost", "root", "", "lfn");
	$msg = "";

	if (isset($_POST['upload'])) {
		$target = "images/" .basename($_FILES["image"]["name"]);

		$image = $_FILES['image']['name'];
		$text = mysqli_real_escape_string($db, $_POST['text']);
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
		$phone= mysqli_real_escape_string($db, $_POST['phone']);
		$emailadd = mysqli_real_escape_string($db, $_POST['emailadd']);
		$datelost = mysqli_real_escape_string($db, $_POST['datelost']);



		$sql = "INSERT INTO items(image, text, fullname, phone, emailadd, datelost) VALUES ('$image', '$text','$fullname' ,'$phone','$emailadd' ,'$datelost' )";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image'] ['tmp_name'], $target)) {
			$msg = "Image uploaded";
		}else {
			$msg = "there was a problem uploading your image";
		}
	}

	$result = mysqli_query($db, "SELECT * FROM items");
?>