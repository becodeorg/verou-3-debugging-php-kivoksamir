
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


echo "<br>";

// === Exercise 4 ===
foreach ($week as &$day) {  // add & the value will be assigned by reference.
  $day = substr($day, 0, -3);
}

print_r($week);


echo "<br>";
// === Exercise 5 ===
// The result should be: "Copyright © <current year> - BeCode"
function copyright(int $year): string
{
  return "Copyright &copy; $year - BeCode";
}

echo copyright(intval(date('Y'))); //we need to  convert  string to int, then echo return..



echo "<br>";

// === Exercise 6 ===
// The array should be printing every letter of the alphabet (a-z)
// Fix the code so the for loop pushes each letter of the alphabet in the array
$arr=[];    
foreach (range('A', 'Z') as $char) { // first solution I founded the way but using ((foreach)) .. 
array_push($arr, $char);

}
print_r($arr);


// === Exercise 6 === secound solution


$array=[];
$letters = range("a","z"); // generate the the letters
for($i=0 ; $i<count($letters); $i++){ // loop around it ..

	array_push($array,$letters);

};

print_r($array);



// === Exercise 7 ===
echo "<br>";


function login(string $email, string $password): string
{
  if ($email == 'john@example.be' && $password == 'pocahontas') { // change (|| OR) with (&& and)...

    return 'Welcome John' . ' Smith';    // use if {} else{} .. 
  } else return 'No access';
}


/* do not change any code below */
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
echo "<br>";

//Should say: no access
echo login('john@example.be', 'dfgidfgdfg');
echo "<br>";

//Should say: no access
echo login('wrong@example', 'wrong');



// === Exercise 8 ===
// Check if the link is containing one of the below parts and respond with the correct message

echo "<br>";

function isLinkValid(string $link)
{
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png',);

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !==false) {  // (strops() .. finds the position of the first occurrence of a string inside another string.
                                                      // change ==true with !==false , will only evaluate to false if $var is exactly false..
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');


};











new_exercise();