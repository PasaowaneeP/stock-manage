<?php
	header('Content-type: application/json');
	include('connect.php');

	$array = array();

	$sql = "SELECT * FROM stock
			WHERE site_code = '{$_POST['siteSearch']}'
			AND item_code = '{$_POST['itemCode']}'
			";
	$query = mysqli_query($conn,$sql);

	while ($result = mysqli_fetch_assoc($query)) {
		array_push($array, $result);
	}

	echo json_encode($array);
?>