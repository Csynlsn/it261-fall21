<?php
//  our foreach loop -last week we couldn't echo array-
// Name --- Handmaid's Tale = Key/Value pair
$show = array(
    'Name' => 'Handmaid\'s Tale',
    'Actor' => 'Elizabeth Moss',
    'Genre' => 'Drama',
    'Author' => 'Margret Atwood',
    'Year' => '1987'
);

$show['Name'] = 'Handmaid\'s Tale';
$show['Actor'] = 'Elizabeth Moss';
$show['Genre'] = 'Drama';
$show['Author'] = 'Margeret Atwood';
$show['Year'] = 1987;

//foreach($show as $key => $value) {
//echo '<b> '.$key.'</b>:  '.$value.'<br>';
//}

echo '<br>';

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

//foreach($nav as $key => $value) {
//echo '<b> '.$key.'</b>:  '.$value.'<br>';    
//}

?>

<!doctype html>
<html lang="en">
<head>
 <meta charset="UFT-8">
 <title>For each loop</title>
 <style>
     .wrapper {
         width:580px;
         margin:20px auto;
     }
     nav li {
         list-style-type:none;
     }

     nav a {
         color:red;
         font-weight:bold;
         text-decoration:none;
         font-size:1.2em;
         font-family:Verdana, arial, sans-serif;
     }
 </style>    
</head>

<body>
<div class="wrapper">
<h1>Our Foreach Loops</h1>
<h2>Handmaid's Tale</h2>
<ul>
<?php

foreach($show as $key => $value) {
    echo '<li><b> '.$key.'</b>:  '.$value.'<///li>';
    }
?>
</ul>
<h2>Our Navigation</h2>
<nav>
<ul>
    <?php
    foreach($nav as $key => $value) {
        echo '<li><a href="'.$key.'">  '.$value.'<a/></li>';    
        }
    ?>
</ul>  
</nav> 
</div> <!--end wrapper-->
</body>
</html>   