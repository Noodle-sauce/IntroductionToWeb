<<<<<<< HEAD
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("CustomersDao.class.php");

$customer_dao = new CustomersDao();

$results = $customer_dao->get_all();
print_r($results);


?>
=======
<?php
$servername = "localhost";
$username = "root";
$password = "webproject123";
$schema = "Webproject";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$schema",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conected successfully";
    catch(PDOException $e){
        echo"Connection failed: " . $e->getMessage();
    }
}
?>

>>>>>>> 9f32ce5560d0ecdb24ad7c4d4a66b58381044f00
