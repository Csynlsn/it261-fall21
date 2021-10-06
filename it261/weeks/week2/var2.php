<?php
// More on variables, math, and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;

echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;

echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;

echo $c;
echo '<br>';

$money = 100;
$money /=7;
echo $money;
echo '<br>';

$money = 100;
$money /=7;
$friendly_money = number_format($money, 2);
echo $friendly_money;
echo '<br>';

// floor function

$friendly_money = floor($money);
echo '<br>';
echo $friendly_money;
echo '<br>';

// ceiling function

$friendly_money = ceil($money);
echo '<br>';
echo $friendly_money;
echo '<br>';

// logic and calculations
// circumference of a circle = 2*pr*r

$radius = '10';
$pi = 3.14;
$circumference = (2 * $pi) * $radius;
echo $circumference;

// always think LOGIC FIRST
// 22 degrees celcius = ? in farenheiht?
// formula: far = (cel * 9/5) + 32
$celcius = 14;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo '<br>';
echo ''.$friendly_far.' degrees';
$friendly_far = ceil($far);
echo '<br>';
echo ''.$friendly_far.' degrees';

// logic and the exchange rate
// canadian = 100
// echange rate = .79

$canada = 1433;
$canada *= .79;
echo '<br>';
echo $canada;
echo '<br>';
echo '<p>I have <b>'.$canada.'$</b> USD dollars! </p>';


$canada = 1433;
$canada *= .79;
echo '<br>';
$friendly_canada = floor($canada);
echo '<br>';
echo '<p>I have <b>'.$friendly_canada.'$</b> USD dollars! </p>';




