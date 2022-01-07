<?php


require_once("vendor/autoload.php");
include("src/Bank.php");
//require_once("vendor/autoload.php");


$operation = $argv[1];
$t = new \Bank\Bank();
//$operation = $argv[1];
unset($argv[0]);
unset($argv[1]);

$a = print_r($t->$operation(...$argv));
$json = file_get_contents('Transaction.json');
$json_data = json_decode($json);

$json_newdata = json_encode($json_data);
file_put_contents('Transaction.json', $json_newdata);


