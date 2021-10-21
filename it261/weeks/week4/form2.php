<?php
// our first form - dont care about html
// form attributes/values/form elements important
//use global variable of $_POST

//two items - two input feilds will be NAME and EMAIL

if(isset($_POST['fname'], 
         $_POST['lname'],      //asking if first name/last name/email has been set
         $_POST['email'],
         $_POST['comments'])) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comments = $_POST['comments'];
if(empty($_POST['fname'] &&  //don't forget '&' 
         $_POST['lname'] &&
         $_POST['email'] &&
         $_POST['comments'])) {
             echo 'Please fill out the fields!';
         }  else {
             echo $fname;
             echo '<br>';
             echo $lname;
             echo '<br>';
             echo $email;
             echo '<br>';
             echo $comments;
         }     
} else {            //now we have a new attribute for name
    echo '
    <form action="" method="post">
    <label>FIRST NAME</label>
    <input type="text" name="fname"> 
    
    <label>LAST NAME</label>
    <input type="text" name="lname"> 
    
    <label>EMAIL</label>
    <input type="email" name="email">

    <label>COMMENTS</label>
    <textarea name="comments"></textarea>

    <input type="submit" value="SEND!!!">

    </form>
    ';
}
//placing the form IN THE ECHO!!!

?>