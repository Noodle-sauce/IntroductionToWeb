<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("CustomersDao.class.php");

$customer_dao = new CustomersDao();

$CustomerName = $_REQUEST['CustomerName'];
$CustomerLastName = $_REQUEST['CustomerLastName'];

$results = $customer_dao->add($CustomerName,$CustomerLastName);
print_r($results);


?>