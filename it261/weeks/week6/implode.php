<?php 
//  my implode and wines function
// cab   merlot   syrah   malbec   blend

$wines = array(
    'cab',
    'merlot',
    'malbec',
    'syrah',
    'blend'
);

// echo $wines;
// we can't echo $wines - we'll implode wines

$my_wines = implode(', ', $wines);
echo $my_wines;