<?php
echo '<!DOCTYPE html>';
/*****************************************************************************
Title:  	Form Data and Control Statements
Use:     	To demonstrate forms and control statements via a small quiz.
Author:  	Alex Fleming
School:  	Southern Illinois University
Term:    	Fall 2019
Developed:  9/8/19
Tested:     9/8/19
******************************************************************************/

echo '<html lang="en-US">';

echo '<head>';
	echo '<meta charset="utf-8">';
	echo '<title>Page Title</title>';
	echo '<link rel="stylesheet" href="main.css">';
echo '</head>';

echo '<body>';

echo '</body>';

echo '</html>';
?>

Name: <input type="text" name="name" value="">
Secret Code: <input type="password" name="secret" value="<?php echo $secret;?>">
Hidden Field: <input type="hidden" name="labname" value="Week 3 Lab Exercise">


