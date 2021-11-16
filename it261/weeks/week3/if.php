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

function sayHello($greeting) {
    echo "Hello {$greeting}";
    }

    sayHello("Good morning");
echo '<br>';

function add_subt($val1, $val2) {
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add, $subt);
}

$result_array = add_subt(10,5);
echo "add: " . $result_array[0];
echo "subtraction action: " . $result_array[1];


echo '<br>';
echo '<br>';
// area and volume fucntion

function cube_area_volume($side_length) {
    $area = $side_length * $side_length;
    $volume = $side_length * $side_length * $side_length;
    return array($area, $volume);
}
    $result_array = cube_area_volume(33);

    echo 'The area is '.$result_array[0].' and the volume is '.$result_array[1].' ';
  
    echo print_r($result_array);
   