<?php
// Prints the day, i.e. Monday (the lowercase letter L)
//  echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
//Friday 15th of October 2021 04:27:00 AM
echo '<br>';
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
echo '<br>';
echo date("h:i");

//why change time from 12 hr to 24 hour block
//I will use an if/elseif statement resulting in a different message based on the time of day
//if the time is less than 11 it's morning
//if time is less than 16.00 it's afternoon
//else, it's evening
//we need to assign our time to a variable


$time =  date("H:i");
if($time <= 11) {
 echo '<h2 style="color:yellow;">Good Morning, Kacie!!!</h2>';  
} elseif($time <= 16) {
echo '<h2 style="color:pink;">Good Afternoon</h2>';
    } else {
echo '<h2 style="color:orange;">Good Evening</h2>';
    }

//we can place html elements in our echo


?>

