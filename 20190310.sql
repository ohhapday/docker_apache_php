create database homeDB;

CREATE USER 'homeUser'@'localhost' IDENTIFIED BY 'www1234';
CREATE USER 'homeUser'@'172.20.0.1' IDENTIFIED BY 'www1234';    // docker 내부 지정 아이피인듯

GRANT ALL PRIVILEGES on homeDB.* TO 'homeUser'@'localhost';
GRANT ALL PRIVILEGES on homeDB.* TO 'homeUser'@'172.20.0.1';


FLUSH PRIVILEGES;



## homeDB table ##
create table tb_users (
                      id int auto_increment,
                      email varchar(256) not null,
                      password varchar(256) not null,
                      username varchar(256) not null,
                      cell_phone varchar(32) not null,
                      rcmd_code varchar(256) null,
                      terms1 tinyint(1) default 1 not null,
                      terms2 tinyint(1) default 1 not null,
                      terms3 tinyint(1) default 0 not null,
                      constraint tb_users_pk
                        primary key (id)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci;

INSERT INTO tb_users (email, password, username, cell_phone, rcmd_code)
VALUES ('test1@test.com', '1234', '김1', '010-0001-0001', 'abcd123');

INSERT INTO tb_users (email, password, username, cell_phone, rcmd_code)
VALUES ('test2@test.com', '1234', '이1', '010-0001-0002', 'abcd123');

INSERT INTO tb_users (email, password, username, cell_phone, rcmd_code)
VALUES ('test3@test.com', '1234', '박1', '010-0001-0003', 'abcd123');

INSERT INTO tb_users (email, password, username, cell_phone, rcmd_code)
VALUES ('test4@test.com', '1234', '홍1', '010-0001-0004', 'abcd123');

INSERT INTO tb_users (email, password, username, cell_phone, rcmd_code)
VALUES ('test5@test.com', '1234', '최1', '010-0001-0005', 'abcd123');