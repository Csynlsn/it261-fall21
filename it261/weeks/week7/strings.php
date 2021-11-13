<?php
// sub strings and replace

$statement = "Presently, I am reading The Looming Tower";
echo substr($statement, 0);
echo '<br>';
//by using 0, our complete statement will display
echo $statement;
echo '<br>';

echo substr($statement, 0, 4);   //Pres
echo '<br>';

echo substr($statement, 0, 14);   //Presently, I a    (counting spaces as well)
echo '<br>';

echo substr($statement, -6);   //Tower
echo '<br>';

echo substr($statement, -7);   //Tower g
echo '<br>';


echo substr($statement, -15, 5);   //e Loo
echo '<br>';

// string replace function

$statement2 = 'Hulu\'s rendition of the Looming Tower 
is based on the book the Looming Tower.';

echo $statement2;
echo '<br>';
// call out the word you are replacing with the word you are replacing it with
echo str_replace('the', 'The', $statement2);