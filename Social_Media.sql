create database Social_Media;

create table Users
(
    Id INT(11) NOT NULL AUTO_INCREMENT,
    Username VARCHAR(30) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    PRIMARY KEY(Id)
);

some changes made by Bhuvan 


(1)To change table name :-
	ALTER TABLE Users RENAME users;

(2)To change COLUMN name :-
	ALTER TABLE users MODIFY COLUMN Name varchar(255);

(3)To add extra column to users table :-
	ALTER TABLE users ADD College varchar(255);

	ALTER TABLE users ADD Phone_Number int ;

(4)Create another table :-
	CREATE TABLE status(
		StatusId int NOT NULL AUTO_INCREMENT,
		Id int ,
		Date datetime ,
		Status varchar(255),
		PRIMARY KEY(StatusId),
		FOREIGN KEY (Id) REFERENCES users(Id)
		);
