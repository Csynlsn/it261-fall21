<?php

//name?     AVERAGE SPEED 65MILES/HR
//how many miles do you want to go total?
//how mamny miles do you want to travel in ONE DAY/PER DAY?
//how much is your gas?  3.00  3.50   4.00
//fuel efficiency? 
//    terrible =10MILES/GALLON    getting better=20MILES/GALLONS       good=30miles/gal       great=40 miles/gallon

// traveling 90 miles 
// 1HR a day 
// gas $3.00
// efficency = GREAT
//-------------------------------------> MONEY:$6.75   GAL:2.25   DAYS:1.3846152   MILES:90   EFFIC:40

// traveling 90 miles 
// 1HR a day  
// gas $3.00
// efficency = GOOD
//-------------------------------------> MONEY:$9   GAL:3   DAYS:1.3846152   MILES:90   EFFIC:30

// traveling 1,300 miles 
// 10 HR a day         @ 65 MILES/HR WILL TRAVEL APPROX 650 MILES
// gas $3.00
// efficency = GOOD
//-------------------------------------> MONEY:$130   GAL:43.33333   DAYS:2  MILES:1300   EFFIC:30


// MILES / FUEL EFFECIENCY * $GAS = TOTAL GAS $$

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculator.php</title>
<link href="css/calc.css" type="text/css" rel="stylesheet">
</head>

<body>
<h1><b>Our Calculator</b></h1>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>
" method="post">
<fieldset>
<label for="name"><b>Your name</b></label>
<input type="text" name="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);   ;?>
">    
<label for="miles"><b>How many miles will you be driving?</b></label>
<input type="text" name="miles" value="
<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);   ;?>
">
<label for="hours"><b>How many hours per day would you like to drive?</b></label>
<input type="text" name="hours" value="
<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);   ;?>
">
<label for="price"><b>Price Per Gallon</b></label>
<ul>
<li><input type="radio" name="price" value="3.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.00' ) echo 'checked="checked" ' ;?>
>$3.00</li>
<li><input type="radio" name="price" value="3.50"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.50' ) echo 'checked="checked" ' ;?>
>$3.50</li>
<li><input type="radio" name="price" value="4.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '4.00' ) echo 'checked="checked" ' ;?>
>$4.00</li>
</ul>

<label for="fuel"><b>Fuel Efficiency</b></label>
<select name="fuel">
<option value="" NULL>Select One</option>
<option value="10">Awful</option>
<option value="20">OK</option>
<option value="30">Good</option>
<option value="40">Excellent</option>
</select>
<br><!--sorry-->

<input type="submit" value="Calculate">
<input type="submit" value="Reset">
</fieldset>
</form>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {


if(empty($_POST['name'])) {
    echo '<span class="error">Please enter your name</span>';
}
    
if(empty($_POST['miles'])) {
    echo '<span class="error">Please enter your miles</span>';
}

if(empty($_POST['hours'])) {
    echo '<span class="error">Please enter your hours</span>';
}

if(empty($_POST['price'])) {
    echo '<span class="error">Please enter your price per gallon</span>';
}


if($_POST['fuel'] == NULL) {
    echo '<span class="error">Please select your vehicle\'s fuel efficency</span>';
}


if(isset(
    $_POST['name'],
    $_POST['miles'],
    $_POST['hours'],
    $_POST['price'],
    $_POST['fuel']
)) {
$name = $_POST['name'];    
$miles = $_POST['miles'];
$hours = $_POST['hours'];
$price = $_POST['price'];
$fuel = $_POST['fuel'];

$total_price = ($miles/$fuel) * $price;
$gallons = $miles/$fuel;
$total_hours = $miles/65;
$days = $total_hours / 24;

$friendly_hours = number_format($total_hours, 2);
$friendly_days = number_format($days, 1);

echo '
<div class="box">
<h2 id="red">Calculator Results</h2>
<p>Hello, '.$name.'. You will be driving a total of '.$miles.' miles. 
You will be driving for '.$friendly_hours.' hours over approximately '.$friendly_days.' days.
With a fuel efficency of '.$fuel.' miles per gallon,
you can expect to pay $'.$total_price.' for '.$gallons.' gallons of fuel.</p>


</div>';

}// CLOSE ISSET

} // SERVER REQUEST






?>
</body>
</html>