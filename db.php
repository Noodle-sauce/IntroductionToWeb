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

