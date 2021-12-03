<?php //where we connect to our database

session_start(); //store info aka variables to be used accros sevreal pages

include('config.php');
// include header
// connect to databse
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,
mysqli_connect_error()));
//register user

if(isset($_POST['reg_user'])) {
$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

// want user to fill out all fields. if empty we use array push fucntion


// submit button on register page has a name of reg_user

if(empty($first_name)) {
    array_push($errors, 'First Name is required!'); 
}

if(empty($last_name)) {
    array_push($errors, 'Last Name is required!'); 
}

if(empty($email)) {
    array_push($errors, 'Email is required!'); 
}

if(empty($username)) {
    array_push($errors, 'Username is required!'); 
}

if(empty($password_1)) {
    array_push($errors, 'Please create a password!'); 
}

if($password_1 !== $password_2) {
    array_push($errors, 'Passwords do not match!'); 
}

// we are checking the user name and password and selecting it from the table

$user_check_query = "SELECT * FROM users WHERE username = '$username' OR '$email' LIMIT 1  ";

//we are querying using connection(iconn) and the info from the table(user_check_query)
//and assigning it to the variable $result
$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

if($rows) {

    if($rows['username'] == $username) {
        array_push($errors, 'Darn! That username has already been created.'); 
    }

    if($rows['email'] == $email) {
        array_push($errors, 'This email has already been registered!'); 
    }

} // close BIG ROWS

// if all is good (no errors) then......
// if errors are less than 1 (which would be zero errors)
// we use md5(). this function will spit out in your database a 32 hexadecimal char variable for your password
if(count($errors) < 1) {

$password = md5($password_1);

// we must insert our registration data into the table (in our database)
// this will happen by using the INSERT

$query = "INSERT INTO users (first_name, last_name, email, username, password) 
VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

mysqli_query($iConn, $query);

$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

//you have successfully registered- now will be sent to a log in page
header('Location:login.php');

} // end error count

} // end if is set reg user

// now we have to communicate to login.php page

if(isset($_POST['login_user'])) {
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password = mysqli_real_escape_string($iConn, $_POST['password']);

if(empty($username)) {
    array_push($errors, 'Username is required!');
}

if(empty($password)) {
    array_push($errors, 'Password is required!');
}// are going to count the errors
// if errors equal zero yay

if(count($errors) == 0 ) {
    $password = md5($password);
 
// have to make sure there is only one username and one password
// we will be selecting our info from our table
// create query var

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

$results = mysqli_query($iConn, $query);

//if username and password equal to one - goood

if(mysqli_num_rows($results) == 1 ) {

$_SESSION['username'] = $username; 
$_SESSION['success'] = $success; 
//if we are successful we will be directed to homepage/index.php
header('Location: index.php');

} else {
    array_push($errors, 'Wrong password/username combo!');
}
}
} // end isset login