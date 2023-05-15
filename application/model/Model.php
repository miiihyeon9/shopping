<?php

namespace application\model;
use PDO;        // PDO클래스 사용
use Exception;  // Exception 클래스 사용


class Model{
    protected $conn;
    // 데이터베이스 연결 
    public function __construct(){
        $dns ="mysql:host="._DB_HOST.";dbname="._DB_NAME.";charset="._DB_CHARSET;
        $option = [
            PDO::ATTR_EMULATE_PREPARES      => false     
            , PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION
            , PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC  
        ];  

        try{
            $this->conn = new PDO($dns, _DB_USER, _DB_PASSWORD, $option);
        }catch(Exception $e){
            echo "DB Connect Error : ".$e->getMessage();
            exit();
        }
    }
    
    public function closeConn(){
        $this->conn = null;
    }

    public function tranCommit(){
        $this->conn->commit();
    }

    public function tranRollback(){
        $this->conn->rollback();
    }

    public function tranBegin(){
        $this->conn->beginTransaction();
    }
}


?>