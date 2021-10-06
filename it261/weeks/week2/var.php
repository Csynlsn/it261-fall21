<?php
// this will be my introduction to variables
//
// a variable is a container for information

$name = 'Kacie';
$weather = 'Today is a cloudy day';
$body_temp = 98.6;
// my 98.6 is a float - if it were 98 it would be an integer

echo $name;
echo '<br>';
echo 'My name is $name';
echo '<br>';
echo '<br>';
echo "My name is $name";
echo '<br>';
// If you use single quotes around a variable, the value of 
// the variable will not display.
// If you use double quotes, the variable value will display!

echo 'My name is '.$name.' ';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well!';
echo '<br>';
$name = 'Moose';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo '<br>';
echo $z;
$z = $x * $y;
echo '<br>';
echo $z;
echo '<br>';

// continue with our name
$first_name = 'Kacie';
$last_name = 'Nielsen';

echo $first_name.' '.$last_name;
echo '<br>';
echo '<br>';

echo ' '.$first_name.' '.$last_name.'';
echo '<br>';
echo '<br>'; 

echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.' ';
// punctuation- inside 'single quotes' you MUST nest the variable
// with the following:   '.$variable.'
// when you have an apostrophe you must use an ESCAPE before the apostrophe \'
// double quotes not a problem
echo '<br>';
echo '<br>';

echo "here are the names with a double's quote! $first_name $last_name.";
echo '<br>';
$name = 'Kacie ';
$name .= 'Smith';
echo $name;
echo '<br>';
echo '<br>';
// placed . in front of = ( .= )

$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';

// calculating sales tax
$x = 120;
$x *= .09;
echo $x;

// our first function   -   number_format()
echo '<br>';
$x = 137;
$x /= 4;
//  ($x, 1) specifies one decimal place only
//  ($x, 0) specifies NO decimal place
$friendly_x = number_format($x, 5);
echo $friendly_x;

echo '<br>';
echo '<br>';
// our second preset function  -  the date function
echo date('Y');
echo '<br>';
echo date('l');

echo '<br>';

//arrays  -  can't echo an array. CAN ehco an indexed array
$fruit[] = 'orange';
$fruit[] = 'bananna';
$fruit[] = 'apples';
$fruit[] = 'grapes';
$fruit[] = 'cherries';
echo '<br>';
echo '<br>';
echo $fruit[3];
echo '<br>';
echo '<br>';

$fruit = array(
    'orange',
    'bannanna',
    'grapes',
    'apples',
    'cherries',
);


$fruit = [
    'orange',
    'bannanna',
    'grapes',
    'apples',
    'cherries',
    'kiwi',
    'watermelon',
];

// CANNOT echo an array

print_r($fruit);
echo '<br>';
var_dump($fruit);
echo '<br>';

//  another array in the world of websites
//  indexed array (with empty square brackets)

$nav[]= 'Home';
$nav[]= 'About';
$nav[]= 'Daily';
$nav[]= 'Contact';
$nav[]= 'Gallery';

echo $nav[0];
echo '<br>';


//  associative array 
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';


// index.php is the key. Home is the value
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<pre>';
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'Unsolved Mysteries';
$show_actor = 'Robert Stack';
$show_genre = 'Murder and Intrigue';

echo 'My favorite series is "'.$show.'" hosted by '.$show_actor.'
and it is about '.$show_genre.' ';











