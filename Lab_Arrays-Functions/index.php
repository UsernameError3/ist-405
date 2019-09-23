<?php include 'functions.php';

/*****************************************************************************
Title:  	Arrays and Custom Functions
Use:     	To demonstrate arrays and functions.
Author:  	Alex Fleming
School:  	Southern Illinois University
Term:    	Fall 2019
Developed:  9/22/19
Tested:     9/22/19
******************************************************************************/


// Using fictitious data, create three records. ? Not created on functions.php
// 2D array

$employee_data=array(
    // Elements: first name, last name, monthly salary, and pay raise (%).
    array("John","Doe",39200,0.025),
    array("Ron","Pell",55700,0.020),
    array("Emily","Fay",19400,0.030)
) {}


// Pass in the array:employee_data
// Create a loop to process the 3 records in the array
// Loop should not be hardcoded to only process three records
// Will parse length of array and loop on length
// Processing determines the pay raise and new salary amount
// Return a 2 dimensial array
// Elements:  first name, last name, original monthly salary, pay raise, new monthly salary
// Parse the array outside the function and display the five values.

$final_data = process_employee($employee_data);
echo $final_data;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>

<body>
    <form action="process_item(Item_Name, Item_Cost)" method="post">
        <div id"data">
            <label>First Name:</label><br>
            <input type="text" name="Item_Name"><br>
            <label>Last Name:</label><br>
            <input type="text" name="Item_Cost"><br>
        </div>
        <div id="buttons">
			<label> </label><br>
            <input type="submit" name="submit" value="Submit"><br>
        </div>
    </form>

</body>
</html>