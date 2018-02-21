<?php
		header('Content-type: application/json');
	include('connect.php');

	$sql = "INSERT INTO stock (stock_date, item_code, site_code, bfqty, receive, sell, adjust, qty) 
			SELECT '2018/02/21', item_code, site_code, qty, 0, 0, abs(qty), 0
			FROM stock
			WHERE site_code = '{$_POST['site']}'
			AND qty < 0";
	$query = mysqli_query($conn,$sql);

	if($query) {
		echo json_encode(array('status' => '1','message'=> 'Record add successfully'));
	}
	else
	{
		echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
	}
?>