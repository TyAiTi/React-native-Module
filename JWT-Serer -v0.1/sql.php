<?php

  CREATE DATABASE `jwt` CHARACTER SET utf8 COLLATE utf8_general_ci;

  CREATE USER 'ty1'@'*' IDENTIFIED BY 'ty171197';
  GRANT ALL PRIVILEGES ON jwt . * TO 'ty1'@'*';
  GRANT ALL PRIVILEGES ON jwt.* TO 'ty'@'%' IDENTIFIED BY 'ty171197' WITH GRANT OPTION;
  FLUSH PRIVILEGES;

  CREATE TABLE users(
    user_name varchar(49) PRIMARY KEY NOT NULL,
    password varchar(49) NOT NULL,
    name varchar(97) ,
    role BOOLEAN ,
    phone  varchar(11),
    email varchar(49)
  ) ENGINE=INNODB;


?>
