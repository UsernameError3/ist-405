/*****************************************************************************
Title:  	Arrays and Custom Functions
Use:     	To demonstrate using databases with PHP & SQL.
Author:  	Alex Fleming
School:  	Southern Illinois University
Term:    	Fall 2019
Developed:  10/13/19
Tested:     10/13/19
******************************************************************************/

/* 
---------------------------
Create Database Scripts 
---------------------------
*/

/* Create Dataase Itself */
CREATE DATABASE vehicles;

/* Create Table */
CREATE TABLE cars
(
    car_id int NOT NULL AUTO_INCREMENT,
    car_make varchar(15),
    car_model varchar(20),
    car_color varchar(10),
    car_year varchar(4),
    car_price decimal(7,2),
    PRIMARY KEY (car_id)
);

/* Insert data into Table */
INSERT INTO cars (car_make, car_model, car_color, car_year, car_price)
VALUES 
    ('Honda', 'Accord', 'Silver', '1997', 750),
    ('Dodge', 'Challenger', 'Red', '2019', 65000),
    ('Chevrolet', 'Corvette', 'White', '2019', 70000),
    ('Cadillac', 'CTS-V', 'Gray', '2019', 90000),
    ('Ford', 'GT', 'White', '2019', 500000);



/* 
------------------------------
PHP Manipulation Scripts
------------------------------
*/

/* Display Records */
SELECT * FROM cars
ORDER BY car_id;


/* Delete Record */
DELETE FROM cars
WHERE car_id = :deleted_record;


/* Insert Record */
INSERT INTO cars 
    (car_make, car_model, car_color, car_year, car_price)
VALUES 
    (:car_make, :car_model, :car_color, :car_year, :car_price);


/* Update Record */
UPDATE cars 
SET
car_make = :car_make,
car_model = :car_model,
car_color = :car_color,
car_year = :car_year,
car_price = :car_price
WHERE
car_id = :car_id;







