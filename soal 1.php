<?php 
	$json = array(
		'itemId' => '12341882', 
		'itemName' => 'basic t-shirt', 
		'price' => 70000,
		'availableColorAndSize' => array(['color' => 'red', 'size' => 'S,M,L'],['color' => 'black', 'size' => 'M,L']),
		'freeShiping' => 'false');
	echo json_encode($json); 
?>