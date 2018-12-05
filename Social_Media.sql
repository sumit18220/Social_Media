create database Social_Media;

create table Users
(
    Id INT(11) NOT NULL AUTO_INCREMENT,
    Username VARCHAR(30) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    PRIMARY KEY(Id)
);
