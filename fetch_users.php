<?php
function get_total_all_records()
{
	include('config.php');
	$statement = $connection->prepare("SELECT * FROM users");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}
include('config.php');
$output = array();
$query = "SELECT * FROM users where deleted = 0";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();

	$sub_array = array();
	$sub_array[] = $row["fname"];
	$sub_array[] = $row["lname"];
	$sub_array[] = $row["email"];
	$sub_array[] = $row["username"];
	$sub_array[] = $row["pwd"];
	$sub_array[] = '<button style="width: 80%;" type="button" name="update" id="'.$row["id"].'" class="btn btn-warning update"><i class="fa fa-edit"></i> Update</button><button style="width: 80%;margin-top: 5px;" type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger delete"><i class="fa fa-trash"></i> Delete&nbsp&nbsp</button>';
	$data[] = $sub_array;
}
$output = array(
	// "draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>