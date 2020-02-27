<?php
namespace App\config;
use PDO;
use PDOException;
class Database{
    private $host ="localhost";
    private $username="root";
    private $password="";
    private $db_name="job_pirtal";
    private $connection;
    private static $instance=null;
    private function __construct(){
        try{
            $this->connection =new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username);
        }catch(PDOException $exception){
            echo "Connection Error!" .$exception->getMessage();
        }
    }
    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new Database();
        }
        return self::$instance;
    }
    public function getConnection(){
        return $this->connection;
    }
}
?>