<?php // project-view.php

// will display 1 person's detailed info    will use isset referring to $_GET['id']
// will use same $sql var but assign slightly different info where                      our rockstar id = $id

include('config.php');
//if isset $_GET['today'] <etc class=="">

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM rockstars WHERE rockstar_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) {
    // now we are not echoing we are assigning $row['first_name'] to $first_name        making new vars
while($row = mysqli_fetch_assoc($result)) {
$first_name = stripslashes($row['first_name']);
$last_name = stripslashes($row['last_name']);
$band = stripslashes($row['band']);
$age = stripslashes($row['age']);
$instrument = stripslashes($row['instrument']);
$description = stripslashes($row['description']); 
$blurb = stripslashes($row['blurb']); 
$feedback = '';
} // while

} else {
    $feedback = 'Something is not working!!!! ';
} 

// for big assign - call header include here
include('includes/header.php');

?>
<main class="view">

<?php echo '<h1 id="about">About '.$first_name.' '.$last_name.' </h1>';?>
<?php
if($feedback == '') {
echo '<ul>';   
//echo '<li><b>First Name: </b>'.$first_name.'</li>';   
//echo '<li><b>Last Name: </b>'.$last_name.'</li>';
echo '<li><b>Band: </b>'.$band.'</li>';     
echo '<li><b>Age: </b>'.$age.'</li>';   
echo '<li><b>Instrument: </b>'.$instrument.'</li>';      
echo '</ul>'; 
echo '<li><p id="description"><b>Info: </b>'.$description.'</p></li>';   
echo '<a href="project.php"><p id="return">Return back to the project page</p></a>'; 
}

// mysqli_free_result($result);  we are going to talk to our database
// in our aside, so we will cut it and add it later in the code
// mysqli_close($iConn);
?>

</main>

<aside class="project-view">
 <?php
 if($feedback == '') {
echo '<img class="project" src="images/rockstar_id'.$id.'.jpeg " alt=" '.$first_name.' "> ';
echo '<p class="blurb">'.$blurb.'</p>';
}
 ?>   
</aside>
</div> <!-- end WRAPPER -->

<?php
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');