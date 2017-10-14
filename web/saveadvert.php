<?php

define('DB_NAME', 'RG344090_mela');
define('DB_USER', 'mela');
define('DB_PASSWORD', 'Danial1981');
define('DB_HOST', 'mysql2.mylogin.ie');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
	die('Could not connect');
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected){
	die('Can\'t use ';
}

$value2 = $_POST['prop type'];
$value3 = $_POST['sale rent'];
$value4 = $_POST['price'];
$value5 = $_POST['council'];
$value6 = $_POST['bedrooms'];
$value7 = $_POST['bathrooms'];
$value8 = $_POST['description'];
$value9 = $_POST['area'];
$value10 = $_POST['long'];
$value11 = $_POST['lat'];

$sql = "INSERT INTO advert (prop type, sale rent, price, council, bedrooms, bathrooms, description, area, long, lat) VALUES ('$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10', '$value11')";

if (!mysql_query($sql)){
	die('Error: ');
}

mysql_close();
?>