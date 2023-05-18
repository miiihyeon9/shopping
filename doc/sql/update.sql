-- ! 정보 수정
UPDATE user_info  SET user_pw = rkskekfkakqktk, user_name = '홍길동'  WHERE user_id = 123


-- ! 회원 탈퇴
UPDATE user_info  SET del_flg = '1' WHERE user_id = '1423' ;
