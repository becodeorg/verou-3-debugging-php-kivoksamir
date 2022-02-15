
<?php



// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

echo "<br>";



function new_exercise()
{
    $x="our debugging is ";  // declare the vairable (x).
    $block = $x . "starts here:<br/>"; // <br> is an html tage cant be included in php code without ""
    echo $block;


// === Exercise 2 ===
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];                      // array index starting form 0 not 1 .. 

echo $monday;


echo "<br>";



// === Exercise 3 ===


$str="Debugged ! Also very fun";
echo substr($str , 6,2);  // substring function counting (string,start,length)
};

new_exercise();