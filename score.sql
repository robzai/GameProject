CREATE DATABASE IF NOT EXISTS score;

USE score;

CREATE TABLE IF NOT EXISTS rank(
	userName VARCHAR(100) PRIMARY KEY NOT NULL,
	pwd VARCHAR(40) NOT NULL,
	numberoftools INT DEFAULT 0,
	score INT DEFAULT 0,
	1sttool INT DEFAULT 0,
	2ndtool INT DEFAULT 0,
	3rdtool INT DEFAULT 0
);

INSERT INTO rank VALUES (
	'a','111',0,0,0,0,0
);

INSERT INTO rank VALUES (
	'b','222',0,0,0,0,0
);

INSERT INTO rank VALUES (
	'c','333',0,0,0,0,0
);