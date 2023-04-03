<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("StudentsDao.class.php");

$customer_dao = new CustomersDao();


$type = $_REQUEST['type'];

switch($type){

    case 'add':
        
        $CustomerName = $_REQUEST['CustomerName'];
        $CustomerLastName = $_REQUEST['CustomerLastName'];

        $results = $customer_dao->add($CustomerName,$CustomerLastName);
        print_r($results);

        break;

    case 'delete':

        $ID = $_REQUEST['ID'];

        $customer_dao->delete($ID);
        

        break;

    case 'update':

        $CustomerName = $_REQUEST['CustomerName'];
        $CustomerLastName = $_REQUEST['CustomerLastName'];
        $ID = $_REQUEST['ID'];

        $customer_dao->update($ID,$CustomerName,$CustomerLastName);
       


        break;

    case 'get':

        

    default:
        $results = $customer_dao->get_all();
        print_r($results);
        break;

        break;


}



?>