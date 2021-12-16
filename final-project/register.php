<?php //register.php

// 1. register.php (include to server.php)
// 2. login.php (include to server.php)
// 3. server.php (include to config.php) - we will connect to database selecting a different table
// 4. config.php (include to credentials.php) same ob_start and error function as wk 8
// 5. credentials.php database credentials
// 6. index.php   land here when login successful

include('server.php'); 
include('includes/form-header.php'); 

?>
<div id="wrapper" class="reg">
<h1 class="register">Register Now!</h1>

<form class="register" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset class="register">

<label for="first_name_reg">First Name</label>
<input type="text" name="first_name" id="first_name_reg" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">

<label for="last_name_reg">Last Name</label>
<input type="text" name="last_name" id="last_name_reg" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">

<label for="email_reg">Email</label>
<input type="email" name="email" id="email_reg" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">

<label for="username_reg">Username</label>
<input type="text" name="username" id="username_reg" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']);?>">

<label for="password_1">Password</label>
<input type="password" name="password_1" id="password_1" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1']);?>">

<label for="password_2">Confirm Your Password</label>
<input type="password" name="password_2" id="password_2" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2']);?>">


<button type="submit" name="reg_user" class="btn">Register</button>

<button type="button" onclick="window.location.href='
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>

<?php
include('errors.php'); ?>

</fieldset>
</form>

<aside class="register">
<p class="register">Already Registered?<a href="login.php">Log in Here!</a></p></aside>


</div> <!--close wrapper-->
</body>
</html>