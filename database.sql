CREATE DATABASE shopping;

USE shopping;


CREATE TABLE login_info(
	log_no int PRIMARY KEY auto_increment
	,user_id VARCHAR(20)	NOT null
	,user_pw VARCHAR(512) NOT NULL
	);


INSERT INTO login_info(
user_id
,user_pw)
VALUES(
'php506'
,'506');


ALTER table user_info ADD del_flg varCHAR(1) NOT NULL DEFAULT '0';

ALTER table user_info ADD user_email VARCHAR(100) NOT NULL;