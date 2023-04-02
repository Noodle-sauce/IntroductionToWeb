<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("CustomersDao.class.php");

$customer_dao = new CustomersDao();

$results = $customer_dao->get_all();
print_r($results);


?>