<?php
	$db = mysqli_connect("localhost", "root", "", "lfn");
	$msg = "";

	if (isset($_POST['uploadfound'])) {
		$target = "imgfound/" .basename($_FILES["image"]["name"]);

		$image = $_FILES['image']['name'];
		$text = mysqli_real_escape_string($db, $_POST['text']);
		$contact = mysqli_real_escape_string($db, $_POST['contact']);
		$itemname = mysqli_real_escape_string($db, $_POST['itemname']);
		$location = mysqli_real_escape_string($db, $_POST['location']);

		$sql = "INSERT INTO itemsfound(image, text, contact, itemname, location) VALUES ('$image', '$text', '$contact', '$itemname', '$location')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image'] ['tmp_name'], $target)) {
			$msg = "Image uploaded";
		}else {
			$msg = "there was a problem uploading your image";
		}
	}

	$result = mysqli_query($db, "SELECT * FROM itemsfound");
?>