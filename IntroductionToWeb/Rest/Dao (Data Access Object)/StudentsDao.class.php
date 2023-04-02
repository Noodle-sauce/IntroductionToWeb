<?php


class CustomersDao{

    private $conn;

    /**
     * Class constructor used to establish connection to db
     */


    public function __construct(){

        $servername = "localhost";
        $username = "root";
        $password = "webproject123";
        $schema = "webproject2";
        
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        
       
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        } 
    }
    

    public function get_all(){

        $stmt = $this->conn->prepare('SELECT * FROM customers');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        

    } 

    public function add($CustomerName, $CustomerLastName){
        $stmt = $this->conn->prepare("INSERT INTO customers(CustomerName, CustomerLastName) VALUES (?, ?)");
        $result = $stmt->execute([$CustomerName, $CustomerLastName]);
    }
    
    public function update($ID, $CustomerName, $CustomerLastName){
        $stmt = $this->conn->prepare("UPDATE customers SET CustomerName = :CustomerName, CustomerLastName = :CustomerLastName WHERE id = :ID");
        $stmt->execute([':CustomerName' => $CustomerName, ':CustomerLastName' => $CustomerLastName, ':ID' => $ID]);
    }
    
    public function delete($ID){
        $stmt = $this->conn->prepare("DELETE FROM customers WHERE id = :ID");
        $stmt->bindParam(':ID', $ID);
        $stmt->execute();
    }
    

}
    

    

    




?>