<?php

namespace application\model;

class UserModel extends Model{
    public function getUser($arrUserInfo){
        $sql = "SELECT * FROM user_info WHERE user_id=:user_id and user_pw =:user_pw";
        $prepare = [
            ":user_id" =>$arrUserInfo["id"]
            ,":user_pw" =>$arrUserInfo["pw"]
        ];
        
        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        }catch(Exception $e){
            echo "UserModel->getUser Error".$e->getMessage();
            exit();
        }
        finally{
            $this->closeConn();
        }
        return $result;
    }
}



?>