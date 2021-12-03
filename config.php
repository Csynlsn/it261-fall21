<?php    //our config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

//initialize / define our variables
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
$nav['login.php'] = 'Log In';
$nav['register.php'] = 'Register';


switch(THIS_PAGE) {
    case 'index.php'; 
    $title = 'Welcome!';
    break;

    case 'login.php'; 
    $title = 'Log In';
    break;

    case 'register.php'; 
    $title = 'Register Today!';
    break;

}