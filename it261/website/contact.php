<?php
include('config.php');
include('includes/contact_header.php');

// begin php for form


$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$preference = '';
$cheese = '';
$country = '';
$comments = '';
$policy = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$phone_Err = '';
$preference_Err = '';
$cheese_Err = '';
$country_Err = '';
$comments_Err = '';
$policy_Err = '';



if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['first_name'])) {
        $first_name_Err = 'To whom are we sending this cheese?';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please provide your Last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please provide your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['preference'])) {
        $preference_Err = 'What style of cheese do you prefer?';
    } else {
        $preference = $_POST['preference'];
    }

    if(empty($_POST['cheese'])) {
        $cheese_Err = 'Please select your cheeses';
    } else {
        $cheese = $_POST['cheese'];
    }

    if($_POST['country'] == NULL) {
        $country_Err = 'Please select your country';
    } else {
        $country = $_POST['country'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please tell us your secrets';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['policy'])) {
        $policy_Err = 'You must agree to our terms';
    } else {
        $policy = $_POST['policy'];
    }

    // phone number
    if(empty($_POST['phone'])) {  
        $phone_Err = 'We require a valid phone number!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { 
        $phone_Err = 'Invalid format!'; 
        } else{
        $phone = $_POST['phone'];
        }
        }

// cheese function

function cheese_time() {
    $my_return = '';
    if(!empty($_POST['cheese'])) {
        $my_return = implode(', ', $_POST['cheese']);
        return $my_return;  
    } 
    // return $my_return;  
    
    } // close function cheese_time()


    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['preference'],
        $_POST['cheese'],
        $_POST['country'],
        $_POST['comments'],
        $_POST['policy']
        
        )) { 
            
        $to = 'admin@kaciecodes.com';
        $subject = 'Test Email' .date('m/d/y') ;
        $body = '
        First name: '.$first_name.' '.PHP_EOL.'
        Last name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Preference: '.$preference.' '.PHP_EOL.'
        Cheese: '.cheese_time().' '.PHP_EOL.'
        Country: '.$country.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';
            
        $headers = array(
        'From' => 'noreply@kaciecodes.com',
        'Relpy-to' => ''.$email.'',
        );
            
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        }   


} // end server request method

?>

    <div id="wrapper"> 
    <div class="contact">
<main class="contact">   
<h1 class="contact"> <?php echo $headline; ?></h1>
<h2 class="contact">Please Fill Out Our Order Form:</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>

<label for="first_name">First Name</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>
">
<span class="error">
    <?php echo $first_name_Err; ?>
</span>

<label for="last_name">Last Name</label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>
">
<span class="error">
    <?php echo $last_name_Err; ?>
</span>

<label for="email">Email</label>
<input type="email" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>
">
<span class="error">
    <?php echo $email_Err; ?>
</span>

<label for="phone">Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>
">
<span class="error">
    <?php echo $phone_Err; ?>
</span>



<label for="preference">Which Type of Cheese Do You Prefer?</label>
<ul>
<li><input type="radio" name="preference" value="goat"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'goat') echo 'checked="checked"' ;?>
>Goat</li>
<li><input type="radio" name="preference" value="cow"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'cow') echo 'checked="checked"' ;?>
>Cow</li>
<li><input type="radio" name="preference" value="other"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'other') echo 'checked="checked"' ;?>
>Other</li>
<li><input type="radio" name="preference" value="all"
<?php if(isset($_POST['preference']) && $_POST['preference'] == 'all') echo 'checked="checked"' ;?>
>I like all cheese</li>
</ul>
<span class="error">
    <?php echo $preference_Err; ?>
</span>



<label for="cheese">Select Your Cheeses</label>
<ul>
<li><input type="checkbox" name="cheese[]" value="manchego"
<?php if(isset($_POST['cheese']) && in_array('manchego', $cheese)) echo 'checked="checked"' ;?>
>Manchego</li>
<li><input type="checkbox" name="cheese[]" value="cheddar"
<?php if(isset($_POST['cheese']) && in_array('cheddar', $cheese)) echo 'checked="checked"' ;?>
>Cheddar</li>
<li><input type="checkbox" name="cheese[]" value="camenbert"
<?php if(isset($_POST['cheese']) && in_array('camenbert', $cheese)) echo 'checked="checked"' ;?>
>Camembert</li>
<li><input type="checkbox" name="cheese[]" value="chevre"
<?php if(isset($_POST['cheese']) && in_array('chevre', $cheese)) echo 'checked="checked"' ;?>
>Chevre</li>
<li><input type="checkbox" name="cheese[]" value="taleggio"
<?php if(isset($_POST['cheese']) && in_array('taleggio', $cheese)) echo 'checked="checked"' ;?>
>Taleggio</li>
<li><input type="checkbox" name="cheese[]" value="mozz"
<?php if(isset($_POST['cheese']) && in_array('mozz', $cheese)) echo 'checked="checked"' ;?>
>Mozzarella</li>
<li><input type="checkbox" name="cheese[]" value="bleu"
<?php if(isset($_POST['cheese']) && in_array('bleu', $cheese)) echo 'checked="checked"' ;?>
>Bleu</li>
</ul>
<span class="error">
    <?php echo $cheese_Err; ?>
</span>


<label for="country">Select Your Cheesemaking Country</label>
<select name="country">
<option value="" NULL
<?php if(isset($_POST['country']) && $_POST['country'] == NULL) echo 'selected="unselected"';?>
>Select One</option>
<option value="fr"
<?php if(isset($_POST['country']) && $_POST['country'] == 'fr') echo 'selected="selected"';?>
>France</option>
<option value="ger"
<?php if(isset($_POST['country']) && $_POST['country'] == 'ger') echo 'selected="selected"';?>
>Germany</option>
<option value="swiss"
<?php if(isset($_POST['country']) && $_POST['country'] == 'swiss') echo 'selected="selected"';?>
>Switzerland</option>
<option value="us"
<?php if(isset($_POST['country']) && $_POST['country'] == 'us') echo 'selected="selected"';?>
>United States</option>
<option value="spain"
<?php if(isset($_POST['country']) && $_POST['country'] == 'spain') echo 'selected="selected"';?>
>Spain</option>
</select>
<span class="error">
    <?php echo $country_Err; ?>
</span>


<label for="comments">Do you have a cheese suggestion for us?<br>Let us know in the comments!</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
<span class="error">
    <?php echo $comments_Err; ?>
</span>


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

</main> 
    
<aside class="contact">   
<?php echo cheese_pics(); ?>
</aside>
</div> <!-- end contact -->
<?php
include('includes/footer.php');
?>
