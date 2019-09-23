<?php

/*****************************************************************************
Title:  	Arrays and Custom Functions
Use:     	To demonstrate arrays and functions.
Author:  	Alex Fleming
School:  	Southern Illinois University
Term:    	Fall 2019
Developed:  9/22/19
Tested:     9/22/19
******************************************************************************/

double $tax_rate = 0.08;

// Pass in value:amount of an item for tax calcualtion. Decimal for dollars and cents.
// Function needs 2nd value:tax_rate and is decimal
// Calculate tax on the amount * tax_rate, $10.50 * 6% = 0.63 cents
// Set the tax_rate in a global variable at 8%.

function calculate_tax($itemAmount) {

    double $itemTax = $itemAmount * $tax_rate;
    return $itemTax;

}


// Pass in 2 values, value:name of item and value:cost of item.
// Processing will start by calling the first function:calculate_tax() to calc tax on the item passed in
// This function returns array (Name, Original Value, CalcTax, & Item Total Cost)
// Parse the array outside the function and display the four values.

function process_item ($itemName, $itemCost ) {

    double $itemTax = calculate_tax($itemCost);
    double $itemTotal = $itemCost + $itemTax;
    $processedItems array(
        "Item_Name" => $itemName,
        "Item_Cost" => $itemCost,
        "Item_Tax" => $itemTax,
        "Item_Total" => $itemTotal,
    )
    return $processedItems;

}

// Pass in the array:employee_data
// Create a loop to process the 3 records in the array
// Loop should not be hardcoded to only process three records
// Will parse length of array and loop on length
// Processing determines the pay raise and new salary amount
// Return a 2 dimensial array
// Elements:  first name, last name, original monthly salary, pay raise, new monthly salary
// Parse the array outside the function and display the five values.

/*
$employee_data=array(
    Elements: first name, last name, monthly salary, and pay raise (%).
    array("John","Doe",39200,0.025),
    array("Ron","Pell",55700,0.020),
    array("Emily","Fay",19400,0.030)
)
*/

function process_employee($employee_data) {

    // Elements: firstname, lastname, original monthly salary, pay raise, new monthly salary

    $processed_data array();

    foreach($employee_data as $row) {
        $payRaise = $employee_data[$row][3];
        $newSalary = $employee_data[$row][2] + $payRaise;
        array_push($processed_data, $newSalary);    
    }

    $final_data = array_merge($employee_data,$processed_data);
    return $final_data;
    
}

?>
