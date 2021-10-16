<?php
// for loops
// tricky!
// start at/ go up to/ go up by how many

for ($x = 0; $x <= 21; $x+= 3) {
    echo "The number is: $x <br>";
}   

// for loo[ for famous celcius - far converter

// do not call out celcius var outside the loop
echo '<br>';

for ($celcius = 0; $celcius <= 100; $celcius+=1) {
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo '<b> Farenheit:</b> '.$friendly_far.' <b>Celcius:</b> <span style="color:red; font-weight:bold;">'.$celcius.' </span><hr> ';

//echo 'Here is my string: '.$celcius.' Additonal string content'.$far.'';
}

echo '<br>';
// kilometers and miles
// 1 kilometer = 0.62 miles 
// 1 mile * 1.609 = x kilometers

for ($mile = 0; $mile <=200; $mile+=1) {
$kilometer = ($mile * 1.609);
$friendly_kilo = floor($kilometer);
echo '<br> Miles:</b> '.$mile.' <b>Kilometers:</b> '.$friendly_kilo.' '; 
}










?>