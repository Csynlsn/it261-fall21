<?php
// homepage
//after creating this index.php page will not be able to access it unless ypu log in as a user/register

session_start();

include('config.php');

//if the user has not logged in correctly, they will be directed to the log in page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

include('includes/header.php');

// notification message
// if successful, welcome the end user

if(isset($_SESSION['success'])) : ?>

<div class="success">
<h3>  <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>  </h3>
</div> <!--end div success-->
<?php endif ; 


if(isset($_SESSION['username'])) : ?>

<p id="hello">Hello, <?php echo $_SESSION['username']; ?>!</p>
<p id="logout"><a href="index.php?logout='1' ">Log Out</a></p>

<?php endif ; ?>
<?php 
// include('config.php');

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: databse.php');
}

$sql = 'SELECT * FROM plants WHERE plant_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) {
while($row = mysqli_fetch_assoc($result)) {
$image = ($row['image']);
$name = ($row['name']);
$light = ($row['light']);
$water = ($row['water']);
$pet_friendly = ($row['pet_friendly']);
$description = ($row['description']);
$price = ($row['price']); 

$feedback = '';
} // while

} else {
    $feedback = 'Something is not working!!!! ';
} 

// for big assign - call header include here
// include('includes/header.php');

?>
<h1 class="headline"><?php echo $headline; ?></h1>
<?php echo '<h2>The '.$name.' </h2>';?>
<main class="view">
<?php
if($feedback == '') {
echo '<ul>';   
echo '<li><b>Light: </b>'.$light.'</li>';     
echo '<li><b>Water: </b>'.$water.'</li>';   
echo '<li><b>Pet Friendly: </b>'.$pet_friendly.'</li>';      
echo '<li><b>Price: </b>'.$price.'</li>';   
echo '<li><p ><b>Info: </b>'.$description.'</p></li>';  
echo '</ul>';  
echo '<a href="database.php"><p id="return">Back to Our Plants</p></a>'; 
}

// mysqli_free_result($result);  we are going to talk to our database
// in our aside, so we will cut it and add it later in the code
// mysqli_close($iConn);
?>

</main>

<aside class="view">
 <?php
 if($feedback == '') {
echo '<img src="images/plant_id'.$id.'.jpg " alt=" '.$name.' "> ';
}
 ?>   
</aside>

<?php
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');