<?php

$apiKey = '9602c09e80b942d0190d';

$firstCurrency = $_POST['select_1'];
$secondCurrency = $_POST['select_2'];
$quantity = $_POST['quantityInput'];

if (!is_numeric($quantity)) {
	print_r('Error');
	return;
}

$query = $firstCurrency . '_' . $secondCurrency;
$result = file_get_contents("https://free.currconv.com/api/v7/convert?q=$query&compact=ultra&apiKey=$apiKey");

$result = json_decode($result, true);
$result = $result[$query];
$result = $result * $quantity;

print_r($result);

// Добавление всех доступных валют в документ
/*$result = file_get_contents("https://free.currconv.com/api/v7/currencies?apiKey=$apiKey");
$result = json_decode($result, true);
$arr = $result['results'];
$newArr = array();

foreach ($arr as $key => $value) {
	array_push($newArr, $key);
}

sort($newArr);
$newArr = json_encode($newArr);
file_put_contents('currency.txt', $newArr);*/

