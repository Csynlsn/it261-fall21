<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Currency 2 Form with a drop down select option</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>
" method="post">
<fieldset>
<legend><h1>Currency Converter</h1></legend>
<label for="name">NAME</label>
<input type="text" name="name">
<label for="email">EMAIL</label>
<input type="email" name="email">

<label for="amount">How much money do you have?</label>
<input type="number" name="amount">

<label for="currency">Choose your currency!</label>
<!--this is our radio button choice. can click on only one at a time-->

<ul>
<li><input type="radio" name="currency" value="0.013">Rubles</li>
<li><input type="radio" name="currency" value="0.76">Canadian</li>
<li><input type="radio" name="currency" value="1.28">Pounds</li>
<li><input type="radio" name="currency" value="1.18">Euros</li>
<li><input type="radio" name="currency" value="0.0094">Yen</li>
</ul>

<label for="bank">Choose Your Banking Institution</label>

<select name="bank">
<option value="" NULL>Select One</option>
<option value="BOA">Bank of America</option>
<option value="key">Key Bank</option>
<option value="BECU">Boeing Employees Credit Union</option>
<option value="chase">Chase</option>
<option value="mattress">Mattress</option>


</select>

<input type="submit" value="Convert It">
<p><a href="">RESET</a></p>
</fieldset>
</form>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

//if posts name, email, currency, ammount are empty
//we will call out a specific echo

if(empty($_POST['name'])) {
    echo '<span class="error">Please fill out your name</span>';
}

if(empty($_POST['email'])) {
    echo '<span class="error">Please fill out your email</span>';
}

if(empty($_POST['amount'])) {
    echo '<span class="error">Please fill out your amount</span>';
}

if(empty($_POST['currency'])) {
    echo '<span class="error">Please choose your currency</span>';
}

//if post bank is NULL (no " "), please select your bank

if($_POST['bank'] == NULL) {
echo '<span class="error">Please choose your banking institution!</span>';
}

if(isset(
    $_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'],
    $_POST['bank']
)) {
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$bank = $_POST['bank'];

$total = $amount * $currency;

$friendly_total = floor($total);

echo '
<div class="box">
<h2>Hello, '.$name.'</h2>
<p>You have $'.$friendly_total.' American Dollars, 
and it will be deposited in <b>'.$bank.'</b> and we will email you at <b>'.$email.'</b> in the next 24 hours.</p>

</div>
';

} //close isset


} //SERVER REQUEST

?>
</body>
</html>