CREATE DATABASE IF NOT EXISTS
   programadorabordo;
USE programadorabordo;

CREATE TABLE IF NOT EXISTS products (
	id INT(11) AUTO_INCREMENT,
	name VARCHAR(255),
	price DECIMAL(10, 2),
	PRIMARY KEY (id)
);

INSERt INTO products VALUE 
	(0, 'Curso Front-end especialis', 2500),
	(0, 'Curso JS Fullstack Overflow', 900);
