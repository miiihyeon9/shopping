<?php

namespace application\model;

class UserModel extends Model{
    // 로그인할 때 필요한 유저의 정보 가져옴
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
// 유저 아이디 가져오기 
    public function takeUserInfo($userId){
        $sql = "SELECT "
                ." user_id "
                ." FROM "
                ." user_info "
                ." WHERE "
                ." user_id = :user_id ";

        $prepare = [
            ":user_id" =>$userId
        ];

        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->rowCount();
        }catch(Exception $e){
            echo "UserModel->takeUserInfo Error".$e->getMessage();
            exit();
        }

        return $result;
    }
    
    public function registUser($arrSignUpUser){
        $sql = "INSERT INTO"
                ." user_info"
                ." ( "
                ." user_id "
                .", user_pw "
                ." ) "
                ." VALUES "
                ." ( "
                ." :user_id "
                ." ,:user_pw "
                ." ) ";

        $prepare = [ ":user_id" => $arrSignUpUser["id"]
                    ,":user_pw"  => $arrSignUpUser["pw"]
        ];

        try 
        {
            // $this->conn->beginTransaction(); // Transaction시작  commit이나 rollback만나면 종료
            $stmt = $this->conn->prepare( $sql );
            $stmt->execute( $prepare );
            $result_cnt = $stmt->rowCount();
            // $this->conn->commit();
            if($result_cnt===1){
                return true;
            }  //행의 개수 리턴 
        }
        catch (Exception $e) 
        {
            // $this->conn->rollback();
            echo "UserModel->registUser Error".$e->getMessage();
            exit();
        }
        return false;
    }



}