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
<p class="success-p">  <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>  </p>
</div> <!--end div success-->
<?php endif ; 


if(isset($_SESSION['username'])) : ?>

<p id="hello">Hello, <?php echo $_SESSION['username']; ?>!</p>
<p id="logout"><a href="index.php?logout='1' ">Log Out</a></p>

<?php endif ; ?>


<!--HEADER ENDS HERE-->
<h1 class="headline"><?php echo $headline; ?></h1>

<main class="home">
<h2><?php echo $subheader; ?></h2>

</main>
<div class="hero">
<img class="hero" src="images/city_plants.jpg" alt="city plants">
</div><!--end hero-->


<?php include('includes/footer.php'); ?>