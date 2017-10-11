<?php
	$db = mysqli_connect("localhost", "root", "", "lfn");
	$msg = "";

	if (isset($_POST['upload'])) {
		$target = "images/" .basename($_FILES["image"]["name"]);

		$image = $_FILES['image']['name'];
		$text = mysqli_real_escape_string($db, $_POST['text']);

		$sql = "INSERT INTO items(image, text) VALUES ('$image', '$text')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image'] ['tmp_name'], $target)) {
			$msg = "Image uploaded";
		}else {
			$msg = "there was a problem uploading your image";
		}
	}

	$result = mysqli_query($db, "SELECT * FROM items");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<link rel="stylesheet" type="text/css" href="reportstyle.css">
	</head>
	<body>
  <div id="content">
 <?php
	
	$db = mysqli_connect("localhost", "root", "", "lfn");
	$sql = "SELECT * FROM items";
	$result = mysqli_query($db, $sql);

	while ($row = mysqli_fetch_array($result)) {
		echo "<div id='img_div'>";
			echo "<img src='images/".$row['image']."' >";
			echo "<p>".$row['text']."</p>";
		echo "</div>";
	} 

?>
	<form method="POST" action="upload.php" enctype="multipart/form-data">
	<input type="hidden" name="size" value="1000000">
	<div>
		<input type="file" name="image">
	</div>
	<div>
		<textarea name="text" cols="40" placeholder="saysomething"></textarea>
		</div>
		<div>

			<button type="submit" name="upload" value="upload image">Upload</button>
		</div>
		</div>
	</form>
</div>
</body>
</html>