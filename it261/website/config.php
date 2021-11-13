<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// $key             $value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
// $nav['thx.php'] = 'Thank You';
$nav['gallery.php'] = 'Gallery';

// create a function for our navigation
//  so the function is called out on our header.php page

function my_nav($nav) {
$my_return = '';
foreach($nav as  $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';    
} else {
    $my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>'; 
} // end else
} // end foreach ... call out return before the end of the fucntion
return $my_return;
} // end function

switch(THIS_PAGE) {
    case 'index.php'; 
    $title = 'Home page of our IT 261 Website';
    $body = 'home';
    $headline = 'Welcome to our IT 261 Website Home Page';
    $background_color = ' background-color:#ffffff';
    break;

    case 'about.php'; 
    $title = 'About page of our IT 261 Website';
    $body = 'about inner';
    $headline = 'Welcome to our About Page';
    break;

    case 'daily.php'; 
    $title = 'Daily page of our IT 261 Website';
    $body = 'daily inner';
    $headline = 'Welcome to our Daily page where my HW3 Switch will display';
    break;

    case 'project.php'; 
    $title = 'Project page of our IT 261 Website';
    $body = 'project inner';
    $headline = 'Welcome to our Project Page';
    break;

    case 'contact.php'; 
    $title = 'Contact page of our IT 261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to Our Cheese Service Contact Page';
    break;

    case 'thx.php'; 
    $title = 'Thank You Page';
    $body = 'thank you inner';
    $headline = 'Thanks For Ordering Our Cheese!';
    break;

    case 'gallery.php'; 
    $title = 'Gallery page of our IT 261 Website';
    $body = 'gallery inner';
    $headline = 'Welcome to our Gallery Page';
    break;
}

//this is beggining of switch for HW3
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}


// emailable form php

// random images

function random_pics() {

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$pic = ''.$photos[$i].'.jpg';
$random_pic = '<img class="random" src="images/'.$pic.'" alt="'.$photos[$i].'">';
return $random_pic;

} // end random images



// random CHEESE images for contact.php

function cheese_pics() {

    $photos[0] = 'cheeseboard';
    $photos[1] = 'CheeseGrapesWineglasses';
    $photos[2] = 'cow-sheep-goat';
    $photos[3] = 'french-cheese';
    
    $i = rand(0, 3);
    
    $pic = ''.$photos[$i].'.jpeg';
    $cheese_pic = '<img class="random" src="images/'.$pic.'" alt="'.$photos[$i].'">';
    return $cheese_pic;
    
    } // end random cheese mages




?>