<?php
header("Access-Control-Allow-Origin: *");

include_once 'api.php';

$oApi = new FortniteAPI();

$oApi->setKey('1dc5f3869c416470bd05fca4027fa798');

$userName = $_GET['username'];

$obj = $oApi->getPlayerData($userName, 'pc');

echo json_encode($obj);