<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
// SOLUTION: added the variable in the function parenthesis so it can be called and changed later.

new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;
// SOLUTION: changed 1 to 0. Index of array starts at 0 (alas Monday) and not 1 (alas Tuesday)

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed
$str = '"Debugged !" Also very fun"';
echo substr($str, 0, 12);
// SOLUTION: gave proper "" quotation marks to string. Color code showed words were not displayed as string but number (orange instead of green)
// --------- Also changed string length to 12 instead of 10 so quotation marks are displayed.

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up what's going wrong with this code, and then fix it, with ONE CHARACTER!
foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}
print_r($week);
// SOLUTION: put an & infront of $day after googling the syntax for 'php foreach' as was hinted at in the first sentence of exercise 4.

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array
$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
  array_push($arr, $letter);
}
print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array
// SOLUTION: changed < with != and the 'z' with 'aa' (found this on StackOverflow but I don't understand why != and < doesn't)

new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];
function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    echo implode($params, "-");
}
function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }
    return $amount;
}
function randomHeroName() {
    $hero_firstnames = ["captain", "doctor", "iron", "hank", "ant", "wasp", "the", "hawk", "spider", "black", "carol"];
    $hero_lastnames = ["America", "Strange", "Man", "Pym", "Girl", "Hulk", "Eye", "Widow", "Panther", "Daredevil", "Marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = ucfirst($heroes[rand(0,count($heroes))][rand(0, 10)]);
    return $randname;
}
echo "Here is the name: ", combineNames();
// SOLUTION: added & to $param in foreach loop and changed . to a , in the last echo. Also added 'ucfirst()' for uppercasing first letters of names
?>
</body>
</html>
