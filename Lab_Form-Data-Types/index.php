<?php

/*****************************************************************************
Title:  	Form Data and Control Statements
Use:     	To demonstrate forms and control statements via a small quiz.
Author:  	Alex Fleming
School:  	Southern Illinois University
Term:    	Fall 2019
Developed:  9/15/19
Tested:     9/15/19
******************************************************************************/



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>
    <form action="response.php" method="post">
        <div id"data">
            <label>First Name:</label>
            <input type="text" name"First_Name"></br>
            <label>Last Name:</label>
            <input type="text" name"Last_Name"></br>
            <label>Street Address:</label>
            <input type="text" name"Street_Address"></br>
            <label>City:</label>
            <input type="text" name"City"></br>
            <label>State:</label>
            <input type="text" name"State"></br>
            <label>Zip Code:</label>
            <input type="text" name"Zip_Code"></br>
            <label>Phone Number:</label>
            <input type="number" name"Phone_Number" maxlength="10"></br>
            <label>Birth Date:</label>
            <input type="date" name"Birth_Date"></br>
            <label>Create a User ID: (Limit: 8-12 Characters)</label>
            <input type="text" name"Create_UserID" minlength="8" maxlength="12"></br>
            <label>Select a Random Number from 1 to 10:</label>
            <input type="number" name"Random_Number" maxlength=2></br>
            <label>How much money is currently in your savings?</label>
            <input type="text" name"Savings_Balance"></br>
            <label>How much money do you save each month?</label>
            <input type="text" name"Monthly_Savings"></br>
            <label>What is your savings goal?</label>
            <input type="text" name"Savings_Goal"></br>
        </div>
        <div id="buttons">
            <label>%nbsp;</label>
            <input type"submit" value="Submit"></br>
        </div>
    </form>

</body>
</html>