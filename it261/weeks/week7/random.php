<?php
// random.php

$dice = rand(1, 6);
echo '<br>';
echo $dice;

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);

echo '<br>';
echo $dice1;
echo '<br>';
echo $dice2;
echo '<br>';

// if I throw a double I will win

if($dice1 == $dice2) {
    echo 'I won!';
} else { 
    echo 'I have lost, yet again';
}

$i = rand(1, 20);
echo $i;

// will display photos randomly

$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5',
);

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

// if we to echo $i directly below, it would give us 0, 1, 2, 3, 4
$i = rand(0, 4);

$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'"   alt="'.$photos[$i].'">';
