ALTER TABLE user_info ADD user_name varchar(100) not null;
ALTER TABLE user_info ADD del_flg   char(1) NOT NULL DEFAULT '0';
ALTER TABLE user_info ADD user_email VARCHAR(100) NOT NULL; 

