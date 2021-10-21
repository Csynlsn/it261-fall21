<?php
// our first form - dont care about html
// form attributes/values/form elements important
//use global variable of $_POST

//two items - two input feilds will be NAME and EMAIL

if(isset($_POST['name'],       //asking is $_POST name and $_POST email has been set
            $_POST['email'])) {
$name = $_POST['name'];
$email = $_POST['email'];
if(empty($_POST['name'] &&
         $_POST['email'])) {
             echo 'Please fill out the fields!';
         }  else {
             echo $name;
             echo '<br>';
             echo $email;
         }     
} else {
    echo '
    <form action="" method="post">
    <label>NAME</label>
    <input type="text" name="name">                
    
    <label>EMAIL</label>
    <input type="email" name="email">

    <input type="submit" value="SEND!!!">

    </form>
    ';
}
//placing the form IN THE ECHO!!!

?>