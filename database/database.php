<?php

//namespace task\core;

//use task\models\Product;
//use PDO;

class Database{

    //private PDO $connect;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "store";

    protected function connect(){
        try{
            $connect = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);

            //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;

            $sql = "CREATE TABLE products(
                sku VARCHAR(255) NOT NULL PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                price DOUBLE NOT NULL,
                product_type VARCHAR NOT NULL,
                attributes VARCHAR NOT NULL
            ),

            INSERT INTO products(sku, name, price, product_type, attributes) VALUES 
            (JVG200123, Acme DISC, 1.00, DVD, 700),
            (GGWP0007, War and Peace, 20.00, 2),
            (TR120555, Chair, 40.00, 24x45x15)";

            if(!sql){
                die();
            }

        }catch(PDOException $exception){
            $exception->getMessage();
            die();
        }
    }

}

    /*public function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if(!$result){
            return false;
        }else{
            $data = false;
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }

            return $data;
        }

    }

    public function save($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if(!$result){
            return false;
        }else{
            return true;
        }
        

    }*/