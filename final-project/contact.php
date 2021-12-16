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

include('includes/contact-header.php');

// notification message
// if successful, welcome the end user

if(isset($_SESSION['success'])) : ?>

<div class="success">
<h3>  <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>  </h3>
</div> <!--end div success-->
<?php endif ; 


if(isset($_SESSION['username'])) : ?>

<h3 id="hello">Hello, <?php echo $_SESSION['username']; ?>!</h3>
<p id="logout"><a href="index.php?logout='1' ">Log Out</a></p>

<?php endif ; ?>

<!--HEADER ENDS HERE-->
<h1 class="headline"><?php echo $headline; ?></h1>
<main class="contact">
<h2><?php echo $subheader; ?></h2>
</main>

<!--form start-->


<div class="form-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>

<label for="first_name">First Name</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>
">
<span class="error">
    <?php echo $first_name_Err; ?>
</span>

<label for="last_name_form">Last Name</label>
<input type="text" name="last_name_form" value="
<?php if(isset($_POST['last_name_form'])) echo htmlspecialchars($_POST['last_name_form']) ;?>
" >
<span class="error">
    <?php echo $last_name_form_Err; ?>
</span>

<label for="email_form">Email</label>
<input type="email" minlength="1" name="email_form" value="
<?php if(isset($_POST['email_form'])) echo htmlspecialchars($_POST['email_form']) ;?>
">
<span class="error">
    <?php echo $email_form_Err; ?>
</span>

<label for="phone">Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>
" min="10" max="10">
<span class="error">
    <?php echo $phone_Err; ?>
</span>


<label for="preference">Select Your Pot</label>
<ul>
<li><input type="radio" name="preference" value="plastic"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'plastic') echo 'checked="checked"' ;?>
>Plastic   ($12.99)</li>
<li><input type="radio" name="preference" value="terracotta"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'terracotta') echo 'checked="checked"' ;?>
>Terra Cotta   ($14.99)</li>
<li><input type="radio" name="preference" value="ceramic"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'ceramic') echo 'checked="checked"' ;?>
>Ceramic   (34.99)</li>
<li><input type="radio" name="preference" value="ornate"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'ornate') echo 'checked="checked"' ;?>
>Ornate Ceramic   ($99.99)</li>
</ul>
<span class="error">
    <?php echo $preference_Err; ?>
</span>

<label for="plants">Select Your Plants</label>
<ul>
<li><input type="checkbox" name="plants[]" value="dragon"
<?php if(isset($_POST['plants']) && in_array('dragon', $plants)) echo 'checked="checked"' ;?>
>Dracaena Gold Star</li>
<li><input type="checkbox" name="plants[]" value="snaker"
<?php if(isset($_POST['plants']) && in_array('snake', $plants)) echo 'checked="checked"' ;?>
>Snake Plant Laurentii</li>
<li><input type="checkbox" name="plants[]" value="rubber"
<?php if(isset($_POST['plants']) && in_array('rubber', $plants)) echo 'checked="checked"' ;?>
>Rubber Tree</li>
<li><input type="checkbox" name="plants[]" value="monstera"
<?php if(isset($_POST['plants']) && in_array('monstera', $plants)) echo 'checked="checked"' ;?>
>Monstera Deliciosa</li>
<li><input type="checkbox" name="plants[]" value="palm"
<?php if(isset($_POST['plants']) && in_array('palm', $plants)) echo 'checked="checked"' ;?>
>Ponytail Palm</li>
<li><input type="checkbox" name="plants[]" value="pothos"
<?php if(isset($_POST['plants']) && in_array('pothos', $plants)) echo 'checked="checked"' ;?>
>Pothos</li>
<li><input type="checkbox" name="plants[]" value="jade"
<?php if(isset($_POST['plants']) && in_array('jade', $plants)) echo 'checked="checked"' ;?>
>Jade Plant</li>
</ul>
<span class="error">
    <?php echo $plants_Err; ?>
</span>

<label for="comments">Questions or Comments?</label>
<span class="error"><?php echo $comments_Err; ?></span>
<textarea name="comments" id="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>


<label for="policy">Do you agree to our shipping policy?</label>
<ul>
<li><input type="radio" name="policy" value="agree"
<?php if(isset($_POST['policy']) && $_POST['policy'] == 'agree') echo 'checked="checked"' ;?>
>OK!<li>
</ul>
<span class="error">
    <?php echo $policy_Err; ?>
</span>

<div class="send">
<input type="submit" value="Send it">
<p><a href="">Reset</a></p>
</div>

</fieldset>
</form>
</div> <!--END FORM CONTAINER-->


<!--form end-->

<?php include('includes/footer.php'); ?>