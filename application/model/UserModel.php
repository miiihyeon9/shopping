<?php

namespace application\model;

class UserModel extends Model{
    // 로그인할 때 필요한 유저의 정보 가져옴
                                        // $pwFlg = true  => 두번째 파라미터가 있으면 true 없으면 false 
    public function getUser($arrUserInfo, $pwFlg = true){
        $sql = "SELECT * FROM user_info WHERE del_flg = '0' AND user_id=:user_id ";

        if($pwFlg){
            $sql .=" and user_pw =:user_pw ";
        }        
        $prepare = [
            ":user_id" =>$arrUserInfo["user_id"]

        ];

        if($pwFlg){
            $prepare[":user_pw"]  = $arrUserInfo["user_pw"];
        }
        
        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        }catch(Exception $e){
            echo "UserModel->getUser Error".$e->getMessage();
            exit();
        }
        return $result;
    }

// 유저 아이디 가져오기 
    // public function takeUserInfo($userId){
    //     $sql = "SELECT "
    //             ." user_id "
    //             ." FROM "
    //             ." user_info "
    //             ." WHERE "
    //             ." user_id = :user_id ";

    //     $prepare = [
    //         ":user_id" =>$userId
    //     ];

    //     try{
    //         $stmt = $this->conn->prepare($sql);
    //         $stmt->execute($prepare);
    //         $result = $stmt->rowCount();        // transaction 실행 됨 그래서 밑에서 transaction을 실행할 때 에러가 뜨는거임 
    //     }catch(Exception $e){
    //         echo "UserModel->takeUserInfo Error".$e->getMessage();
    //         exit();
    //     }

    //     return $result;
    // }
    
    public function registUser($arrSignUpUser){
        $sql = "INSERT INTO"
                ." user_info"
                ." ( "
                ." user_id "
                .", user_pw "
                .", user_name "
                ." ) "
                ." VALUES "
                ." ( "
                ." :user_id "
                ." ,:user_pw "
                ." ,:user_name "
                ." ) ";

        $prepare = [ ":user_id" => $arrSignUpUser["user_id"]
        //  base64_encode(제일 간단한 암호화)
                    ,":user_pw"  => $arrSignUpUser["user_pw"]
                    ,":user_name"  => $arrSignUpUser["user_name"]
        ];

        try 
        {
            // $this->conn->beginTransaction(); // Transaction시작  commit이나 rollback만나면 종료
            $stmt = $this->conn->prepare( $sql );
            $result = $stmt->execute( $prepare );
            return $result;
            // $result_cnt = $stmt->rowCount();
            // // $this->conn->commit();
            // if($result_cnt===1){
            //     return true;
            // }  //행의 개수 리턴 
        }
        catch (Exception $e) 
        {
            // $this->conn->rollback();
            // echo "UserModel->registUser Error".$e->getMessage();
            // exit();
            return false;
        }
        // return false;
    }

    
    public function updateUser($arrModify,$updateFlg = true){
        $sql = " UPDATE "
        ." user_info "
        ." SET ";
        // 수정할 때 필요한 거
        // 업데이트 할 때
        if($updateFlg){
            $sql .= " user_pw = :user_pw, user_name = :user_name  WHERE user_id = :user_id ";
        // 삭제할 때 
        }else{
            $sql .= " del_flg = '1' WHERE user_id = :user_id ";
        }

        $prepare = [ 
            ":user_id"  => $arrModify["user_id"]
        ];
        
        // 업데이트 할 때
        if($updateFlg){
            $prepare[":user_pw"] = $arrModify["user_pw"];
            $prepare[":user_name"] = $arrModify["user_name"];
        }
        // 삭제할 때 


        try 
        {
            // $this->conn->beginTransaction(); // Transaction시작  commit이나 rollback만나면 종료
            $stmt = $this->conn->prepare( $sql );
            $result = $stmt->execute( $prepare );
            return $result;
            // $result_cnt = $stmt->rowCount();
            // // $this->conn->commit();
            // if($result_cnt===1){
            //     return true;
            // }  //행의 개수 리턴 
        }
        catch (Exception $e) 
        {
            // $this->conn->rollback();
            // echo "UserModel->registUser Error".$e->getMessage();
            // exit();
            return false;
        }
    }
}

