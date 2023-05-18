<?php

namespace application\model;

class UserModel extends Model{
    // 로그인할 때 필요한 유저의 정보 가져옴
                                        // $pwFlg = true  => 두번째 파라미터가 있으면 true 없으면 false
    public function getUser($arrUserInfo, $pwFlg = true){
        $sql = "SELECT * FROM user_info WHERE  user_id=:user_id ";
        // 비밀번호 확인 flg
        if($pwFlg){
            $sql .=" AND user_pw = BINARY :user_pw ";
        }
        //  삭제 플래그 

        $prepare = [
            ":user_id" =>$arrUserInfo["user_id"]
        ];
        
        // 비밀번호 확인 flg
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
                    //  base64_encode(제일 간단한 암호화 -> 쉽게 뚫려서 잘 사용하지 않음 )
                    ,":user_pw"  => $arrSignUpUser["user_pw"]
                    ,":user_name"  => $arrSignUpUser["user_name"]
        ];

        // try catch
        try 
        {
            $stmt = $this->conn->prepare( $sql );
            $result = $stmt->execute( $prepare );
            return $result;
        }
        catch (Exception $e) 
        {
            return false;
        }

    }

    
    public function updateUser($arrModify,$updateFlg = true){
        $sql = " UPDATE "
        ." user_info "
        ." SET ";

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
        // try catch
        try 
        {
            $stmt = $this->conn->prepare( $sql );
            $result = $stmt->execute( $prepare );
            return $result;
        }
        catch (Exception $e) 
        {
            return false;
        }
    }
}

