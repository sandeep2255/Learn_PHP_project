CREATE DATABASE test;

USE test;

CREATE TABLE feedback(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(50),
	email VARCHAR(50),
	body VARCHAR(100)
);

DESCRIBE feedback;

ALTER TABLE feedback
CHANGE body content VARCHAR(100);

INSERT INTO feedback(name,email,content)
VALUES('sandeep', 'sandeeppradeep2255@gmail.com','good class');

INSERT INTO feedback(name,email,content)
VALUES('rama', 'rama@gmail.com','nice class');

INSERT INTO feedback(name,email,content)
VALUES('krishna', 'krishna@gmail.com','superb');

SELECT * FROM feedback;

TRUNCATE TABLE feedback;

DELETE FROM feedback WHERE email = 'sandeeppradeep@gmail.com';

CREATE TABLE user(
user_id VARCHAR(50),
password VARCHAR(50)
);

DESCRIBE user;

ALTER TABLE user
ADD CONSTRAINT pk PRIMARY KEY(user_id);

INSERT INTO user VALUES('sandeep@gmail.com', '123456789');

SELECT * FROM user;

TRUNCATE TABLE user;


