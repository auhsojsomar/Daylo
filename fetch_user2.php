<?php
include('config.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM users 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["fname"] = $row["fname"];
		$output["lname"] = $row["lname"];
		$output["email"] = $row["email"];
		$output["username"] = $row["username"];
		$output["pwd"] = $row["pwd"];
		$output["email"] = $row["email"];
	}
	echo json_encode($output);
}
?>