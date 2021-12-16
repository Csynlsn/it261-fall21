<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

//LOGIN AND REGISTER
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'Login Successful!';
$errors = array(); 


function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}



define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// $key             $value
$nav['index.php'] = 'Welcome';
$nav['about.php'] = 'About';
$nav['database.php'] = 'Plants';
$nav['switch.php'] = 'Information';
$nav['contact.php'] = 'Contact';
// $nav['thx.php'] = 'Thank You';

function my_nav($nav) {
$my_return = '';
foreach($nav as  $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '<li><a href=" '.$key.' " class="active">'.$value.'</a></li>';    
} else {
    $my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>'; 
} // end else
} // end foreach 
return $my_return;
} // end function


switch(THIS_PAGE) {
    case 'login.php'; 
    $title = 'Log In';
    $headline = 'City Plants: Cultivate Your Urban Oasis';
    $subheader = 'Please Log In';
    break;

    case 'register.php'; 
    $title = 'Register Today!';
    break;

    case 'index.php'; 
    $title = 'City Plants';
    $headline = 'City Plants: Cultivate Your Urban Oasis';
    $subheader = 'A Useful Guide to Urban Gardening';
    //$background_color = ' background-color:#ffffff';
    break;

    case 'about.php'; 
    $title = 'Who We Are';
    $headline = 'About City Plants';
    $subheader = 'City Plants: Cultivate Your Urban Oasis';
    break;

    case 'database.php'; 
    $title = 'Our Plants';
    $headline = 'Browse Our Inventory';
    $subheader = 'City Plants: Cultivate Your Urban Oasis';
    break;

    case 'plant-view.php'; 
    $title = 'More Info';
    $headline = 'A Closer Look';
    $subheader = 'City Plants: Cultivate Your Urban Oasis';
    break;

    case 'switch.php'; 
    $title = 'Sale!';
    $headline = 'On Sale Today';
    $subheader = 'City Plants: Cultivate Your Urban Oasis';
    break;

    case 'contact.php'; 
    $title = 'Contact Us';
    $headline = 'Contact City Plants';
    $subheader = 'City Plants: Cultivate Your Urban Oasis';
    break;

    case 'thx.php'; 
    $title = 'Thank You Page';
    $headline = 'Thanks For Choosing City Plants!';
    break;
}

// ----------------------SWITCH---------------------- //
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}

switch($today) {
    case 'Sunday' :
    $plant  = 'ZZ Plant';
    $sale = 'On Sale Sunday!';
    $pic = 'switch_plant_zz';
    $alt = 'ZZ Plant in pot';
    $color = ' style="background-color:#75834f"';
    $content =  'Featuring waxy dark-green leaves growing from upright stems, 
    this tropical ZZ plant arrives freshly grown in a white ceramic pot with a hammered finish.' ;
    break;
    }
    
    switch($today) {
    case 'Monday' :
    $plant  = 'Aloe Plant';
    $sale = 'On Sale Monday!';
    $pic = 'switch_plant_aloe';
    $alt = 'Aloe Plant in pot';
    $color = ' style="background-color:#baa885"';
    $content = 'Aloe likes room temperatures around 70 degrees
     and a lot of sunlight. As you might expect for a succulent, this indoor houseplant prefers dry soil, so ';
    break;
    }
    
    switch($today) {
    case 'Tuesday' :
    $plant = 'Pink Tradescantia';
    $sale = 'On Sale Tuesday!';
    $pic = 'switch_plant_tradecantia';
    $alt = 'Pink Tradescantia in pot';
    $color = ' style="background-color:#8a9175"';
    $content = 'Houseplants like Tradescantia enjoy bright, indirect light. They need a good amount of light and if they do not get it,
     youu will notice that their leaf markings begin to fade. Direct sun, however, will scorch their leaves';
    break;
    }
            
    switch($today) {
    case 'Wednesday' :
    $plant  = 'Pink Anthurium';
    $sale = 'On Sale Wednesday!';
    $pic = 'switch_plant_pink_anthurium';
    $alt = 'Pink Anthurium in pot';
    $color = ' style="background-color:#6e5b48"';
    $content = 'On the hunt for a plant that will deliver a pop of unexpected color? 
    This low-maintenance plant has bright blooms for added vibrancy without the added work. ';
    break;
    }
                
                
    switch($today) {
    case 'Thursday' :
    $plant  = 'Mexican Fence Post Cactus';
    $sale = 'On Sale Thursday!';
    $pic = 'switch_plant_mexican_cactus';
    $alt = 'Large mexican fence post cactus';
    $color = ' style="background-color:#394d2c"';
    $content = 'Native to Mexico, this post-style Cactus grows multiple long stems straight
     from the base. Small pink flowers will form for added spring color. This cactus loves full
      sunlight and needs at least 6 hours every day';
    break;
    }
                    
    switch($today) {
    case 'Friday' :
    $plant = 'Natal Mahogany Tree';
    $sale = 'On Sale Friday!';
    $pic = 'switch_plant_natal_mahogany';
    $alt = 'Large indoor tree';
    $color = ' style="background-color:#a79c9c"';
    $content = 'Natal Mahogany is one of our favorite trees for low to medium light spaces indoors. 
    It has deep green foliage that can almost look blue in certain light conditions.';
    break;
    }
                        
    switch($today) {
    case 'Saturday' :
    $plant  = 'Angel Wings Cactus';
    $sale = 'On Sale Saturday!';
    $pic = 'switch_plant_angel_wings';
    $alt = 'Adorable angel wings cactus in pot';
    $color = ' style="background-color:#baa885"';
    $content = 'The Opunta albispina cactus, also known as an angel wing cactus or bunny ears cactus
     is a member of the prickly pear family that grows evenly spaced clusters of hairs rather than 
     sharp spines. Pale yellow blooms are followed by red, edible fruits on plants that receive a full day of sun.';
    
    break;
    }

//--------------------------------------------------------------------//
    $day['switch.php?today=Sunday'] = 'Sunday';
    $day['switch.php?today=Monday'] = 'Monday';
    $day['switch.php?today=Tuesday'] = 'Tuesday';
    $day['switch.php?today=Wednesday'] = 'Wednesday';
    $day['switch.php?today=Thursday'] = 'Thursday';
    $day['switch.php?today=Friday'] = 'Friday';
    $day['switch.php?today=Saturday'] = 'Saturday';
    
    
    function my_switch($day) {
    $weekday = '';
    foreach($day as  $key => $value) {
    if(THIS_PAGE == $key) {
    $weekday .= '<li><a href=" '.$key.' " class="active">'.$value.'</a></li>';    
    } else {
        $weekday.= '<li><a href=" '.$key.' ">'.$value.'</a></li>'; 
    } // end else
    } // end foreach 
    return $weekday;
    } // end function
    
    
    
    

// emailable form php START     // emailable form php START

$first_name = '';
$last_name_form = '';
$email_form = '';
$phone = '';
$preference = '';
$plants = '';
$comments = '';
$policy = '';

$first_name_Err = '';
$last_name_form_Err = '';
$email_form_Err = '';
$phone_Err = '';
$preference_Err = '';
$plants_Err = '';
$comments_Err = '';
$policy_Err = '';



if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['first_name'])) {
        $first_name_Err = 'To whom are we sending this cheese?';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name_form'])) {
        $last_name_form_Err = 'Please provide your Last name';
        unset($_POST['last_name_form']);
    } else {
        $last_name_form = $_POST['last_name_form'];
    }

    if(empty($_POST['email_form'])) {
        $email_form_Err = 'Please provide your email';
        unset($_POST['email_form']);
    } else {
        $email_form = $_POST['email_form'];
    }

    if(empty($_POST['preference'])) {
        $preference_Err = 'What style of cheese do you prefer?';
    } else {
        $preference = $_POST['preference'];
    }

    if(empty($_POST['plants'])) {
        $plants_Err = 'Please select your plants';
    } else {
        $plants = $_POST['plants'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please tell us your secrets';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['policy'])) {
        $policy_Err = 'You must agree to our terms';
    } else {
        $policy = $_POST['policy'];
    }

    // phone number
    if(empty($_POST['phone'])) {  
        $phone_Err = 'We require a valid phone number!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { 
        $phone_Err = 'Invalid format!';
        unset($_POST['phone']);
        } else{
        $phone = $_POST['phone'];
        }
        }



  function plant_time() {
     $my_return = '';
     if(!empty($_POST['plants'])) {
         $my_return = implode(', ', $_POST['plants']); 
     } 
     return $my_return;  
    
    } 


    if(isset(
        $_POST['first_name'],
        $_POST['last_name_form'],
        $_POST['email_form'],
        $_POST['phone'],
        $_POST['preference'],
        $_POST['plants'],
        $_POST['comments'],
        $_POST['policy'] 
        
        )) { 
          
        $to = 'szemeo@mystudentswa.com';    
        // $to = 'admin@kaciecodes.com';
        $subject = 'Plant Contact' .date('m/d/y') ;
        $body = '
        First name: '.$first_name.' '.PHP_EOL.'
        Last name: '.$last_name_form.' '.PHP_EOL.'
        Email: '.$email_form.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Preference: '.$preference.' '.PHP_EOL.'
        plants: '.plant_time().' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';
            
        $headers = array(
        'From' => 'noreply@kaciecodes.com',
        'Relpy-to' => ''.$email_form.'',
        );
            
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        }   


} // end server request method



// end emailable form php





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







