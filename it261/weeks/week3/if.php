<?php
// the if statement
// LOGIC - if temp is less than 90 degrees, all is well. Else, wear sunscreen, it's a scorcher

$temp = 91;
if($temp <= 90) {
echo 'not that hot';
} else {
echo 'It\'s a scorcher, wear sunscreen';
}

echo '<br>';
// we are going to expand the if statement with an if else statement

$temp = 84;
if($temp <= 78) {
echo 'We\'ll survive';
} elseif($temp <= 85) {
echo 'It\'s getting hotter';
} else {
echo 'It\s realllllly hot';
}

echo '<br>';
//  fun with logic
//  if my sales are over 800000, I will make 10% bonus of base salery
//  if sales are equal to or greater than 6000000, I will make a bonus of 5%

$sales = 500000;
$salary = 200000;
if($sales >= 800000) {
$salary *= 1.10;
echo $salary;
} elseif($sales >= 600000) {
$salary *= 1.05;
echo $salary;
} else {
echo $salary;
}