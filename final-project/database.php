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
</div> <!--end div success--->
<?php endif ; 


if(isset($_SESSION['username'])) : ?>

<h3 id="hello">Hello, <?php echo $_SESSION['username']; ?>!</h3>
<p id="logout"><a href="index.php?logout='1' ">Log Out</a></p>

<?php endif ; ?>

<!--HEADER ENDS HERE--->
<h1 class="headline"><?php echo $headline; ?></h1>
<h2><?php echo $subheader; ?></h2>

<div class="plants">
<?php
$sql = 'SELECT * FROM plants';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) {
  while($row = mysqli_fetch_assoc($result)) { 
  echo '<ul class="plants">';
  echo '<li><img src="images/'.$row['image'].'.jpeg" alt=" '.$row['name'].' "></li>';
  echo '<li><b>Name: </b> '.$row['name'].'</li>';
  echo '<li><b>Light: </b> '.$row['light'].'</li>';
  echo '<li><b>Water: </b> '.$row['water'].'</li>';
  echo '<li><b>Pet Friendly: </b> '.$row['pet_friendly'].'</li>';
  echo '<li><b>Description: </b> '.$row['description'].'</li>';
  echo '<li><b>Price: </b>$'.$row['price'].'.00</li>';
  echo '</ul>';
  echo '<h3 class="plants">For more information about the '.$row['name'].', 
  <a href="plant-view.php?id='.$row['plant_id'].' " >please click here!</a></h3>';  
  echo '<hr>';
  } // while
  
  } else {
      echo 'Uh oh...';
  }
  
  mysqli_free_result($result);
  mysqli_close($iConn);
  
  ?>
  </div> <!--close plants-->

  
<?php include('includes/footer.php'); ?>