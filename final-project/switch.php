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

<main class="switch">
<div class="border" <?php echo $color; ?>>
<h2 class="switch"><?php echo $sale;?> The <?php echo $plant; ?></h2>
</div>
<div class="flex">

<img class="switch" src="images/<?php echo $pic;?>.jpg" alt="<?php echo $alt; ?>">
<p class="absolute"><?php echo $sale;?></p>
<p class="switch"><?php echo $content; ?></p>


<ul class="switch">
    <?php echo my_switch($day); ?>
</ul> 
</div>
</main>


<?php include('includes/footer.php'); ?>