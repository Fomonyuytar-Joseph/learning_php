<?php

// What is a variable

// Variable types


// Declare variables
$name = 'Joseph';

$age = 12;

$isMale = true;
$height = 1.23;
$salary = null;

// Print the variables. Explain what is concatenation

echo $name  . '<br/>';
echo $isMale . '<br/>';
echo $age . '<br/>';
echo $height . '<br/>';
echo $salary . '<br/>';

// Print types of the variables

echo gettype($name).'<br/>';
echo gettype($age).'<br/>';
echo gettype($height).'<br/>';
echo gettype($salary).'<br/>';
echo gettype($isMale).'<br/>';

// Print the whole 

var_dump($name);

// Change the value of the variable
 
// Print type of the variable

// Variable checking functions
is_string($name);
is_bool($isMale);
is_int($age); 
is_double($height);

// Check if variable is defined
define('PI',3.14);
echo PI .'<br/>'; 

// Constants

// Using PHP built-in constants
