CREATE DATABASE students ;
DROP DATABASE students ;
USE students ;


CREATE TABLE donnes (
    id INT PRIMARY KEY AUTO_INCREMENT ,
    name VARCHAR(30),
    photo VARCHAR(250),
    Prenom VARCHAR(30),
    date DATE,
    grade FLOAT
);

INSERT INTO donnes(name,photo ,Prenom,date,grade) VALUES 
("zakaria","https://intranet.youcode.ma/storage/users/profile/1341-1727971631.JPG" ,"KArdache","2002-02-04","16.03"),
("YAhya","https://intranet.youcode.ma/storage/users/profile/1341-1727971631.JPG" ,"Afadis","1999-02-03","17.03");


SHOW TABLES ;
SELECT * FROM donnes ;