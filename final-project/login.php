<?php //login.php form! 

include('server.php'); //server.php is conected to config.php which is connected to credentials.php
include('includes/form-header.php');
?>
<div class="wrapper">
<h1 class="headline"><?php echo $headline; ?></h1>
<h2><?php echo $subheader; ?></h2>

<div class="form">
<form class="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset class="login">

<label for="username">Username</label>
<input type="text" name="username" id="username" value="<?php 
if(isset($_POST['username'])) echo $_POST['username'];?>">

<label for="password">Password</label>
<input type="password" id="password" name="password">

<button type="submit" class="btn" name="login_user">Login</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?> ' ">
Reset</button>

<?php  
include('errors.php');
?>

</fieldset>
</form>
</div> <!--end form div-->
<div class="block">
<p class="join-p">Interested In Joining?</p>
<p class="register"><a href="register.php">Register Here!</a></p></div> 

</div> <!--end wrapper-->
</body>
</html>


