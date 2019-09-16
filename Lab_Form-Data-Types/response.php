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
/*
$First_Name
$Last_Name
$Street_Address
$City
$State
$Zip_Code
$Phone_Number
$Birth_Date
$Create_UserID
$Random_Number
$Savings_Balance
$Monthly_Savings
$Savings_Goal
*/


// Get the Data from the Form:
$First_Name = filter_input(INPUT_POST, 'First_Name');
$Last_Name = filter_input(INPUT_POST, 'Last_Name');
$Full_Name = $First_Name . ' ' . $Last_Name;

$Street_Address = filter_input(INPUT_POST, 'Street_Address');
$City = filter_input(INPUT_POST, 'City');
$State = filter_input(INPUT_POST, 'State');
$Zip_Code = filter_input(INPUT_POST, 'Zip_Code');
$Phone_Number = filter_input(INPUT_POST, 'Phone_Number');
$Birth_Date = filter_input(INPUT_POST, 'Birth_Date');
$Create_UserID = filter_input(INPUT_POST, 'Create_UserID');
$Random_Number = filter_input(INPUT_POST, 'Random_Number');
$Savings_Balance = filter_input(INPUT_POST, 'Savings_Balance');
$Monthly_Savings = filter_input(INPUT_POST, 'Monthly_Savings');
$Savings_Goal = filter_input(INPUT_POST, 'Savings_Goal');

//  Validations
/*
if ($First_Name === NULL) {                                     //  Validate $First_Name
    $error_message = 'First Name cannot be empty.';
} else if (is_numeric($First_Name)) {
    $error_message = 'First Name cannot be numerical.';
} else if ($Last_Name === NULL) {                               // Validate $Last_Name 
    $error_message = 'Last Name cannot be empty.';
} else if (is_numeric($Last_Name)) {
    $error_message = 'Last Name cannot be numerical.';
} else if ($Street_Address === NULL) {                          // Validate $Street_Address 
    $error_message = 'Street Address cannot be empty.';
} else if ($City === NULL) {                                    // Validate $City 
    $error_message = 'City cannot be empty.';
} else if (is_numeric($City)) {
    $error_message = 'City cannot be numerical.';
} else if ($State === NULL) {                                   // Validate $State 
    $error_message = 'State cannot be empty.';
} else if (is_numeric($State)) {
    $error_message = '$State cannot be numerical.';
} else if ($Zip_Code === NULL) {                                // Validate $Zip_Code 
    $error_message = '$Zip_Code cannot be empty.';
} else if ($Zip_Code < 0) {
    $error_message = '$Zip_Code cannot be empty.';
} else if ($Phone_Number === NULL) {                            // Validate $Phone_Number 
    $error_message = '$Phone_Number cannot be empty.';
} else if ($Phone_Number < 0) {
    $error_message = '$Phone_Number cannot be empty.';
} else if ($Birth_Date === NULL) {                              // Validate $Birth_Date 
    $error_message = '$Birth_Date cannot be empty.';
} else if ($Birth_Date < 0) {
    $error_message = '$Birth_Date cannot be empty.';
} else if ($Create_UserID === NULL) {                           // Validate $Create_UserID 
    $error_message = '$Create_UserID cannot be empty.';
} else if ($Create_UserID < 0) {
    $error_message = '$Create_UserID cannot be empty.';
} else if ($Random_Number === NULL) {                           // Validate $Random_Number 
    $error_message = '$Random_Number cannot be empty.';
} else if ($Random_Number < 0) {
    $error_message = '$Random_Number cannot be empty.';
} else if ($Savings_Balance === NULL) {                         // Validate $Savings_Balance 
    $error_message = '$Savings_Balance cannot be empty.';
} else if ($Savings_Balance < 0) {
    $error_message = '$Savings_Balance cannot be empty.';
} else if ($Monthly_Savings === NULL) {                         // Validate $Monthly_Savings 
    $error_message = '$Monthly_Savings cannot be empty.';
} else if ($Monthly_Savings < 0) {
    $error_message = '$Monthly_Savings cannot be empty.';
} else if ($Savings_Goal === NULL) {                            // Validate $Savings_Goal 
    $error_message = '$Savings_Goal cannot be empty.';
} else if ($Savings_Goal < 0) {
    $error_message = '$Savings_Goal cannot be empty.';
} else {
    $error_message = '';
}
*/ 

// If Error Exists, Go to Index Page
/*

if ($error_message != '') {
    include('index.php');
    exit();
}

*/

// Run Calculations


// Apply Formatting



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


<label>Full Name:</label><br>
<span><?php echo ($Full_Name); ?></span><br>
<br>
<label>Address:</label><br>
<span><?php echo ($Street_Address); ?></span><br>
<br>
<label>City, State, and ZIP:</label><br>
<span><?php echo ($city . ' ' . $State  . ' ' . $Zip_Code); ?></span><br>
<br>
<label>Phone Number:</label><br>
<span><?php echo ($Phone_Number); ?></span><br>
<br>
<label>Birth Date:</label><br>
<span><?php echo ($Birth_Date); ?></span><br>
<br>
<label>User ID:</label><br>
<span><?php echo ($Create_UserID); ?></span><br>
<br>
<label>Random Number Message:</label><br>
<span><?php echo ($Random_Number); ?></span><br>
<br>
<label>Amount you need to reach your goal:</label><br>
<span><?php echo ($Savings_Goal); ?></span><br>
<br>
<label>Length of time to reach your goal:</label><br>
<span><?php echo ("Didin't Finish"); ?></span><br>
<br>
<label>Approximate date to reach your goal:</label><br>
<span><?php echo ("Didn't Finish"); ?></span><br>
<br>
<label>Current Timestamp:</label><br>
<span><?php echo (time()); ?></span><br>
<br>
<label>Current Date:</label><br>
<span><?php echo (date()); ?></span><br>
<br>
<label>Current Time:</label><br>
<span><?php echo (time()); ?></span><br>
<br>


</body>
</html>