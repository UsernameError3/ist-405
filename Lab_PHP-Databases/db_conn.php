<?php

/*****************************************************************************
Title:  	Arrays and Custom Functions
Use:     	To demonstrate using databases with PHP & SQL.
Author:  	Alex Fleming
School:  	Southern Illinois University
Term:    	Fall 2019
Developed:  10/13/19
Tested:     10/13/19
******************************************************************************/

$dsn = 'mysql:host=localhost;db_name=vehicles';
$username = 'root';
$password = 'abc123';

try {
    $db = new PDO ($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('db_error.php');
    exit();
}
?>